<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP3 - Formulaire Symfony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 20px; }
        .product-image { max-height: 400px; object-fit: cover; }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=800" 
                 class="img-fluid rounded product-image" alt="Premium Wireless Headphones">
        </div>
        
        <div class="col-md-6">
            <h1 class="mb-3">Premium Wireless Headphones</h1>
            <p class="text-muted fs-4 mb-3">$129.99</p>
            
            <p class="mb-4">
                Experience superior sound quality with our premium wireless headphones. 
                Features active noise cancellation, 30-hour battery life, and premium comfort padding.
            </p>
            
            <ul class="list-unstyled mb-4">
                <li><strong>Brand:</strong> AudioTech</li>
                <li><strong>Color:</strong> Matte Black</li>
                <li><strong>Connectivity:</strong> Bluetooth 5.0</li>
                <li><strong>Battery Life:</strong> 30 hours</li>
            </ul>
            
            <form method="post" action="">
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <div class="alert alert-info mb-3">
                    <strong>Données reçues :</strong><br>
                    Quantity: <?php echo htmlspecialchars($_POST['quantity'] ?? 1); ?><br>
                    Color: <?php echo htmlspecialchars($_POST['color'] ?? 'black'); ?>
                </div>
                <?php endif; ?>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" 
                           value="<?php echo htmlspecialchars($_POST['quantity'] ?? 1); ?>" 
                           min="1" max="10" style="max-width: 100px;">
                </div>
                
                <div class="mb-3">
                    <label for="color" class="form-label">Select Color</label>
                    <select class="form-select" id="color" name="color" style="max-width: 200px;">
                        <option value="black" <?php echo ($_POST['color'] ?? 'black') == 'black' ? 'selected' : ''; ?>>
                            Matte Black
                        </option>
                        <option value="white" <?php echo ($_POST['color'] ?? 'black') == 'white' ? 'selected' : ''; ?>>
                            Pearl White
                        </option>
                        <option value="silver" <?php echo ($_POST['color'] ?? 'black') == 'silver' ? 'selected' : ''; ?>>
                            Silver
                        </option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
            </form>
            
            <div class="mt-4 p-3 bg-light rounded">
                <small>
                    <strong>Note technique :</strong> Projet Symfony adapté pour PHP 7.4.
                    Inclut Entity Product, FormType CartItemType, Controller ProductController.
                </small>
            </div>
        </div>
    </div>
</div>
</body>
</html>
