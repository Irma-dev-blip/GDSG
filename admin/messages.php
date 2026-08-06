<?php
$pageTitle = 'Admin Messages';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Messages</h1>
                <p class="text-muted">Review incoming contact messages submitted through the website.</p>
            </div>
        </div>
        <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane Doe</td>
                        <td>jane@example.com</td>
                        <td>Interested in collaboration opportunities for environmental monitoring.</td>
                        <td>2026-08-06</td>
                        <td class="text-end"><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
