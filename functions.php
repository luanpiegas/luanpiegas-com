<?php 

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'luan_work_cpt_init' );
function luan_work_cpt_init() {
    $labels = array(
        'name'                  => 'Work',
        'singular_name'         => 'Work',
        'menu_name'             => 'Works',
        'name_admin_bar'        => 'Admin Works'
    ); 
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_icon'			 => 'dashicons-portfolio',
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt']
    ];
    register_post_type( 'work', $args );
}
 
add_action( 'after_switch_theme', 'luan_rewrite_flush' );
function luan_rewrite_flush() {
    luan_work_cpt_init();
    flush_rewrite_rules();
}