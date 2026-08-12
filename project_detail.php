<?php
$pageTitle = 'Project Detail';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/components.php';
require __DIR__ . '/includes/header.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$project = $id ? get_project($pdo, $id) : null;
if (!$project) {
    http_response_code(404);
    echo '<div class="container py-5"><h1>Project not found</h1><p class="text-muted">The requested project does not exist.</p></div>';
    include __DIR__ . '/includes/footer.php';
    exit;
}
?>
<section class="project-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="fw-bold"><?php echo htmlspecialchars($project['title']); ?></h1>
                <p class="text-muted"><?php echo nl2br(htmlspecialchars($project['summary'] ?? '')); ?></p>

                <?php if (!empty($project['objectives'])): ?>
                <h3>Objectives</h3>
                <p><?php echo nl2br(htmlspecialchars($project['objectives'])); ?></p>
                <?php endif; ?>

                <?php
                // show project images gallery
                require_once __DIR__ . '/includes/project_model.php';
                $images = get_project_images($project['id']);
                if (!empty($images)): ?>
                    <h3>Gallery</h3>
                    <div class="row g-3 mb-3">
                        <?php foreach ($images as $img): ?>
                            <div class="col-6 col-md-4">
                                <a href="<?php echo asset_url($img['image_url']); ?>" target="_blank"><img src="<?php echo asset_url($img['image_url']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($img['caption'] ?? ''); ?>"></a>
                                <?php if (!empty($img['caption'])): ?><p class="small text-muted mt-1"><?php echo htmlspecialchars($img['caption']); ?></p><?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($project['technologies'])): ?>
                <h3>Technologies</h3>
                <p><?php echo htmlspecialchars($project['technologies']); ?></p>
                <?php endif; ?>

                <?php if (!empty($project['content'])): ?>
                <h3>Details</h3>
                <div class="project-content">
                    <?php echo $project['content']; /* content may contain HTML; sanitize if needed */ ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <aside class="project-meta">
                    <p><strong>Status:</strong> <?php echo htmlspecialchars($project['status'] ?? 'Ongoing'); ?></p>
                    <p><strong>Research area:</strong> <?php echo htmlspecialchars($project['research_area_id'] ?? ''); ?></p>
                    <p><strong>Created:</strong> <?php echo htmlspecialchars($project['created_at'] ?? ''); ?></p>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php';
