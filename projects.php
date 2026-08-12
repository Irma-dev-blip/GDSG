<?php
$pageTitle = 'Projects';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/project_model.php';
require __DIR__ . '/includes/header.php';
?>
<section class="projects-page py-5">
    <div class="container">
        <div class="projects-intro row align-items-end gy-4">
            <div class="col-lg-8">
                <span class="section-kicker">Ongoing research portfolio</span>
                <h1 class="display-6 fw-bold">Projects by GDSD</h1>
                <p class="lead text-muted mb-0">Three active platforms turning environmental, geospatial, and agricultural data into practical intelligence for Pakistan.</p>
            </div>
            <div class="col-lg-4">
                <div class="projects-intro__note">Status <strong>All projects ongoing</strong></div>
            </div>
        </div>
        <div class="row g-4 mt-5 stagger">
            <?php
            $projects = get_projects($pdo, 12);
            if (!empty($projects)) {
                foreach ($projects as $proj) {
                    $slugClass = preg_replace('/[^a-z0-9\-]/', '', strtolower($proj['slug'] ?? 'project'));
                    $visualLabel = htmlspecialchars($proj['research_area_id'] ? 'Project' : 'Project');
                    $metric = htmlspecialchars(ucfirst($proj['status'] ?? 'ongoing'));
                    $techs = array_filter(array_map('trim', explode(',', $proj['technologies'] ?? '')));
                    ?>
                    <?php
                    $images = get_project_images($proj['id']);
                    $firstImage = !empty($images) ? asset_url($images[0]['image_url']) : null;
                    $bgStyle = $firstImage ? ('style="background-image: url(' . htmlspecialchars($firstImage) . '); background-size: cover; background-position: center;"') : '';
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <article class="card project-card project-card--<?php echo $slugClass; ?> h-100 tilt-card">
                            <a href="project_detail.php?id=<?php echo (int)$proj['id']; ?>" class="project-card__media project-card__media--<?php echo $slugClass; ?>" aria-label="Open project detail" <?php echo $bgStyle; ?>>
                                <span class="project-visual__label"><?php echo $visualLabel; ?></span>
                                <span class="project-visual__metric"><?php echo $metric; ?></span>
                            </a>
                            <div class="project-card__body">
                                <span class="project-pill"><?php echo htmlspecialchars(ucfirst($proj['status'] ?? 'ongoing')); ?></span>
                                <h2><?php echo htmlspecialchars($proj['title']); ?></h2>
                                <p class="text-muted"><?php echo htmlspecialchars(mb_substr($proj['summary'] ?? $proj['objectives'] ?? '', 0, 200)); ?></p>
                                <?php if (!empty($techs)): ?>
                                    <h3 class="project-card__subhead">Core capabilities</h3>
                                    <div class="project-tech-list" role="group" aria-label="Project technologies">
                                        <?php foreach ($techs as $t): ?>
                                            <button type="button" class="project-tech-button" data-info="<?php echo htmlspecialchars($t); ?>"><?php echo htmlspecialchars($t); ?></button>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <a href="project_detail.php?id=<?php echo (int)$proj['id']; ?>" class="btn btn-outline-secondary btn-sm align-self-start mt-auto">View project</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                }
            }
            ?>

            <div class="col-md-6 col-xl-4">
                <article class="card project-card project-card--smog h-100 tilt-card">
                    <a href="Project_images/smog_image.jpg" target="_blank" class="project-card__media project-card__media--smog" aria-label="Open Smog image"><span class="project-visual__label">Punjab / AQI intelligence</span><span class="project-visual__metric">AQI <strong>FORECAST</strong></span></a>
                    <div class="project-card__body">
                        <span class="project-pill">Ongoing</span>
                        <h2>Smog Monitoring &amp; AQI Forecasting System</h2>
                        <p class="text-muted">An environmental intelligence platform that monitors pollution across Punjab, explains district-level sources, and forecasts future smog conditions.</p>
                        <h3 class="project-card__subhead">Core capabilities</h3>
                        <ul class="project-list">
                            <li>Interactive district-level smog and source-contribution maps</li>
                            <li>Actual, historical, previous-year, CNN, and LSTM-CNN comparisons</li>
                            <li>7-day, 14-day, and 21-day AQI forecasting horizons</li>
                        </ul>
                        <div class="project-tech-list" role="group" aria-label="Smog project technologies">
                            <button type="button" class="project-tech-button" data-info="GIS maps pollution conditions and source contributions at district level across Punjab.">GIS</button>
                            <button type="button" class="project-tech-button" data-info="CNN models learn spatial and temporal pollution patterns to produce AQI forecasts.">CNN</button>
                            <button type="button" class="project-tech-button" data-info="LSTM-CNN combines sequence learning with convolutional features for multi-horizon AQI prediction.">LSTM-CNN</button>
                            <button type="button" class="project-tech-button" data-info="APIs deliver processed pollutant data and model outputs to the interactive frontend.">APIs</button>
                        </div>
                        <div class="project-tech-detail" aria-live="polite" hidden></div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card project-card project-card--hummuqaam h-100 tilt-card">
                    <a href="Project_images/HumMuqam_image.jpg" target="_blank" class="project-card__media project-card__media--hummuqaam" aria-label="Open HumMuqaam image"><span class="project-visual__label">Pakistan / location intelligence</span><span class="project-visual__metric">L0 <strong>&rarr;</strong> L6</span></a>
                    <div class="project-card__body">
                        <span class="project-pill">Ongoing</span>
                        <h2>HumMuqaam &ndash; Intelligent Geospatial Addressing System</h2>
                        <p class="text-muted">A national-scale digital location framework that converts administrative boundaries, addresses, and hierarchical grid cells into precise D-Codes.</p>
                        <h3 class="project-card__subhead">Core capabilities</h3>
                        <ul class="project-list">
                            <li>Country-to-grid hierarchy from L0 through L6</li>
                            <li>Point-in-polygon matching and automated D-Code assignment</li>
                            <li>Millions of records processed through spatial databases and GIS operations</li>
                        </ul>
                        <div class="project-tech-list" role="group" aria-label="HumMuqaam project technologies">
                            <button type="button" class="project-tech-button" data-info="PostGIS stores, indexes, and queries the large spatial datasets that power the addressing framework.">PostGIS</button>
                            <button type="button" class="project-tech-button" data-info="Spatial joins connect addresses and coordinates to the correct administrative level or HumMuqaam grid cell.">Spatial joins</button>
                            <button type="button" class="project-tech-button" data-info="GIS operations support boundary management, coordinate transformations, and point-in-polygon analysis.">GIS</button>
                            <button type="button" class="project-tech-button" data-info="A D-Code is a unique digital location identifier assigned to an address within the hierarchical HumMuqaam grid.">D-Code</button>
                        </div>
                        <div class="project-tech-detail" aria-live="polite" hidden></div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-xl-4">
                <article class="card project-card project-card--crops h-100 tilt-card">
                    <a href="Project_images/crop_library_image.jpg" target="_blank" class="project-card__media project-card__media--crops" aria-label="Open Crop Library image"><span class="project-visual__label">Agriculture / knowledge base</span><span class="project-visual__metric">CROP <strong>LIBRARY</strong></span></a>
                    <div class="project-card__body">
                        <span class="project-pill">Ongoing</span>
                        <h2>Crop Library</h2>
                        <p class="text-muted">A searchable agricultural knowledge platform for structured crop profiles, field practices, environmental requirements, and evidence-led decisions.</p>
                        <h3 class="project-card__subhead">Core capabilities</h3>
                        <ul class="project-list">
                            <li>Varieties, seasons, soils, climate, irrigation, and fertilizer profiles</li>
                            <li>Growth stages, diseases, pests, treatments, and yield information</li>
                            <li>Connections to geospatial, weather, environmental, and farm datasets</li>
                        </ul>
                        <div class="project-tech-list" role="group" aria-label="Crop Library technologies">
                            <button type="button" class="project-tech-button" data-info="Data management organizes searchable crop profiles, practices, requirements, diseases, pests, and yield information.">Data management</button>
                            <button type="button" class="project-tech-button" data-info="GeoAI connects crop knowledge with location, soil, climate, and environmental conditions.">GeoAI</button>
                            <button type="button" class="project-tech-button" data-info="Weather data helps relate crop selection, growth stages, irrigation, and risk to local conditions.">Weather data</button>
                            <button type="button" class="project-tech-button" data-info="Precision agriculture uses the library and geospatial context to support targeted farm decisions.">Precision agriculture</button>
                        </div>
                        <div class="project-tech-detail" aria-live="polite" hidden></div>
                    </div>
                </article>
            </div>
        </div>
        <section class="projects-portfolio-note mt-5">
            <div>
                <span class="section-kicker">Shared direction</span>
                <h2 class="h3">From large datasets to decisions</h2>
            </div>
            <p class="mb-0">Together, Smog, HumMuqaam, and Crop Library combine data engineering, GIS, spatial databases, APIs, visualization, automation, and AI/ML to support monitoring, planning, forecasting, emergency response, agricultural mapping, and location-based services.</p>
        </section>
    </div>
</section>
<script>
document.querySelectorAll('.project-tech-list').forEach(function (techList) {
    var detail = techList.nextElementSibling;

    techList.querySelectorAll('.project-tech-button').forEach(function (button) {
        button.addEventListener('click', function () {
            var isActive = button.classList.contains('is-active');

            techList.querySelectorAll('.project-tech-button').forEach(function (item) {
                item.classList.remove('is-active');
                item.setAttribute('aria-pressed', 'false');
            });

            if (isActive) {
                detail.hidden = true;
                detail.textContent = '';
                return;
            }

            button.classList.add('is-active');
            button.setAttribute('aria-pressed', 'true');
            detail.textContent = button.dataset.info;
            detail.hidden = false;
        });

        button.setAttribute('aria-pressed', 'false');
    });
});
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
