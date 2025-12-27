<?php
use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__).'/vendor/autoload.php';

// Simulation d'un kernel Symfony léger
$kernel = new Kernel('dev', true);
$request = Request::createFromGlobals();

// Route simple
if ($request->getPathInfo() === '/' || $request->getPathInfo() === '') {
    $controller = new App\Controller\ProductController();
    $response = $controller->index($request);
    $response->send();
} else {
    echo "404 - Page not found";
}
