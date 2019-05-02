<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('home', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Home'),
            'edit_item' => __('Edit Home'),
            'name' => __('Homes'),
            'search_items' => __('Search Homes'),
            'singular_name' => __('Home'),
        ],
				'supports' => [
            'title',
            'editor',
            'thumbnail',
            ],
        'menu_icon' => 'dashicons-admin-home',
        'menu_position' => 20,
        'public' => true,
    ]);
});
