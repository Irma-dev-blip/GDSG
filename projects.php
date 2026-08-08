<?php
$pageTitle = 'Projects';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Active Research Projects</h1>
                <p class="lead text-muted">Ongoing and completed projects that demonstrate our work at the intersection of geospatial science, AI, and Earth observation.</p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/Agriculture_area_under_flood_GDSG_map.jpg" alt="Agricultural flood impact map" class="image-card__media">
                    <div class="image-card__body"><h3 class="h5">Thermographic Mapping of Urban Microclimates</h3><p class="text-muted">Using satellite radar and thermal data to map urban heat islands and support cooling solutions.</p><a href="project.php" class="text-primary">View project details</a></div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/Forest_fire_Severity_Murree_Kotli_Map.jpg" alt="Forest fire severity map" class="image-card__media">
                    <div class="image-card__body"><h3 class="h5">Forest Biomass Estimation from Remote Sensing</h3><p class="text-muted">Estimating forest biomass using multi-sensor satellite inputs and statistical modeling.</p><a href="project.php" class="text-primary">View project details</a></div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100">
                    <img src="assets/images/geo-satellite.jpg" alt="Satellite imagery visualization" class="image-card__media">
                    <div class="image-card__body"><h3 class="h5">Satellite Imagery for Environmental Monitoring</h3><p class="text-muted">Monitoring deforestation, water quality, and urban expansion with Earth observation analytics.</p><a href="project.php" class="text-primary">View project details</a></div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
