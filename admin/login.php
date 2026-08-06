<?php
$pageTitle = 'Admin Login';
require __DIR__ . '/../includes/functions.php';
$config = require __DIR__ . '/../includes/config.php';
session_start();

// Handle logout redirect if requested
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    if ($email === $config['admin']['email'] && $password === $config['admin']['password']) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: /admin/index.php');
        exit;
    }
    $error = 'Invalid credentials';
}

require __DIR__ . '/../includes/header.php';
?>
<section class="py-5 d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-soft p-4 shadow-sm">
                    <h1 class="h3 mb-3">Admin Login</h1>
                    <p class="text-muted">Secure access to the GDSG content management portal.</p>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-primary-custom">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
