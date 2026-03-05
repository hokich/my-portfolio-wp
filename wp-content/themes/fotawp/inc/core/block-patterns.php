<?php

/**
 * fotawp: Block Patterns
 *
 * @since fotawp 1.0.0
 */

/**
 * Registers pattern categories for fotawp
 *
 * @since fotawp 1.0.0
 *
 * @return void
 */
function fotawp_register_pattern_category()
{
	$block_pattern_categories = array(
		'fotawp-homepage' => array('label' => __('Homepage Templates', 'fotawp')),
		'fotawp-pages' => array('label' => __('Page Templates', 'fotawp')),
		'fotawp-banner' => array('label' => __('Featured Banners', 'fotawp')),
		'fotawp-services' => array('label' => __('Our Services', 'fotawp')),
		'fotawp-portfolio' => array('label' => __('Portfolios and Gallery', 'fotawp')),
		'fotawp-cta' => array('label' => __('Call To Action', 'fotawp')),
		'fotawp-teams' => array('label' => __('Teams', 'fotawp')),
		'fotawp-testimonials' => array('label' => __('Testimonials', 'fotawp')),
		'fotawp-posts' => array('label' => __('Posts and Magazine', 'fotawp')),
		'fotawp-pricing' => array('label' => __('Pricing Tables', 'fotawp')),
		'fotawp-contacts' => array('label' => __('Contact', 'fotawp')),
		'fotawp' => array('label' => __('Miscellaneous', 'fotawp')),
	);

	$block_pattern_categories = apply_filters('fotawp_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'fotawp_register_pattern_category', 9);
