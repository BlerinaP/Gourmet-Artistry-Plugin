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

add_action('init', 'ga_recipe_post_type');

function ga_recipe_post_type(){
    register_post_type( 'recipe',
        array(
            'labels' => array(
              'name' => __('Recipe'),
              'singular_name' => __('Recipe')
            ),
            'public' => true,
            'has_archive' => true
        )
    );
}