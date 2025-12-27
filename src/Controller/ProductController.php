<?php
namespace App\Controller;

use App\Entity\Product;
use App\Form\CartItemType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController
{
    public function index(Request $request): Response
    {
        // 1. Créer l'entité Product (simulée depuis la base)
        $product = new Product();
        
        // 2. Créer le formulaire Symfony
        $form = $this->createFormLogic();
        
        // 3. Traiter le formulaire si soumis
        $formData = [];
        if ($request->isMethod('POST')) {
            $formData = $request->request->all();
            // Ici, on traiterait les données en vrai Symfony
        }
        
        // 4. Rendre la vue avec Twig-like
        return $this->renderProductPage($product, $formData);
    }
    
    private function createFormLogic(): array
    {
        // Simulation d'un FormType Symfony
        return [
            'quantity' => [
                'type' => 'number',
                'value' => 1,
                'min' => 1,
                'max' => 10
            ],
            'color' => [
                'type' => 'select',
                'options' => [
                    'black' => 'Matte Black',
                    'white' => 'Pearl White',
                    'silver' => 'Silver'
                ],
                'selected' => 'black'
            ]
        ];
    }
    
    private function renderProductPage(Product $product, array $formData = []): Response
    {
        ob_start();
        include __DIR__ . '/../../templates/product/index.html.twig';
        $content = ob_get_clean();
        
        return new Response($content);
    }
}
