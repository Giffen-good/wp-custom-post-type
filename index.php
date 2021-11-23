<?php
/**
* Plugin Name: Simple Custom Post Type
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: Creates a custom post type: "Insights".
* Version: 1.0
* Author: Christopher Rock
* Author URI: http://yourwebsiteurl.com/
**/

function create_posttype() {
    register_post_type( 'Insights',
        array(
            'labels' => array(
                'name' => __( 'Insights' ),
                'singular_name' => __( 'Insight' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'insights'),
            'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
            'show_in_rest' => true,
            'menu_position' => 5,

        )
    );

}

// Default Wordpress Category Taxonomy
add_action( 'init', 'create_posttype' );
