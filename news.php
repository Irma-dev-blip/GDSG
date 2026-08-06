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
            <div class="col-md-6">
                <article class="card p-4 card-soft h-100">
                    <span class="badge bg-secondary text-white mb-2">News</span>
                    <h3>New GeoAI collaboration announced</h3>
                    <p class="text-muted">GDSG partners with academic institutions to accelerate climate analytics research.</p>
                    <a href="#" class="text-primary">Read more</a>
                </article>
            </div>
            <div class="col-md-6">
                <article class="card p-4 card-soft h-100">
                    <span class="badge bg-secondary text-white mb-2">Event</span>
                    <h3>Workshop on Earth Observation analytics</h3>
                    <p class="text-muted">A hands-on workshop covering remote sensing, data fusion, and spatial modeling.</p>
                    <a href="#" class="text-primary">Learn more</a>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
