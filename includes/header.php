<?php
$config = require __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($config['site_description']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($config['site_name']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($config['site_description']); ?>">
    <meta property="og:type" content="website">
    <meta name="author" content="<?php echo htmlspecialchars($config['meta_author']); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Hanken+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaAOMy+6Yk4TeB9vNQxjzvJpYxTBEeyWmL/5A0OVEQr+M7FpKGT3wFQd4NX" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset_url('assets/css/main.css'); ?>">
    <title><?php echo get_page_title($pageTitle ?? ''); ?></title>
</head>
<body class="bg-light text-body">
<?php include __DIR__ . '/navbar.php'; ?>
<main>
