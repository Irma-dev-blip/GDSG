<?php
require_once __DIR__ . '/db.php';

if (!function_exists('get_projects')) {
    function get_projects()
    {
        $pdo = db_connect();
        if (!$pdo) {
            return [];
        }
        $stmt = $pdo->query('SELECT id, title, slug, status, created_at, updated_at FROM projects ORDER BY updated_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('get_project')) {
    function get_project($id)
    {
        $pdo = db_connect();
        if (!$pdo) return null;
        $stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('create_project')) {
    function create_project($data)
    {
        $pdo = db_connect();
        if (!$pdo) return false;
        $stmt = $pdo->prepare('INSERT INTO projects (title, slug, summary, objectives, technologies, research_area_id, status, featured_image, tags, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())');
        return $stmt->execute([
            $data['title'] ?? null,
            $data['slug'] ?? null,
            $data['summary'] ?? null,
            $data['objectives'] ?? null,
            $data['technologies'] ?? null,
            $data['research_area_id'] ?? null,
            $data['status'] ?? 'ongoing',
            $data['featured_image'] ?? null,
            $data['tags'] ?? null,
        ]);
    }
}

if (!function_exists('update_project')) {
    function update_project($id, $data)
    {
        $pdo = db_connect();
        if (!$pdo) return false;
        $stmt = $pdo->prepare('UPDATE projects SET title = ?, slug = ?, summary = ?, objectives = ?, technologies = ?, research_area_id = ?, status = ?, featured_image = ?, tags = ?, updated_at = NOW() WHERE id = ?');
        return $stmt->execute([
            $data['title'] ?? null,
            $data['slug'] ?? null,
            $data['summary'] ?? null,
            $data['objectives'] ?? null,
            $data['technologies'] ?? null,
            $data['research_area_id'] ?? null,
            $data['status'] ?? 'ongoing',
            $data['featured_image'] ?? null,
            $data['tags'] ?? null,
            $id,
        ]);
    }
}

if (!function_exists('delete_project')) {
    function delete_project($id)
    {
        $pdo = db_connect();
        if (!$pdo) return false;
        $stmt = $pdo->prepare('DELETE FROM projects WHERE id = ?');
        return $stmt->execute([$id]);
    }
}

// Project images CRUD
function add_project_image($project_id, $image_url, $caption = null)
{
    $pdo = db_connect();
    if (!$pdo) return false;
    // Let the database fill created_at (CURRENT_TIMESTAMP) so the SQL works on both MySQL and SQLite
    $stmt = $pdo->prepare('INSERT INTO project_images (project_id, image_url, caption) VALUES (?, ?, ?)');
    return $stmt->execute([$project_id, $image_url, $caption]);
}

function get_project_images($project_id)
{
    $pdo = db_connect();
    if (!$pdo) return [];
    $stmt = $pdo->prepare('SELECT id, image_url, caption, created_at FROM project_images WHERE project_id = ? ORDER BY created_at ASC');
    $stmt->execute([(int)$project_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function delete_project_image($id)
{
    $pdo = db_connect();
    if (!$pdo) return false;
    // attempt to remove file entry first
    $stmt = $pdo->prepare('SELECT image_url FROM project_images WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row && !empty($row['image_url'])) {
        $path = __DIR__ . '/../' . ltrim($row['image_url'], '/');
        if (is_file($path)) @unlink($path);
    }
    $stmt = $pdo->prepare('DELETE FROM project_images WHERE id = ?');
    return $stmt->execute([$id]);
}
