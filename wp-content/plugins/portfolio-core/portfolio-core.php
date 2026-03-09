<?php
/**
 * Plugin Name: Portfolio Core
 * Description: Core functionality for portfolio site
 * Version: 1.0.0
 * Author: Pavlo Tsvietkov
 */

require_once plugin_dir_path(__FILE__) . 'includes/post-types.php';

require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';

require_once plugin_dir_path(__FILE__) . 'includes/helpers.php';

function portfolio_enqueue_styles() {
    wp_enqueue_style(
        'portfolio-projects',
        plugin_dir_url(__FILE__) . 'assets/css/projects.css',
        [],
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');
