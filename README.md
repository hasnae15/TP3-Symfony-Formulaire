TP 3 - Les formulaires en Symfony

Étudiante : ABDELMOUMNI Hasnae  
Date de soumission : 27 décembre 2025

Rapport de réalisation

1. Objectif atteint
Création d'un formulaire Symfony fonctionnel pour une page produit e-commerce, conforme aux spécifications fournies.

2. Structure du projet
TP3_Symfony_Formulaires/
├── public/index.php                    # Point d'entrée
├── src/Controller/ProductController.php # Contrôleur Symfony
├── templates/product/index.html.twig    # Template avec formulaire
└── README.md                           # Documentation

3. Implémentation technique

3.1 Formulaire HTML
- Reproduction exacte du code fourni dans l'énoncé
- Champs : 
  - `quantity` : input number (1-10) avec validation HTML5
  - `color` : select avec 3 options (Matte Black, Pearl White, Silver)
- Styles : `max-width: 100px` (quantity) et `max-width: 200px` (color)

3.2 Intégration Bootstrap 5.3
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
- Utilisation des classes Bootstrap (container, row, col-md-6, form-control, etc.)
- Design responsive prêt pour mobile/tablette/desktop

3.3 Architecture MVC
- Contrôleur (`ProductController.php`) : Gère la logique d'affichage
- Vue (`index.html.twig`) : Présentation du formulaire
- Séparation claire entre logique et présentation

4. Difficultés rencontrées et solutions

4.1 Problème : Incompatibilité PHP
- Situation : Symfony 8.3 nécessite PHP ≥8.3, ma VM a PHP 7.4
- Solution : Architecture MVC simplifiée compatible PHP 7.4

4.2 Problème : Espace disque limité
- Situation : VM presque pleine (97% utilisé)
- Solution : Projet minimal sans dépendances lourdes

4.3 Problème : Outils de développement
- Situation : PHPStorm/VS Code non disponibles
- Solution : Édition manuelle avec nano/gedit

5. Validation
- ✅ Formulaire identique visuellement à la maquette
- ✅ Bootstrap 5.3 correctement intégré
- ✅ Champs fonctionnels avec validation
- ✅ Code propre et bien structuré
- ✅ Architecture MVC respectée
