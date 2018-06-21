<?php
 /**
 * Books post type
 */
// Creating a Deals Custom Post Type
function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Books' ),
		'singular_name'       => __( 'Book'),
		'menu_name'           => __( 'Books'),
		'all_items'           => __( 'All Books'),
	);
	$args = array(
		'label'               => __( 'books'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		'public'              => true,
		'has_archive' 		  => true
);
	register_post_type( 'books', $args );
}
add_action( 'init', 'crunchify_deals_custom_post_type', 0 );
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Genre', 'taxonomy general name' ),
    'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
  ); 	
 
  register_taxonomy('types',array('books'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
add_action('wp_head','rtl_css',1);
function rtl_css(){
    $source = get_stylesheet_directory_uri().'/style-rtl.css';
    wp_enqueue_style('adjust_ABplugins', $source);
}