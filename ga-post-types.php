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
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icion' => 'dashicons-admin-page',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page'
    );

    register_post_type('recipes', $args);
}