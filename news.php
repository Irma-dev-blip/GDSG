<?php
$pageTitle = 'News';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">News & Events</h1>
                <p class="lead text-muted">Latest news, workshops, conferences, and research milestones from GDSG.</p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/World_environment_day_GDSG_Post.jpg" alt="World Environment Day GDSG announcement" class="image-card__media">
                    <div class="image-card__body">
                        <span class="badge bg-secondary text-white mb-2">News</span>
                        <h3 class="h5">New GeoAI collaboration announced</h3>
                        <p class="text-muted">GDSG partners with academic institutions to accelerate climate analytics research.</p>
                        <a href="#" class="text-primary">Read more</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/Earth_day_Founder_Maria_Seminar.jpg" alt="Founder Maria at an Earth Day seminar" class="image-card__media">
                    <div class="image-card__body">
                        <span class="badge bg-secondary text-white mb-2">Event</span>
                        <h3 class="h5">Workshop on Earth Observation analytics</h3>
                        <p class="text-muted">A hands-on workshop covering remote sensing, data fusion, and spatial modeling.</p>
                        <a href="#" class="text-primary">Learn more</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/Forest_fire_Severity_Murree_Kotli_Map.jpg" alt="Forest fire severity research map" class="image-card__media">
                    <div class="image-card__body">
                        <span class="badge bg-secondary text-white mb-2">Research</span>
                        <h3 class="h5">Mapping forest fire severity</h3>
                        <p class="text-muted">New spatial analysis highlights wildfire risk across Murree and Kotli.</p>
                        <a href="gallery.php" class="text-primary">View research imagery</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
