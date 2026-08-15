<?php
$pageTitle = 'Research';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
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
            <?php
            $areas = get_research_areas($pdo, 12);
            if (!empty($areas)) {
                foreach ($areas as $a) {
                    ?>
                    <div class="col-lg-6">
                        <article class="card research-domain-card p-4 card-soft h-100 feature-card tilt-card">
                            <h3><?php echo htmlspecialchars($a['title']); ?></h3>
                            <p class="text-muted"><?php echo htmlspecialchars(mb_substr($a['summary'] ?? $a['content'], 0, 300)); ?></p>
                            <a href="research_detail.php?id=<?php echo (int)$a['id']; ?>" class="btn btn-outline-secondary btn-sm mt-3">Read more</a>
                        </article>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
