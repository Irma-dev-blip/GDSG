<?php
$pageTitle = 'Publication Detail';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$item = $id ? get_publication($pdo, $id) : null;
if (!$item) {
    http_response_code(404);
}
?>
<section class="py-5">
    <div class="container">
        <?php if (!$item): ?>
            <div class="alert alert-warning">Publication not found.</div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <article class="card card-soft p-4">
                        <header class="mb-3">
                            <h1 class="display-6 fw-bold"><?php echo htmlspecialchars($item['title']); ?></h1>
                            <div class="text-muted mb-2"><?php echo htmlspecialchars($item['authors']); ?> — <?php echo htmlspecialchars($item['journal']); ?> (<?php echo htmlspecialchars($item['year']); ?>)</div>
                        </header>
                        <div class="content-break">
                            <?php echo nl2br(htmlspecialchars($item['summary'])); ?>
                        </div>
                        <?php if (!empty($item['pdf_url'])): $pdf = $item['pdf_url']; if (strpos($pdf, '/') !== 0 && strpos($pdf, 'http') !== 0) $pdf = '/' . ltrim($pdf, '/'); ?>
                            <div class="mt-3"><a class="btn btn-primary" href="<?php echo htmlspecialchars($pdf); ?>" target="_blank" rel="noopener">Download PDF</a></div>
                        <?php endif; ?>
                        <footer class="mt-4 text-muted">Added: <?php echo htmlspecialchars($item['created_at']); ?></footer>
                    </article>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
