<?php
require_once __DIR__ . '/../app/controllers/LanguageController.php';

try {
    $controller = new LanguageController();
    $controller->renderView();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}