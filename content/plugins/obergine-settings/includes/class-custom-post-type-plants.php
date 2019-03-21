<?php


class Custom_Post_Type_Plant
{
    const POST_TYPE = 'plant';
    public function __construct()
    {
        add_action( 'init', [ $this, 'register_post_type' ] );
    }



    public function register_post_type()
    {
        register_post_type(
            self::POST_TYPE,
            [
                'labels' => [ // Les textes d'affichage dans le backoffice
                    'name'               => 'Plantes Potagères',
                    'singular_name'      => 'Plante Potagère', 
                    'add_new_item'       => 'Ajouter une nouvelle plante potagère', 
                    'edit_item'          => 'Editer la plante potagère', 
                    'new_item'           => 'Nouvelle plante potagère', 
                    'view_item'          => 'Voir la plante potagère', 
                    'view_items'         => 'Voir les plantes potagères', 
                    'search_items'       => 'Rechercher des plantes potagères', 
                    'not_found'          => 'Aucune plante potagère trouvée', 
                    'not_found_in_trash' => 'Aucune plante potagère trouvée dans la corbeille', 
                    'all_items'          => 'Toutes les plantes potagères',
                ],
                'public'        => true,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-carrot',
                'hierarchical'  => false,
                'supports'      => [
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'author',
                    'comments',
                    'revisions',
                ],
                'has_archive'      => true,
                'can_export'       => true,
                'delete_with_user' => false,
                'show_in_rest'     => true,
                'show_in_menu'     => true,
                'capabilities'     => [
                    'edit_post'          => 'edit_recipe',
                    'read_post'          => 'read_recipe',
                    'delete_post'        => 'delete_recipe',
                    'edit_posts'         => 'edit_recipes',
                    'edit_others_posts'  => 'edit_others_recipes',
                    'publish_posts'      => 'publish_recipes',
                    'read_private_posts' => 'read_private_recipes',
                    'create_posts'       => 'edit_recipes',
                ]
            ]
        );
    }