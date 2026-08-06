<?php
$pageTitle = 'Admin News';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">News</h1>
                <p class="text-muted">Publish news, workshops, conferences, and events.</p>
            </div>
            <a href="#" class="btn btn-primary">Add News</a>
        </div>
        <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>New GeoAI collaboration announced</td>
                        <td>News</td>
                        <td>2026-08-06</td>
                        <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
