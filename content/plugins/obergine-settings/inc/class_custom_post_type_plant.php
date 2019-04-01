<?php
class Custom_Post_Type_Plant
{

    const POST_TYPE = 'plant';

    public function __construct()
    {
        // Dans un contexte objet, le callable est de type tableau avec en première valeur l'instance de notre classe et en deuxième le nom de la méthode à exécuter
        add_action( 'init', [$this, 'register_post_type'] );
    }
    public function register_post_type()
    {
        // @link https://codex.wordpress.org/Function_Reference/register_post_type
        register_post_type(
            self::POST_TYPE,
            [
                'labels' => [ // Les textes d'affichage dans le backoffice
                    'name'               => 'Plantes potagères',
                    'singular_name'      => 'Plante potagère',
                    'add_new_item'       => 'Ajouter une nouvelle plante potagère',
                    'edit_item'          => 'Editer la plante potagère',
                    'new_item'           => 'Nouvelle plante potagère',
                    'view_item'          => 'Voir la plante potagère',
                    'view_items'         => 'Voir les plantes potagères',
                    'search_items'       => 'Rechercher des plantes potagères',
                    'not_found'          => 'Aucune plante potagère trouvée',
                    'not_found_in_trash' => 'Aucune plante potagère trouvée dans la corbeille',
                    'all_items'          => 'Toutes les plantes potagères',
                    'archives'           => 'Archives des plantes potagères'
                ],

                 'public' => true, // permet de configurer les options exclude_from_search, publicly_queryable, show_ui, show_in_nav_menus
                'exclude_from_search' => false, // Exclure ou non le post type des résultats de la recherche côté front-office
                'publicly_queryable'  => true, // Permet d'accéder ou non à nos contenus de ce post type à partir d'URL : ?post_type={post_type_key}, ?{post_type_key}={single_post_slug}, ?{post_type_query_var}={single_post_slug}
                'show_ui'             => true, // Afficher ou non notre post type dans le backoffice
                'show_in_nav_menus'   => true, // Afficher ou non le post type dans l'interface du backoffice de gestion de menus
                'show_in_admin_bar'   => true,
               
                'menu_position'       => 4,
                'menu_icon'           => 'dashicons-carrot',
                'hierarchical'        => false, // Permet de hiérarchiser les contenu de ce post type entre eux (comme le post type page)
                'supports'            => [
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt'
                ],
                'has_archive'         => true, // Avoir ou non une page d'archive de notre post type
                'can_export'          => true, // Donner la possibilité d'exporter ou non les contenus de ce post type,
                'delete_with_user'    => false,
                'show_in_rest'        => true // Permet de faire fonctionner l'éditeur Gutenberg sur notre post type,
            ]
        );
    }
    
}