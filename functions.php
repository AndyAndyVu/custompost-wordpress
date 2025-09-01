<?php

function custom_post_types()
{
    register_post_type("Car", array(
        'show_in_rest' => true, // Det gør at wordpress bliver moderne
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'cars'), // Vi ændrer urlen
        'has_archive' => true, // 
        'public' => true,
        'labels' => array(
            'name' => 'Cars',
            'add_new_item' => 'Add New Car',
            'edit_item' => 'Edit Car',
            'all_items' => 'All Car',
            'singular_name' => 'Car'
        ),
        'menu-icon' => 'dashicons-car'
    ));
}

add_action('init', 'custom_post_types');
