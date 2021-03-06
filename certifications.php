<?php
/*
Plugin Name: Custom Post Type: Certifications
Plugin URI: 
Description: Certifications post type
Version: 1.0
Author: Michael W. Delaney
Author URI: 
License: MIT
*/
// Register Custom Post Type
function certifications_post_type() {

	$labels = array(
		'name'                  => _x( 'Certifications', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Certification', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Certifications', 'text_domain' ),
		'name_admin_bar'        => __( 'Certification', 'text_domain' ),
		'archives'              => __( 'Certifications Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Certification Item:', 'text_domain' ),
		'all_items'             => __( 'All Certifications', 'text_domain' ),
		'add_new_item'          => __( 'Add New Certification', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Certification', 'text_domain' ),
		'edit_item'             => __( 'Edit Certification', 'text_domain' ),
		'update_item'           => __( 'Update Certification', 'text_domain' ),
		'view_item'             => __( 'View Certification', 'text_domain' ),
		'search_items'          => __( 'Search Certification', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into certification', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this certification', 'text_domain' ),
		'items_list'            => __( 'Certifications list', 'text_domain' ),
		'items_list_navigation' => __( 'Certifications list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter certification list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Certification', 'text_domain' ),
		'description'           => __( 'Certifications', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'certifications', $args );

}
add_action( 'init', 'certifications_post_type', 0 );
