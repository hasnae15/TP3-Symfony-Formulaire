
  TP 3 - Les formulaires en Symfony

Étudiante : ABDELMOUMNI Hasnae  
Date : 27 décembre 2025

 Architecture Symfony complète implémentée

 1. Structure Symfony
src/
├── Controller/ProductController.php # Contrôleur avec logique métier
├── Entity/Product.php # Entité Doctrine-ready
├── Form/CartItemType.php # FormType Symfony avec validation
├── Kernel.php # Noyau Symfony
└── Repository/ # (Prêt pour Doctrine)

config/
├── routes.yaml # Configuration des routes
└── services.yaml # Configuration des services

templates/product/index.html.twig # Template Twig avec syntaxe Symfony
public/index.php # Front controller



 2. Composants Symfony implémentés

 A. Entity (src/Entity/Product.php)
- Classe entité avec getters/setters
- Propriétés : name, price, description, brand, color, connectivity, batteryLife, imageUrl
- Prête pour l'intégration Doctrine ORM

 B. FormType (src/Form/CartItemType.php)
- Étend `AbstractType` de Symfony
- Utilise `NumberType` et `ChoiceType`
- Inclut des contraintes de validation (`Range`)
- Configuration des attributs HTML (Bootstrap classes)
- OptionsResolver pour la configuration

 C. Controller (src/Controller/ProductController.php)
- Architecture MVC Symfony
- Gestion des requêtes HTTP (GET/POST)
- Création d'entité et formulaire
- Rendering de template
- Traitement des données POST

 D. Template Twig (templates/product/index.html.twig)
- Syntaxe Twig : `{{ variable }}`, `{% block %}`, filtres
- Héritage de template prêt
- Affichage conditionnel
- Intégration Bootstrap 5.3

 3. Fonctionnalités Symfony démontrées
- ✅ FormTypes avec validation
- ✅ Entités avec getters/setters
- ✅ Contrôleurs avec logique métier
- ✅ Templates Twig avec syntaxe Symfony
- ✅ Validation côté serveur
- ✅ Architecture MVC complète
- ✅ Services et configuration


4. Difficultés techniques et solutions
PHP 7.4 incompatible avec Symfony 6.4+ → Implémentation manuelle des composants Symfony

Espace disque limité → Architecture légère sans dépendances Composer

Démonstration complète des concepts Symfony demandés dans le TP

5. Conformité au TP
✅ Formulaire identique visuellement

✅ Bootstrap 5.3 intégré

✅ FormType Symfony implémenté

✅ Entity Symfony créée

✅ Architecture MVC respectée

✅ Code propre et documenté

