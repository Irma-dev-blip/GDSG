<?php
require_once __DIR__ . '/db.php';

function get_projects()
{
    $pdo = db_connect();
    if (!$pdo) {
        return [];
    }
    $stmt = $pdo->query('SELECT id, title, slug, status, created_at, updated_at FROM projects ORDER BY updated_at DESC');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_project($id)
{
    $pdo = db_connect();
    if (!$pdo) return null;
    $stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function create_project($data)
{
    $pdo = db_connect();
    if (!$pdo) return false;
    $stmt = $pdo->prepare('INSERT INTO projects (title, slug, summary, objectives, technologies, research_area_id, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())');
    return $stmt->execute([
        $data['title'] ?? null,
        $data['slug'] ?? null,
        $data['summary'] ?? null,
        $data['objectives'] ?? null,
        $data['technologies'] ?? null,
        $data['research_area_id'] ?? null,
        $data['status'] ?? 'ongoing',
    ]);
}

function update_project($id, $data)
{
    $pdo = db_connect();
    if (!$pdo) return false;
    $stmt = $pdo->prepare('UPDATE projects SET title = ?, slug = ?, summary = ?, objectives = ?, technologies = ?, research_area_id = ?, status = ?, updated_at = NOW() WHERE id = ?');
    return $stmt->execute([
        $data['title'] ?? null,
        $data['slug'] ?? null,
        $data['summary'] ?? null,
        $data['objectives'] ?? null,
        $data['technologies'] ?? null,
        $data['research_area_id'] ?? null,
        $data['status'] ?? 'ongoing',
        $id,
    ]);
}

function delete_project($id)
{
    $pdo = db_connect();
    if (!$pdo) return false;
    $stmt = $pdo->prepare('DELETE FROM projects WHERE id = ?');
    return $stmt->execute([$id]);
}
