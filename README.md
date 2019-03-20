# Potager-party

## Description du projet

Un site permettant aux jardiniers en herbe de connaître les périodes clés pour semer et récolter ses légumes au bon moment.
Le jardinier débutant souhaite faire pousser ses légumes, mais ne sait pas quand commencer à semer et récolter ses cultures.
* Après sélection de ses légumes favoris et il serait possible de recevoir une alerte par mail lorsqu'il est temps de les planter ou les récolter.
* Un moteur de recherche permettrait une sélection par différents critères :
    * Type de légumes (Légumes graines, racines, légumes feuilles et fleurs, aromates et condiments...)
    * Mois de l'année
    * Type de semis (sous-abri, en pépinière, en pleine terre etc.)
    * Difficulté 
    * Gestion de la ressource (besoins en eau et place nécessaire)
    * Type de plantes à associer aux légumes sélectionnés (optionnel en fonction du temps dont dispose l’équipe)
    * Jardiner avec la lune (optionnel)
    * Météo (optionnel)

* Pour chaque légume, des fiches proposeraient des conseils ou des recettes pour celui-ci 
* Une boutique permettrait d'acheter des graines 
 
## Définition du rôle de chacun
L’équipe se compose de 5 élèves ayant tous suivis la spé WordPress.

* Product Owner : Emma /  assistant Dev Back (Rémi)
* Project Manager : Rémi, assistant Dev Back (Romaric)
* Lead Dev Back : Romaric, assistant Dev Front (Julien, Rémi)
* Lead Dev Front : Julien / assistants Dev Back (Rémi, Florian)
* Git Master / assistant Dev Front : Florian

## Fonctionnalités du projet

* Après sélection de ses légumes favoris, il serait possible de recevoir une alerte par mail lorsqu'il est temps de les planter ou les récolter. 
    > Utilisation de CRON :  (https://doc.ubuntu-fr.org/cron)

* Moteur de recherche permettant une sélection par différents critères :
    > Utilisation de l’AJAX (JS) avec l’API de notre BDD.
    * Type de légumes (Légumes graines, racines, légumes feuilles et fleurs, aromates et condiments...)
    * Mois de l'année
    * Type de semis (sous-abri, en pépinière, en pleine terre etc.)
    * Difficulté (ACF : custom field)
    * Gestion de la ressource (eau et place nécessaire) (ACF : custom field)
    * Type de plantes à associer aux légumes sélectionnés
    * Jardiner avec la lune (API externe)
    * Météo  (API externe)

* Une fiche “technique” par légume, fruit : Custom Post Type;
* Une fiche pour chaque légume donnerait des conseils ou des recettes pour celui-ci : API conseil culinaire genre Marmiton;


* Une boutique permettant d'acheter des graines : plugin WooCommerce. L’objectif est de “connecter” la partie boutique à la partie informative du site. Dans la partie “fiche légumes”, nous proposerons un bouton pour accéder à la boutique ou (en fonction du temps) directement des fiches produits liés à un légume en particulier.

* Un blog permettant d’ajouter des actualités et des conseils concernant l’entretien et la mise en place du potager.

### Les types d’utilisateurs :

* Visiteurs : consulte le site sans forcément avoir de compte utilisateur ;
* Utilisateurs : possède un compte, peut sélectionner des “fiches légumes” pour les mettres en favoris, commenter; suggérer des recettes/légumes/fruits additionnels. Créer des articles;
* Administrateur : tous les droits;
* Modérateur : gestion de contenu; relecture, validation et mise en ligne des contributions. (optionnel)

### Les contraintes probables :
L’utilisation des API (contrainte de temps et peu de pratique sur ce point) et celle de WP interne afin de récupérer le contenu via le champ recherche (gestion avec AJAX);


 

## Les différentes pages du site
* Header > navigation :
    * Marque / Logo
    * Icônes réseaux sociaux
    * Icônes mon compte / Panier
    * Champ de recherche ;
    * Footer :
    * Contact ;
    * Mentions légales ;
    * Abonnez-vous à la newsletter (super, on a notre table) ;


1. Page d’accueil (front-page.php) :
Place importante à donner au moteur de recherche (header)
Affiche les derniers articles ;

2. Page “Plantes potagères” : page du moteur de recherche avec les filtres (single-plants.php)
    * Sidebar des filtres ;
    * La liste des plantes potagères ;


    2.2. Page “Fiche technique ou fiche légumes” :
    * Champs nécessaires :
        * Image (thumbnail) ;
        * Nom ;
        * Type: fruit ou légume ;

    * Custom fields :
        * Famille (variété) ;
        * Récolte ;
        * Semis ;
        * Eau ;
        * Emplacement ;
        * Difficulté ;

3. Boutique :
    * Différentes fiches produits (graines)


4. Blog (single-post.php) :
    * Articles en rapport avec le sujet ;
    * Catégories possibles : A la une, potager, savoir-faire, témoignages etc.

5. “Vos questions” :
    * Un ensemble de champ de texte affichant les questions les plus posées + une espace dédié pour ajouter un commentaire en bas de page;

6. Contact
    * “Le projet” ;
    * “formulaire de contact” ;
    * “social link” vers le projet (à voir).



7. Mentions légales
