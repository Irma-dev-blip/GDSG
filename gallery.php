<?php
$pageTitle = 'Gallery';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Gallery</h1>
                <p class="lead text-muted">Visual highlights from our research, lab work, and field studies.</p>
            </div>
        </div>
        <div class="row g-3 mt-4">
            <div class="col-sm-6 col-lg-4">
                <div class="card card-soft overflow-hidden">
                    <img src="assets/images/placeholder.svg" alt="Satellite imagery research visualization" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-soft overflow-hidden">
                    <img src="assets/images/placeholder.svg" alt="Researchers analyzing geospatial data" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-soft overflow-hidden">
                    <img src="assets/images/placeholder.svg" alt="Earth observation dashboard" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
