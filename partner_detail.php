<?php
$pageTitle = 'Partner';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$item = $id ? get_partner($pdo, $id) : null;
if (!$item) {
    http_response_code(404);
}
?>
<section class="py-5">
    <div class="container">
        <?php if (!$item): ?>
            <div class="alert alert-warning">Partner not found.</div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <article class="card card-soft p-4 text-center">
                        <?php if (!empty($item['logo_url'])): ?>
                            <?php $img = $item['logo_url']; if (strpos($img, '/') !== 0 && strpos($img, 'http') !== 0) $img = '/' . ltrim($img, '/'); ?>
                            <div class="mb-3"><img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" style="max-width:220px;height:auto"></div>
                        <?php endif; ?>
                        <h2 class="h4"><?php echo htmlspecialchars($item['name']); ?></h2>
                        <?php if (!empty($item['website'])): ?><div><a href="<?php echo htmlspecialchars($item['website']); ?>" target="_blank"><?php echo htmlspecialchars($item['website']); ?></a></div><?php endif; ?>
                        <p class="text-muted mt-3"><?php echo nl2br(htmlspecialchars($item['description'])); ?></p>
                    </article>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
