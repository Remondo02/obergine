<?php
class Custom_Post_Type_Banner
{
    const POST_TYPE = 'banner';
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
                    'name'               => 'Bannière',
                    'singular_name'      => 'Bannière',
                    'add_new_item'       => 'Ajouter une nouvelle image de bannière',
                    'edit_item'          => 'Editer l\'image de bannière',
                    'new_item'           => 'Nouvelle image de bannière',
                    'view_item'          => 'Voir l\'image de bannière',
                    'view_items'         => 'Voir les images de bannière',
                    'not_found'          => 'Aucune image de bannière trouvée',
                    'not_found_in_trash' => 'Aucune image de bannière trouvée dans la corbeille',
                    'all_items'          => 'Toutes les images de bannière',
                ],
                'public'        => true,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-format-image',
                'hierarchical'  => false,
                'supports'      => [
                    'title',
                    'editor',
                    'thumbnail',
                    'revisions',
                ],
                'has_archive'      => false,
<<<<<<< HEAD
                'show_ui'            => true, // Afficher ou non notre post type dans le backoffice
=======
                'show_ui'          => true, 
>>>>>>> ed052d0f400fa2f68424486e86e16239d5fcaff5
                'can_export'       => true,
                'delete_with_user' => false,
                'show_in_rest'     => true
            ]
        );
    }
    
}