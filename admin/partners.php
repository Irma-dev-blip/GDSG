<?php
$pageTitle = 'Admin Partners';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Partners</h1>
                <p class="text-muted">Manage partner organizations and collaboration links.</p>
            </div>
            <a href="#" class="btn btn-primary">Add Partner</a>
        </div>
        <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Website</th>
                        <th>Description</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Academic Partner</td>
                        <td>https://example.edu</td>
                        <td>University collaboration for GeoAI research.</td>
                        <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
