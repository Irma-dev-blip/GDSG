<?php

function get_page_title($title = '')
{
    return $title ? $title . ' | Geospatial Data Science Group' : 'Geospatial Data Science Group';
}

function get_meta_description($description = '')
{
    return $description ?: 'GDSG is a research institute focused on GIS, GeoAI, remote sensing, spatial analytics, and Earth observation.';
}

function render_section_title($title, $subtitle = '')
{
    ob_start();
    ?>
    <div class="section-title">
        <h2 class="display-6"><?php echo htmlspecialchars($title); ?></h2>
        <?php if ($subtitle): ?>
            <p class="text-muted mb-0"><?php echo htmlspecialchars($subtitle); ?></p>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

function asset_url($path)
{
    $config = require __DIR__ . '/config.php';
    $normalizedPath = ltrim($path, '/');

    if (!empty($config['base_url'])) {
        return rtrim($config['base_url'], '/') . '/' . $normalizedPath;
    }

    if (!empty($_SERVER['REQUEST_URI'])) {
        $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (strpos($requestPath, '/admin/') !== false || strpos($requestPath, '/admin') === 0) {
            return '../' . $normalizedPath;
        }
    }

    return $normalizedPath;
}
