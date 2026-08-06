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
        <div class="card card-soft p-4 mt-4">
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
        <div id="publication-list" class="row g-4 mt-4">
            <div class="col-12">
                <div class="card card-soft p-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                        <div>
                            <span class="text-muted">IEEE TGRS • Vol 62</span>
                            <h3 class="mt-2">Spatiotemporal Deep Learning for Urban Heat Island Mitigation Strategies</h3>
                            <p class="text-muted mb-1">K. Wu, L. Martinez, Dr. S. Patel</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" class="btn btn-outline-secondary btn-sm">PDF</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">DOI</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-soft p-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                        <div>
                            <span class="text-muted">Nature Geoscience • 2024</span>
                            <h3 class="mt-2">Foundation Models for Multi-Modal Earth Observation at Scale</h3>
                            <p class="text-muted mb-1">Dr. E. Sterling, J. Chen, M. Rossi, Dr. A. Vance</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" class="btn btn-outline-secondary btn-sm">PDF</a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">DOI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
