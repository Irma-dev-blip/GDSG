<?php
$pageTitle = 'Admin Publications';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Publications</h1>
                <p class="text-muted">Manage publication metadata, PDFs, and research outputs.</p>
            </div>
            <a href="#" class="btn btn-primary">Add Publication</a>
        </div>
        <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Journal</th>
                        <th>Year</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Foundation Models for Multi-Modal Earth Observation at Scale</td>
                        <td>Nature Geoscience</td>
                        <td>2024</td>
                        <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
