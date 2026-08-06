<?php
$pageTitle = 'Team';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Research Team</h1>
                <p class="lead text-muted">A multidisciplinary collective of scientists and engineers pioneering the intersection of AI, GIS, and Earth observation.</p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card p-4 card-soft h-100 text-center">
                    <img src="assets/images/placeholder.svg" alt="Dr. Elena Rostova" class="rounded-circle mb-3" width="120" height="120">
                    <h3 class="h5">Dr. Elena Rostova</h3>
                    <p class="text-muted">Lead Scientist</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 card-soft h-100 text-center">
                    <img src="assets/images/placeholder.svg" alt="Marcus Chen" class="rounded-circle mb-3" width="120" height="120">
                    <h3 class="h5">Marcus Chen</h3>
                    <p class="text-muted">Ph.D. Researcher</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 card-soft h-100 text-center">
                    <img src="assets/images/placeholder.svg" alt="Sarah Jenkins" class="rounded-circle mb-3" width="120" height="120">
                    <h3 class="h5">Sarah Jenkins</h3>
                    <p class="text-muted">Geospatial Analyst</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
