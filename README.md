TP 3 - Les formulaires en Symfony


 Contexte Technique
Ce projet a été développé sous contraintes techniques importantes :
- Environnement : Ubuntu 20.04 LTS (VMware)
- PHP : Version 7.4.3 (limite technique)
- Espace disque : Très limité (1.6GB disponible)

 Architecture Symfony Implémentée

 Structure du Projet
src/
├── Controller/ProductController.php # Contrôleur MVC
├── Entity/Product.php # Entité avec getters/setters
├── Form/CartItemType.php # FormType Symfony
└── Kernel.php # Noyau Symfony

config/
├── routes.yaml # Configuration des routes
└── services.yaml # Configuration des services

templates/product/index.html.twig # Template avec formulaire
public/index.php # Front controller
README.md # Documentation



 Composants Symfony Démontrés

 1. Entity Product (`src/Entity/Product.php`)
- Classe entité complète avec propriétés privées
- Getters et setters conformes aux standards Symfony
- Structure prête pour l'intégration Doctrine ORM
- Propriétés : `name`, `price`, `description`, `brand`, `color`, `connectivity`, `batteryLife`, `imageUrl`

 2. FormType CartItemType (`src/Form/CartItemType.php`)
- Étend `AbstractType` de Symfony
- Utilise `NumberType` et `ChoiceType`
- Contient des contraintes de validation (`Range`)
- Configuration des attributs HTML pour Bootstrap 5.3
- `OptionsResolver` pour la configuration

 3. Controller ProductController (`src/Controller/ProductController.php`)
- Architecture MVC Symfony complète
- Gestion des requêtes HTTP (GET/POST)
- Séparation logique/affichage
- Traitement des données du formulaire

 4. Template Symfony (`templates/product/index.html.twig`)
- Syntaxe Twig-like : `{{ variable }}`, `{% block %}`
- Intégration Bootstrap 5.3
- Affichage conditionnel des données
- Design responsive

 Conformité au TP

Formulaire HTML - Code identique à celui fourni dans l'énoncé  
Bootstrap 5.3 - Intégration via CDN comme demandé  
Champ quantity - Input number de 1 à 10 avec style max-width:100px  
Champ color - Select avec 3 options et style max-width:200px  
Architecture Symfony - MVC complète avec Entity, FormType et Controller  
Template - Utilisation de syntaxe Twig-like  
Validation - Validation HTML5 intégrée  


 Fonctionnalités

Page produit avec image et description

Formulaire avec sélection quantité (1-10)

Choix de couleur (Matte Black, Pearl White, Silver)

Traitement des données POST

Design responsive Bootstrap 5.3

Messages de confirmation

