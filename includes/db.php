<?php

$config = require __DIR__ . '/config.php';

function db_connect()
{
    global $config;
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', $config['db']['host'], $config['db']['name'], $config['db']['charset']);
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        return new PDO($dsn, $config['db']['user'], $config['db']['pass'], $options);
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return null;
    }
}
