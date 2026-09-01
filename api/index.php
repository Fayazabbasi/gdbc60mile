<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "PHP is working<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";

echo "Project root: " . dirname(__DIR__) . "<br>";

if (!file_exists(__DIR__ . '/../public/index.php')) {
    die("ERROR: public/index.php not found");
}

if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    die("ERROR: vendor/autoload.php not found");
}

echo "Laravel files found<br>";

require __DIR__ . '/../public/index.php';