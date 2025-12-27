<?php
namespace App\Controller;

class ProductController
{
    public function index($request = null)
    {
        // Simuler une entité Product
        $product = [
            'name' => 'Premium Wireless Headphones',
            'price' => 129.99,
            'description' => 'Experience superior sound quality with our premium wireless headphones. Features active noise cancellation, 30-hour battery life, and premium comfort padding.',
            'brand' => 'AudioTech',
            'color' => 'Matte Black',
            'connectivity' => 'Bluetooth 5.0',
            'batteryLife' => '30 hours',
            'imageUrl' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg'
        ];
        
        // Récupérer les données POST si elles existent
        $formData = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formData = [
                'quantity' => $_POST['quantity'] ?? 1,
                'color' => $_POST['color'] ?? 'black'
            ];
        }
        
        // Afficher le template
        ob_start();
        extract(['product' => $product, 'formData' => $formData]);
        include __DIR__ . '/../../templates/product/index.html.twig';
        $content = ob_get_clean();
        
        // Retourner une réponse simple
        return new class($content) {
            private $content;
            public function __construct($content) { $this->content = $content; }
            public function send() { echo $this->content; }
        };
    }
}
