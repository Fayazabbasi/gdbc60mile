<?php

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);

    echo '<h1>Laravel Error</h1>';
    echo '<p>' . htmlspecialchars($e->getMessage()) . '</p>';
}