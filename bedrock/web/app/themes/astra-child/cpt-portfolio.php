<?php
function create_portfolio_cpt() {
    $labels = array(
        'name' => 'Portfolios',
        'singular_name' => 'Portfolio',
        'add_new' => 'Ajouter une réalisation',
        'add_new_item' => 'Ajouter une nouvelle réalisation',
        'edit_item' => 'Modifier une réalisation',
        'new_item' => 'Nouvelle réalisation',
        'view_item' => 'Voir la réalisation',
        'search_items' => 'Rechercher une réalisation',
        'not_found' => 'Aucune réalisation trouvée',
        'not_found_in_trash' => 'Aucune réalisation dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Portfolios'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');
?>