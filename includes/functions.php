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

    if (!empty($config['site_url'])) {
        return rtrim($config['site_url'], '/') . '/' . $normalizedPath;
    }

    return '/' . $normalizedPath;
}

function get_technology_description($tech_name)
{
    $descriptions = [
        'Spatial databases' => 'Organize and manage large geographic datasets with efficient spatial indexing and querying capabilities.',
        'Web scraping' => 'Automatically extract and collect agricultural data from online sources and repositories.',
        'Knowledge graphs' => 'Structure crop varieties, growing conditions, risks, and recommendations into interconnected knowledge networks.',
        'GIS operations' => 'Perform advanced geographic information system operations for spatial analysis and visualization.',
        'GIS' => 'Geographic Information System for mapping, analyzing, and visualizing geospatial data.',
        'CNN' => 'Convolutional Neural Networks learn spatial patterns in pollution and environmental data for accurate forecasting.',
        'LSTM' => 'Long Short-Term Memory networks capture temporal dependencies in air quality time series data.',
        'LSTM-CNN' => 'Combines LSTM sequence learning with CNN spatial feature extraction for enhanced AQI prediction.',
        'Remote Sensing' => 'Collect and analyze satellite and aerial imagery for monitoring environmental conditions.',
        'PostGIS' => 'PostgreSQL extension providing advanced spatial database capabilities for large-scale geographic data.',
        'PostgreSQL' => 'Robust relational database system managing structured project data and spatial relationships.',
        'Spatial Analysis' => 'Perform statistical and computational analysis on geographic data to uncover patterns and insights.',
        'Spatial joins' => 'Connect addresses and coordinates to administrative boundaries and hierarchical grid levels.',
        'D-Code' => 'Unique digital location identifier assigned to addresses within the hierarchical geospatial grid.',
        'APIs' => 'Application Programming Interfaces delivering processed data and model outputs to the frontend.',
        'Remote sensing' => 'Satellite-based monitoring of environmental and urban conditions for analysis and forecasting.',
        'GeoAI' => 'Combine artificial intelligence with geospatial analysis for intelligent spatial decision-making.',
        'ML' => 'Machine Learning algorithms that learn patterns from data to make predictions and automate decisions.'
    ];

    $trimmed_name = trim($tech_name);
    return $descriptions[$trimmed_name] ?? '';
}
