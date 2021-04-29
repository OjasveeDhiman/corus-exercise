<?php

function corus_scripts(){
    wp_enqueue_script('slick_slider',  get_stylesheet_directory_uri().'/components/slick-slider/slick.min.js', ['jquery'], '1.8.0', true);
    wp_enqueue_script('corus_scripts', get_stylesheet_directory_uri().'/corus-gallery-slider.js');
    wp_enqueue_style('slick_slider_css', get_stylesheet_directory_uri().'/components/slick-slider/slick.css');
    wp_enqueue_style('corus_style', get_stylesheet_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'corus_scripts');

function corus_gallery() {

	/**
	 * Post Type: galleries.
	*/

	$labels = [
		"name" => __( "galleries", "corus-gallery" ),
		"singular_name" => __( "gallery", "corus-gallery" ),
		"menu_name" => __( "My galleries", "corus-gallery" ),
		"all_items" => __( "All galleries", "corus-gallery" ),
		"add_new" => __( "Add new", "corus-gallery" ),
		"add_new_item" => __( "Add new gallery", "corus-gallery" ),
		"edit_item" => __( "Edit gallery", "corus-gallery" ),
		"new_item" => __( "New gallery", "corus-gallery" ),
		"view_item" => __( "View gallery", "corus-gallery" ),
		"view_items" => __( "View galleries", "corus-gallery" ),
		"search_items" => __( "Search galleries", "corus-gallery" ),
		"not_found" => __( "No galleries found", "corus-gallery" ),
		"not_found_in_trash" => __( "No galleries found in trash", "corus-gallery" ),
		"parent" => __( "Parent gallery:", "corus-gallery" ),
		"featured_image" => __( "Featured image for this gallery", "corus-gallery" ),
		"set_featured_image" => __( "Set featured image for this gallery", "corus-gallery" ),
		"remove_featured_image" => __( "Remove featured image for this gallery", "corus-gallery" ),
		"use_featured_image" => __( "Use as featured image for this gallery", "corus-gallery" ),
		"archives" => __( "gallery archives", "corus-gallery" ),
		"insert_into_item" => __( "Insert into gallery", "corus-gallery" ),
		"uploaded_to_this_item" => __( "Upload to this gallery", "corus-gallery" ),
		"filter_items_list" => __( "Filter galleries list", "corus-gallery" ),
		"items_list_navigation" => __( "galleries list navigation", "corus-gallery" ),
		"items_list" => __( "galleries list", "corus-gallery" ),
		"attributes" => __( "galleries attributes", "corus-gallery" ),
		"name_admin_bar" => __( "gallery", "corus-gallery" ),
		"item_published" => __( "gallery published", "corus-gallery" ),
		"item_published_privately" => __( "gallery published privately.", "corus-gallery" ),
		"item_reverted_to_draft" => __( "gallery reverted to draft.", "corus-gallery" ),
		"item_scheduled" => __( "gallery scheduled", "corus-gallery" ),
		"item_updated" => __( "gallery updated.", "corus-gallery" ),
		"parent_item_colon" => __( "Parent gallery:", "corus-gallery" ),
	];

	$args = [
		"label" => __( "galleries", "corus-gallery" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "gallery", $args );
}

add_action( 'init', 'corus_gallery' );

?>