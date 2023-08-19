<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

add_action( 'wp_enqueue_scripts', 'luan_enqueue_scripts' );

function luan_enqueue_scripts() {
    wp_enqueue_style( 'luan-style', get_stylesheet_uri() );

    wp_enqueue_script( 'luan-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}

add_action( 'init', 'luan_works_cpt' );
function luan_works_cpt() {
    $labels = array(
        'name'               => _x( 'Works', 'post type general name', 'luan' ),
        'singular_name'      => _x( 'Work', 'post type singular name', 'luan' ),
        'menu_name'          => _x( 'Works', 'admin menu', 'luan' ),
        'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'luan' ),
        'add_new'            => _x( 'Add New', 'work', 'luan' ),
        'add_new_item'       => __( 'Add New Work', 'luan' ),
        'new_item'           => __( 'New Work', 'luan' ),
        'edit_item'          => __( 'Edit Work', 'luan' ),
        'view_item'          => __( 'View Work', 'luan' ),
        'all_items'          => __( 'All Works', 'luan' ),
        'search_items'       => __( 'Search Works', 'luan' ),
        'parent_item_colon'  => __( 'Parent Works:', 'luan' ),
        'not_found'          => __( 'No works found.', 'luan' ),
        'not_found_in_trash' => __( 'No works found in Trash.', 'luan' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'luan' ),
        'public'             => true,
        'publicly_queryable' => true,
        'menu_icon'          => 'dashicons-admin-customizer',
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'taxonomies'         => array( 'category' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'work', $args );
}
 
add_action( 'after_switch_theme', 'luan_rewrite_flush' );
function luan_rewrite_flush() {
    luan_work_cpt_init();
    flush_rewrite_rules();
}