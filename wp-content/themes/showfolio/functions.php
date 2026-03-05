<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function showfolio_scripts()
{
    // enqueue parent style
    wp_enqueue_style('showfolio-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'showfolio_scripts');

/**
 * Registers pattern categories.
 *
 * @since showfolio 1.0.0
 *
 * @return void
 */
function showfolio_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'showfolio-patterns' => array('label' => __('Showfolio Patterns', 'showfolio'))
    );

    $block_pattern_categories = apply_filters('showfolio_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'showfolio_register_pattern_category', 9);
