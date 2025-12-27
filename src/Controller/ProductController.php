<?php

namespace App\Controller;

class ProductController
{
    public function index()
    {
        // Retourner le contenu HTML du formulaire
        ob_start();
        include __DIR__ . '/../../templates/product/index.html.twig';
        return ob_get_clean();
    }
}
