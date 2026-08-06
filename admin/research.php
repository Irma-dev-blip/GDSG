<?php
$pageTitle = 'Admin Research Areas';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Research Areas</h1>
                <p class="text-muted">Maintain the primary domains of GDSG research.</p>
            </div>
            <a href="#" class="btn btn-primary">Add Research Area</a>
        </div>
        <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Summary</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GeoAI</td>
                        <td>geoai</td>
                        <td>AI for spatial learning and analysis.</td>
                        <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
