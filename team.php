<?php
$pageTitle = 'Team';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/header.php';
?>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8">
                <h1 class="display-6 fw-bold">Research Team</h1>
                <p class="lead text-muted">A multidisciplinary collective of scientists and engineers pioneering the intersection of AI, GIS, and Earth observation.</p>
            </div>
        </div>
        <div class="row g-4 mt-4 stagger">
            <?php
            $members = get_team_members($pdo, 12);
            if (!empty($members)) {
                foreach ($members as $m) {
                    $img = '/assets/images/placeholder.svg';
                    if (!empty($m['photo_url'])) {
                        $orig = $m['photo_url'];
                        $thumb = preg_replace('/\.(jpe?g|png|gif|webp)$/i', '_thumb.$1', $orig);
                        $thumbFull = __DIR__ . $thumb;
                        $origFull = __DIR__ . '/' . ltrim($orig, '/');
                        if (is_file($thumbFull)) {
                            $img = $thumb;
                        } elseif (is_file($origFull)) {
                            $img = $orig;
                        }
                    }
                    $img = normalize_image_for_public($img);
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <article class="card card-soft image-card h-100 tilt-card">
                            <a href="<?php echo htmlspecialchars($img); ?>" target="_blank" rel="noopener"><img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($m['name']); ?>" class="image-card__media team-card__media"></a>
                            <div class="image-card__body">
                                <h3 class="h5"><?php echo htmlspecialchars($m['name']); ?></h3>
                                <p class="text-muted mb-0"><?php echo htmlspecialchars($m['position']); ?></p>
                            </div>
                        </article>
                    </div>
                    <?php
                }
            }

            // Always render original static cards
            $fallback = [
                ['img'=>'assets/images/Team_picture.jpg','title'=>'GDSG Research Collective','text'=>'A collaborative team connecting geospatial science, AI, and environmental research.'],
                ['img'=>'assets/images/Founder_maria_with_Girl.jpg','title'=>'Research Leadership','text'=>'Guiding impactful research and building the next generation of geospatial leaders.'],
                ['img'=>'assets/images/Earth_day_Founder_Maria_Seminar.jpg','title'=>'Knowledge In Action','text'=>'Sharing practical insight through seminars, partnerships, and open scientific dialogue.'],
            ];
            foreach ($fallback as $f) {
                ?>
                <div class="col-md-6 col-xl-4">
                    <article class="card card-soft image-card h-100 tilt-card">
                        <img src="<?php echo $f['img']; ?>" alt="<?php echo htmlspecialchars($f['title']); ?>" class="image-card__media team-card__media">
                        <div class="image-card__body">
                            <h3 class="h5"><?php echo $f['title']; ?></h3>
                            <p class="text-muted mb-0"><?php echo $f['text']; ?></p>
                        </div>
                    </article>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
