<?php
$pageTitle = 'Partners';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Partners</h1>
                <p class="lead text-muted">Collaborating with universities, government agencies, NGOs, and industry partners to advance geospatial research.</p>
            </div>
        </div>
        <div class="row gy-4 mt-4">
            <?php
            $partners = get_partners($pdo, 12);
            if (!empty($partners)) {
                foreach ($partners as $p) {
                    $img = '/assets/images/placeholder.svg';
                    if (!empty($p['logo_url'])) {
                        $orig = $p['logo_url'];
                        $origFull = __DIR__ . '/' . ltrim($orig, '/');
                        if (is_file($origFull)) $img = $orig;
                    }
                    $img = normalize_image_for_public($img);
                    ?>
                    <div class="col-md-4">
                        <div class="card p-4 card-soft h-100 text-center tilt-card">
                            <div class="mb-3"><a href="partner_detail.php?id=<?php echo (int)$p['id']; ?>"><img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" style="max-width:140px;height:auto"></a></div>
                            <h3 class="h6"><?php echo htmlspecialchars($p['name']); ?></h3>
                            <p class="text-muted small"><?php echo htmlspecialchars(substr($p['description'],0,120)); ?><?php if(strlen($p['description'])>120) echo '...'; ?></p>
                            <div><a href="partner_detail.php?id=<?php echo (int)$p['id']; ?>">Learn more</a></div>
                        </div>
                    </div>
                    <?php
                }
            }

            // static fallback
            $fallback = [
                ['title'=>'Academic Partners','text'=>'Leading universities supporting research, publications, and student training.'],
                ['title'=>'Government Agencies','text'=>'Public sector collaborations for environmental monitoring and spatial policy.'],
                ['title'=>'Industry Partners','text'=>'Private sector innovation networks advancing GeoAI and geospatial analytics.'],
            ];
            foreach ($fallback as $f) {
                ?>
                <div class="col-md-4">
                    <div class="card p-4 card-soft h-100 text-center tilt-card">
                        <h3 class="h6"><?php echo $f['title']; ?></h3>
                        <p class="text-muted"><?php echo $f['text']; ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
