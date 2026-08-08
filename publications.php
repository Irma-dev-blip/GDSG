<?php
$pageTitle = 'Publications';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Research Publications</h1>
                <p class="lead text-muted">Explore recent peer-reviewed research, conference papers, and technical reports from GDSG.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#publication-list" class="btn btn-outline-primary">Browse publications</a>
            </div>
        </div>
        <div class="card card-soft p-4 mt-4 reveal">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search publications...">
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>All Years</option>
                        <option>2024</option>
                        <option>2023</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>All Categories</option>
                        <option>GeoAI</option>
                        <option>Earth Observation</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>Type</option>
                        <option>Journal</option>
                        <option>Conference</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="publication-list" class="row g-4 mt-4 stagger">
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/journal_of_agriculture_policy_and_transformation.jpg" alt="Journal cover for agriculture policy and transformation" class="image-card__media publication-card__media">
                    <div class="image-card__body d-flex flex-column">
                        <span class="text-muted">Journal Article</span>
                        <h3 class="h5 mt-2">Agriculture Policy and Transformation</h3>
                        <p class="text-muted">Research on policy, land systems, and data-informed agricultural change.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm align-self-start mt-auto">View publication</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/journal_of_public_policy_practitioners_article.jpg" alt="Public policy practitioners journal article" class="image-card__media publication-card__media">
                    <div class="image-card__body d-flex flex-column">
                        <span class="text-muted">Policy Research</span>
                        <h3 class="h5 mt-2">Journal of Public Policy Practitioners</h3>
                        <p class="text-muted">Translating geospatial evidence into practical public policy decisions.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm align-self-start mt-auto">View publication</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card card-soft image-card h-100 tilt-card">
                    <img src="assets/images/Optimizing_agriculture_policy_journal.jpg" alt="Optimizing agriculture policy journal cover" class="image-card__media publication-card__media">
                    <div class="image-card__body d-flex flex-column">
                        <span class="text-muted">Research Paper</span>
                        <h3 class="h5 mt-2">Optimizing Agriculture Policy</h3>
                        <p class="text-muted">Spatial analysis approaches for more resilient agricultural planning.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm align-self-start mt-auto">View publication</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
