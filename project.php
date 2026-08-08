<?php
$pageTitle = 'Project Detail';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Urban Heat Island Mitigation Modeling</h1>
                <p class="lead text-muted">A project that blends satellite data, thermal analysis, and GeoAI to support sustainable urban planning and environmental resilience.</p>
                <div class="card p-4 card-soft mb-4 reveal">
                    <h3 class="h5">Project Overview</h3>
                    <p class="text-muted">This research combines multi-temporal satellite observations, urban microclimate models, and machine learning to develop mitigation strategies for heat island effects in cities.</p>
                </div>
                <div class="row g-4 stagger">
                    <div class="col-md-6">
                        <div class="card p-4 card-soft tilt-card">
                            <h4>Objectives</h4>
                            <ul class="text-muted">
                                <li>Model urban temperature dynamics</li>
                                <li>Identify heat-vulnerable zones</li>
                                <li>Recommend cooling interventions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4 card-soft tilt-card">
                            <h4>Technologies</h4>
                            <p class="text-muted">Remote sensing, GeoAI, machine learning, GIS analytics.</p>
                        </div>
                    </div>
                </div>
                <div class="card p-4 card-soft mt-4 reveal">
                    <h4>Related Publications</h4>
                    <ul class="list-unstyled mb-0 text-muted">
                        <li>Spatiotemporal Deep Learning for Urban Heat Island Mitigation Strategies</li>
                        <li>Urban analytics using satellite-derived thermal data</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4 card-soft mb-4">
                    <h5>Project Metadata</h5>
                    <dl class="row">
                        <dt class="col-6 text-muted">Status</dt>
                        <dd class="col-6">Ongoing</dd>
                        <dt class="col-6 text-muted">Domain</dt>
                        <dd class="col-6">GeoAI, Earth Observation</dd>
                        <dt class="col-6 text-muted">Team</dt>
                        <dd class="col-6">Dr. Elena Rostova + 8 researchers</dd>
                    </dl>
                </div>
                <div class="card p-4 card-soft">
                    <h5>Principal Investigators</h5>
                    <p class="text-muted mb-2">Dr. Elena Rostova</p>
                    <p class="text-muted mb-0">Dr. S. Patel</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
