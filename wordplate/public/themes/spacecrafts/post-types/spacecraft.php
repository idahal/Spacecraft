<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('spacecraft', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Spacecraft'),
            'edit_item' => __('Edit Spacecraft'),
            'name' => __('Spacecrafts'),
            'search_items' => __('Search Spacecrafts'),
            'singular_name' => __('Spacecraft'),
        ],
				'supports' => [
            'title',
            'editor',
            'thumbnail',
            ],
        'menu_icon' => 'dashicons-star-empty',
        'menu_position' => 20,
        'public' => true,
    ]);
});
