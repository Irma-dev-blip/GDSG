<?php
$pageTitle = 'Admin Projects';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/project_model.php';
require __DIR__ . '/../includes/admin-header.php';

$projects = get_projects();
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Projects</h1>
                <p class="text-muted">Manage project records and research details.</p>
            </div>
            <a href="#" class="btn btn-primary">Add Project</a>
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
                                <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">No projects found. Run the SQL seed or add new projects.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
