<?php
$pageTitle = 'Admin Partners';
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/db.php';
require __DIR__ . '/../includes/admin-header.php';

$action = $_GET['action'] ?? 'list';
$message = '';
$error = '';

$uploadDir = __DIR__ . '/../assets/images/partners/';
if (!is_dir($uploadDir)) @mkdir($uploadDir, 0755, true);

function save_partner_logo($file, $uploadDir) {
    if (empty($file) || empty($file['tmp_name'])) return null;
    if ($file['error'] !== UPLOAD_ERR_OK) return null;
    $allowed = ['jpg','jpeg','png','gif','webp'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed)) return null;
    $basename = bin2hex(random_bytes(8)) . '_' . time();
    $filename = $basename . '.' . $ext;
    $dest = rtrim($uploadDir, '/') . '/' . $filename;
    if (!move_uploaded_file($file['tmp_name'], $dest)) return null;
    return 'assets/images/partners/' . $filename;
}

// Handle create / edit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $website = trim($_POST['website'] ?? '');
    $description = trim($_POST['description'] ?? '');
    if ($action === 'add') {
        $logo = null;
        if (!empty($_FILES['logo']) && $_FILES['logo']['tmp_name']) {
            $logo = save_partner_logo($_FILES['logo'], $uploadDir);
        }
        if ($pdo && $name) {
            $stmt = $pdo->prepare('INSERT INTO partners (name, website, description, logo_url) VALUES (:name, :website, :description, :logo_url)');
            $stmt->execute([':name'=>$name, ':website'=>$website, ':description'=>$description, ':logo_url'=>$logo]);
        }
        header('Location: partners.php');
        exit;
    } elseif ($action === 'edit') {
        $id = (int)($_POST['id'] ?? 0);
        if ($pdo && $id) {
            $stmt = $pdo->prepare('SELECT logo_url FROM partners WHERE id = :id');
            $stmt->execute([':id'=>$id]);
            $existing = $stmt->fetch(PDO::FETCH_ASSOC);
            $logo = $existing['logo_url'] ?? null;
            if (!empty($_FILES['logo']) && $_FILES['logo']['tmp_name']) {
                $uploaded = save_partner_logo($_FILES['logo'], $uploadDir);
                if ($uploaded) {
                    if (!empty($logo) && strpos($logo, 'assets/images/partners/') === 0) {
                        $oldPath = __DIR__ . '/../' . $logo;
                        if (is_file($oldPath)) @unlink($oldPath);
                    }
                    $logo = $uploaded;
                }
            }
            $stmt = $pdo->prepare('UPDATE partners SET name=:name, website=:website, description=:description, logo_url=:logo_url WHERE id=:id');
            $stmt->execute([':name'=>$name, ':website'=>$website, ':description'=>$description, ':logo_url'=>$logo, ':id'=>$id]);
        }
        header('Location: partners.php');
        exit;
    }
}

// Handle delete
if (isset($_GET['action']) && $_GET['action'] === 'delete' && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($pdo) {
        $stmt = $pdo->prepare('SELECT logo_url FROM partners WHERE id = :id');
        $stmt->execute([':id'=>$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($row['logo_url']) && strpos($row['logo_url'], 'assets/images/partners/') === 0) {
            $oldPath = __DIR__ . '/../' . $row['logo_url'];
            if (is_file($oldPath)) @unlink($oldPath);
        }
        $stmt = $pdo->prepare('DELETE FROM partners WHERE id = :id');
        $stmt->execute([':id' => $id]);
    }
    header('Location: partners.php');
    exit;
}
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-6 fw-bold">Partners</h1>
                <p class="text-muted">Manage partner organizations and collaboration links.</p>
            </div>
            <a href="#" class="btn btn-primary">Add Partner</a>
        </div>
            <div class="table-responsive card card-soft p-4">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Website</th>
                        <th>Logo</th>
                        <th class="col-description">Description</th>
                        <th class="col-actions text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($pdo) {
                        $stmt = $pdo->query('SELECT id, name, website, description, logo_url FROM partners ORDER BY created_at DESC');
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($rows as $row):
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['website']); ?></td>
                        <td>
                            <?php if (!empty($row['logo_url'])): $logoPath = $row['logo_url']; if (strpos($logoPath, '/') !== 0 && strpos($logoPath, 'http') !== 0) { $logoPath = '../' . ltrim($logoPath, '/'); } ?>
                                <img src="<?php echo htmlspecialchars($logoPath); ?>" alt="logo" style="max-width:100px;height:auto;border-radius:4px;border:1px solid #eee;padding:2px">
                            <?php else: ?>
                                <div style="width:100px;height:60px;background:#f1f5f9;border:1px dashed #e6eef8;display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:.85rem;border-radius:4px">No logo</div>
                            <?php endif; ?>
                        </td>
                        <td class="col-description">
                            <?php
                                $full = trim($row['description'] ?? '');
                                $preview = $full;
                                if (mb_strlen($full) > 200) {
                                    $preview = mb_substr($full, 0, 200) . '…';
                                }
                            ?>
                            <div class="partner-desc-preview"><?php echo nl2br(htmlspecialchars($preview)); ?></div>
                            <?php if ($preview !== $full && $full !== ''): ?>
                                <div class="mt-2"><button type="button" class="btn btn-sm btn-outline-secondary view-desc" data-full-desc="<?php echo htmlspecialchars($full, ENT_QUOTES); ?>">View</button></div>
                            <?php endif; ?>
                        </td>
                        <td class="text-end">
                            <a href="partners.php?action=edit&id=<?php echo (int)$row['id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="partners.php?action=delete&id=<?php echo (int)$row['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this partner?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; } else { ?>
                    <tr><td colspan="4">No database connection.</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- Description Modal -->
        <div class="modal fade" id="partnerDescModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Full description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="partnerDescContent"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<?php // Simple create form for testing ?>
<?php if (isset($pdo) && $pdo): ?>
    <?php
    $editItem = null;
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && !empty($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $pdo->prepare('SELECT * FROM partners WHERE id = :id');
        $stmt->execute([':id'=>$id]);
        $editItem = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <section class="py-4">
        <div class="container">
            <h3><?php echo $editItem ? 'Edit Partner' : 'Add Partner'; ?></h3>
            <form method="post" action="partners.php<?php echo $editItem ? '?action=edit&id=' . (int)$editItem['id'] : '?action=add'; ?>" class="admin-form" enctype="multipart/form-data">
                <?php if ($editItem): ?><input type="hidden" name="id" value="<?php echo (int)$editItem['id']; ?>"><?php endif; ?>
                <div class="form-group"><label>Name</label><input name="name" class="form-control" placeholder="Name" required value="<?php echo htmlspecialchars($editItem['name'] ?? ''); ?>"></div>
                <div class="form-group"><label>Website</label><input name="website" class="form-control" placeholder="Website" value="<?php echo htmlspecialchars($editItem['website'] ?? ''); ?>"></div>
                <div class="form-group"><label>Logo</label><input type="file" name="logo" accept="image/*" class="form-control"></div>
                <?php if (!empty($editItem['logo_url'])): ?>
                    <?php $imgPath = $editItem['logo_url']; if (strpos($imgPath, '/') !== 0 && strpos($imgPath, 'http') !== 0) { $imgPath = '../' . ltrim($imgPath, '/'); } ?>
                    <div class="form-group"><label>Current Logo</label><div><img src="<?php echo htmlspecialchars($imgPath); ?>" alt="logo" style="max-width:120px;height:auto;border:1px solid #ddd;padding:4px;border-radius:4px"></div></div>
                <?php endif; ?>
                <div class="form-group"><label>Description</label><textarea name="description" class="form-control" placeholder="Description"><?php echo htmlspecialchars($editItem['description'] ?? ''); ?></textarea></div>
                <div class="form-actions"><button class="btn btn-primary"><?php echo $editItem ? 'Update' : 'Add Partner'; ?></button></div>
            </form>
        </div>
    </section>
<?php endif; ?>
<?php include __DIR__ . '/../includes/admin-footer.php'; ?>
