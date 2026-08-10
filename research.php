<?php
$pageTitle = 'Research';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/header.php';
?>
<section class="research-page py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Research Domains</h1>
                <p class="lead text-muted">Our research connects environmental intelligence, hierarchical geospatial infrastructure, and agricultural knowledge with GIS, data engineering, and AI.</p>
            </div>
        </div>
        <div class="row g-4 mt-4 stagger">
            <div class="col-lg-6">
                <div class="card research-domain-card environmental-intelligence-card p-4 card-soft h-100 feature-card tilt-card">
                    <h3 class="environmental-intelligence-title">Environmental Intelligence &amp; Air Quality</h3>
                    <p class="text-muted">Monitor smog and pollution across Punjab through district-level AQI maps, source-contribution analysis, historical comparisons, and CNN/LSTM-CNN forecasts for 7-day, 14-day, and 21-day horizons.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card research-domain-card p-4 card-soft h-100 feature-card tilt-card">
                    <h3>Hierarchical Geospatial Addressing</h3>
                    <p class="text-muted">Build precise digital location infrastructure through HumMuqaam's L0-to-L6 hierarchy, administrative boundaries, spatial grids, point-in-polygon analysis, and unique D-Code assignment.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card research-domain-card p-4 card-soft h-100 feature-card tilt-card">
                    <h3>Agricultural Knowledge Systems</h3>
                    <p class="text-muted">Develop structured crop intelligence covering varieties, seasons, soil, climate, irrigation, fertilizer, diseases, pests, treatments, growth stages, and yield information for data-driven agriculture.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card research-domain-card p-4 card-soft h-100 feature-card tilt-card">
                    <h3>GeoAI, Spatial Data &amp; Decision Support</h3>
                    <p class="text-muted">Combine PostgreSQL/PostGIS, spatial joins, APIs, coordinate transformations, data engineering, visualization, automation, machine learning, and environmental or agricultural datasets into usable decision-support platforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
