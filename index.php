<?php
$pageTitle = 'Home';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="hero-section py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="badge bg-secondary mb-3">Global Data Observatory Active</span>
                <h1 class="display-5 fw-bold">Advancing Geospatial Intelligence</h1>
                <p class="lead text-muted">Bridging Artificial Intelligence and Earth Observation to decode complex spatial dynamics, model environmental shifts, and engineer sustainable urban futures through rigorous scientific inquiry.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="research.php" class="btn btn-primary btn-primary-custom">Explore Research</a>
                    <a href="publications.php" class="btn btn-outline-secondary">View Publications</a>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card card-soft p-4 shadow-sm">
                    <h2 class="h4">Featured Research Domains</h2>
                    <div class="mt-4">
                        <div class="mb-3">
                            <h3 class="h6">GeoAI</h3>
                            <p class="mb-0 text-muted">Developing advanced machine learning architectures specialized for spatial datasets, topological neural networks, and generative modeling of geographic phenomena.</p>
                        </div>
                        <div class="mb-3">
                            <h3 class="h6">Earth Observation</h3>
                            <p class="mb-0 text-muted">Processing multi-spectral satellite imagery and LiDAR data to monitor environmental change, track deforestation, and quantify urban sprawl dynamics.</p>
                        </div>
                        <div>
                            <h3 class="h6">Spatial Analytics</h3>
                            <p class="mb-0 text-muted">Leveraging geospatial statistics to model climate risk, urban systems, and environmental resilience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <h2 class="mb-3">Featured Projects</h2>
                <p class="text-muted">Explore current initiatives that integrate geospatial intelligence, AI, and remote sensing to solve urban, environmental, and infrastructure challenges.</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="projects.php" class="btn btn-outline-primary">View all projects</a>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card feature-card p-4 h-100">
                    <span class="badge bg-primary text-white mb-3">Ongoing</span>
                    <h3>Urban Heat Island Mitigation Modeling</h3>
                    <p class="text-muted">Applying spatiotemporal deep learning to support urban cooling strategies and greenhouse gas reduction planning.</p>
                    <a href="project.php" class="text-primary">View project details</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card feature-card p-4 h-100">
                    <span class="badge bg-primary text-white mb-3">Ongoing</span>
                    <h3>Topological Neural Networks for Spatial Graphs</h3>
                    <p class="text-muted">Designing graph-based GeoAI models to interpret complex spatial relationships in infrastructure and environmental networks.</p>
                    <a href="project.php" class="text-primary">View project details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="card p-4 card-soft shadow-sm">
                    <h3 class="h5">100+</h3>
                    <p class="mb-0 text-muted">Publications published in journals and conferences.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4 card-soft shadow-sm">
                    <h3 class="h5">30+</h3>
                    <p class="mb-0 text-muted">Active projects addressing real-world geospatial challenges.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4 card-soft shadow-sm">
                    <h3 class="h5">20+</h3>
                    <p class="mb-0 text-muted">Research team members spanning AI, GIS, and Earth sciences.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h2 class="mb-3">Stay informed with our research updates</h2>
                <p class="text-muted">Discover highlights from recent studies, publications, and field investigations across geospatial domains.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="news.php" class="btn btn-primary btn-primary-custom">Read news</a>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
