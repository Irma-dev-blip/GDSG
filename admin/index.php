<?php
$pageTitle = 'Admin Dashboard';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/admin-header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <h1 class="display-6 fw-bold">Admin Dashboard</h1>
                <p class="text-muted">Manage projects, research areas, publications, team members, news, and partners from one central location.</p>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>Projects</h5>
                    <p class="text-muted">Create and update research project records.</p>
                    <a href="projects.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>Research Areas</h5>
                    <p class="text-muted">Organize the research domains and their summaries.</p>
                    <a href="research.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>Publications</h5>
                    <p class="text-muted">Maintain the publication library and related metadata.</p>
                    <a href="publications.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>Team Members</h5>
                    <p class="text-muted">Add or update researcher profiles and biographies.</p>
                    <a href="team.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>Gallery</h5>
                    <p class="text-muted">Upload and manage visual assets.</p>
                    <a href="gallery.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-soft p-4 h-100">
                    <h5>News</h5>
                    <p class="text-muted">Publish news, events, and announcements.</p>
                    <a href="news.php" class="btn btn-outline-primary btn-sm">Manage</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
