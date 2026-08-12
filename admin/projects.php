<?php
$pageTitle = 'Admin Projects';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/project_model.php';
require __DIR__ . '/../includes/admin-header.php';

$action = $_GET['action'] ?? 'list';
$message = '';
$error = '';

// Handle POST requests for add/edit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $slug = $_POST['slug'] ?? '';
    $summary = $_POST['summary'] ?? '';
    $status = $_POST['status'] ?? 'ongoing';
    
    if ($action === 'add') {
        if (create_project(['title' => $title, 'slug' => $slug, 'summary' => $summary, 'status' => $status])) {
            $message = 'Project added successfully!';
            $action = 'list';
        } else {
            $error = 'Failed to add project.';
        }
    } elseif ($action === 'edit') {
        $id = $_POST['id'] ?? 0;
        if (update_project($id, ['title' => $title, 'slug' => $slug, 'summary' => $summary, 'status' => $status])) {
            $message = 'Project updated successfully!';
            $action = 'list';
        } else {
            $error = 'Failed to update project.';
        }
    }
}

// Handle delete
if ($action === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (delete_project($id)) {
        $message = 'Project deleted successfully!';
        $action = 'list';
    } else {
        $error = 'Failed to delete project.';
    }
}

$projects = get_projects();
$current_project = null;
if (($action === 'edit' || $action === 'delete') && isset($_GET['id'])) {
    $current_project = get_project($_GET['id']);
}
?>
<section class="py-5">
    <div class="container">
        <?php if (!empty($message)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($message); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($error); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if ($action === 'add'): ?>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="display-6 fw-bold">Add New Project</h1>
                <a href="projects.php" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card p-4">
                <form method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug">
                    </div>
                    <div class="mb-3">
                        <label for="summary" class="form-label">Summary</label>
                        <textarea class="form-control" id="summary" name="summary" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Add Project</button>
                </form>
            </div>

        <?php elseif ($action === 'edit' && $current_project): ?>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="display-6 fw-bold">Edit Project</h1>
                <a href="projects.php" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card p-4">
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $current_project['id']; ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($current_project['title']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="<?php echo htmlspecialchars($current_project['slug']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="ongoing" <?php echo $current_project['status'] === 'ongoing' ? 'selected' : ''; ?>>Ongoing</option>
                            <option value="completed" <?php echo $current_project['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                            <option value="archived" <?php echo $current_project['status'] === 'archived' ? 'selected' : ''; ?>>Archived</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Update Project</button>
                </form>
            </div>

        <?php elseif ($action === 'delete' && $current_project): ?>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="display-6 fw-bold">Delete Project</h1>
                <a href="projects.php" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card p-4 border-danger">
                <h3 class="text-danger">Are you sure you want to delete this project?</h3>
                <p><strong>Title:</strong> <?php echo htmlspecialchars($current_project['title']); ?></p>
                <p class="text-muted">This action cannot be undone.</p>
                <div>
                    <a href="?action=delete&id=<?php echo $current_project['id']; ?>&confirm=yes" class="btn btn-danger">Yes, Delete</a>
                    <a href="projects.php" class="btn btn-secondary">No, Cancel</a>
                </div>
            </div>

        <?php else: // List view ?>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="display-6 fw-bold">Projects</h1>
                    <p class="text-muted">Manage project records and research details.</p>
                </div>
                <a href="projects.php?action=add" class="btn btn-success">+ Add Project</a>
            </div>
            <div class="table-responsive card card-soft p-4">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Updated</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($projects)): ?>
                            <?php foreach ($projects as $proj): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($proj['title']); ?></td>
                                    <td><?php echo htmlspecialchars($proj['status']); ?></td>
                                    <td><?php echo htmlspecialchars($proj['updated_at']); ?></td>
                                    <td class="text-end">
                                        <a href="?action=edit&id=<?php echo $proj['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="?action=delete&id=<?php echo $proj['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">No projects found. <a href="projects.php?action=add">Add one now</a>.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
