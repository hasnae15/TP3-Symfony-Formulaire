<?php
// Point d'entrée de l'application
require_once __DIR__ . '/../src/Controller/ProductController.php';

$controller = new App\Controller\ProductController();
echo $controller->index();
