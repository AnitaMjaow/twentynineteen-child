<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

function my_theme_enqueue_styles() {
 
    $parent_style = 'jobcareertheme';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('1.9')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




//creating post type 'Projets'
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'twentynineteen' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentynineteen' ),
        'menu_name'           => __( 'Projects', 'twentynineteen' ),
        'parent_item_colon'   => __( 'Parent Project', 'twentynineteen' ),
        'all_items'           => __( 'All Projects', 'twentynineteen' ),
        'view_item'           => __( 'View Project', 'twentynineteen' ),
        'add_new_item'        => __( 'Add New Project', 'twentynineteen' ),
        'add_new'             => __( 'Add New', 'twentynineteen' ),
        'edit_item'           => __( 'Edit Project', 'twentynineteen' ),
        'update_item'         => __( 'Update Project', 'twentynineteen' ),
        'search_items'        => __( 'Search Project', 'twentynineteen' ),
        'not_found'           => __( 'Not Found', 'twentynineteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentynineteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Projects', 'twentynineteen' ),
        'description'         => __( 'Project news and reviews', 'twentynineteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Projects', $args );
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );


add_filter( 'the_title', function( $title ) {
  if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
    $title .= rank_math_get_breadcrumbs();
  }
  return $title;
});

add_filter( 'the_content', function( $content ) {
  if( function_exists( 'rank_math_get_breadcrumbs' ) ) {
    $content = rank_math_get_breadcrumbs() . $content;
  }
  return $content;
});

