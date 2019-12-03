<?php
/*
 * Plugin Name: Gourmet Artistry Post Types & Taxonomies
 * Plugin URI:
 * Description: Adds Custom Post types to site
 * Version: 1.0
 * Author: Juan De la torre Valdez
 * License: GPL2
 * License: URI: https://www,gnu.org/license/gpl-2.0.html
 */

add_action('init', 'ga_recipe_post_type', 0 );
add_action('init', 'ga_events_post_type', 0 );

function ga_recipe_post_type(){
    //Labels for the Post Type

    $labels = array(
        'name'                => _x( 'Recipes', 'Post Type General Name', 'meals' ),
        'singular_name'       => _x( 'Recipe', 'Post Type Singular Name', 'meals' ),
        'menu_name'           => __( 'Recipes', 'meals' ),
        'parent_item_colon'   => __( 'Parent Recipe', 'meals' ),
        'all_items'           => __('All Recipes', 'meals'),
        'view_item'           => __( 'View Recipe', 'meals' ),
        'add_new_item'        => __( 'Add New Recipe', 'meals' ),
        'add_new'             => __( 'Add New Recipe', 'meals' ),
        'edit_item'           => __( 'Edit Recipe','meals' ),
        'update_item'         => __( 'Update Recipe', 'meals' ),
        'search-items'        => __( 'Search Recipe', 'meals' ),
        'not_found'           => __( 'Not Found', 'meals' ),
        'not_found_in_trash'  => __('Not Found in trash', 'meals' ),
    );

    //Another Customizations

    $args = array(
        'label'  => __('Recipes', 'meals' ),
        'description' => __('Recipes for Gourmet Artistry', 'meals'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-page',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page'
    );

    register_post_type('recipes', $args);
}
function ga_events_post_type(){
    //Labels for the Post Type

    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'meals' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'meals' ),
        'menu_name'           => __( 'Events', 'meals' ),
        'parent_item_colon'   => __( 'Parent Event', 'meals' ),
        'all_items'           => __('All Events', 'meals'),
        'view_item'           => __( 'View Event', 'meals' ),
        'add_new_item'        => __( 'Add New Event', 'meals' ),
        'add_new'             => __( 'Add New Event', 'meals' ),
        'edit_item'           => __( 'Edit Event','meals' ),
        'update_item'         => __( 'Update Event', 'meals' ),
        'search-items'        => __( 'Search Event', 'meals' ),
        'not_found'           => __( 'Not Found', 'meals' ),
        'not_found_in_trash'  => __('Not Found in trash', 'meals' ),
    );

    //Another Customizations

    $args = array(
        'label'  => __('Events', 'meals' ),
        'description' => __('Events for Gourmet Artistry', 'meals'),
        'labels' => $labels,
        'supports' => array('title', 'editor' ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-calendar-alt',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page'
    );

    register_post_type('events', $args);
}