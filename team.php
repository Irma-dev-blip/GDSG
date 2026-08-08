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
        <div class="row g-4 mt-4 stagger">
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/Team_picture.jpg" alt="GDSG research team together" class="image-card__media team-card__media">
                    <div class="image-card__body">
                        <h3 class="h5">GDSG Research Collective</h3>
                        <p class="text-muted mb-0">A collaborative team connecting geospatial science, AI, and environmental research.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/Founder_maria_with_Girl.jpg" alt="GDSG founder with a young participant" class="image-card__media team-card__media">
                    <div class="image-card__body">
                        <h3 class="h5">Research Leadership</h3>
                        <p class="text-muted mb-0">Guiding impactful research and building the next generation of geospatial leaders.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/Earth_day_Founder_Maria_Seminar.jpg" alt="Founder Maria speaking at an Earth Day seminar" class="image-card__media team-card__media">
                    <div class="image-card__body">
                        <h3 class="h5">Knowledge In Action</h3>
                        <p class="text-muted mb-0">Sharing practical insight through seminars, partnerships, and open scientific dialogue.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
