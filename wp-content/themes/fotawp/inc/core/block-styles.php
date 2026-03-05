<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package fotawp
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function fotawp_register_block_styles()
	{
		register_block_style(
			'core/columns',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-large',
				'label' => __('Box Shadow Large', 'fotawp')
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-large',
				'label' => __('Box Shadow Larger', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow',
				'label' => __('Box Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-medium',
				'label' => __('Box Shadow Medium', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-larger',
				'label' => __('Box Shadow Large', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-pulse',
				'label' => __('Iamge Pulse Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-hover-pulse',
				'label' => __('Hover Pulse Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'fotawp-image-hover-rotate',
				'label' => __('Hover Rotate Effect', 'fotawp')
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'fotawp-boxshadow-hover',
				'label' => __('Box Shadow on Hover', 'fotawp')
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-round',
				'label' => __('Background with round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-round-small',
				'label' => __('Background with small round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-border-small-round',
				'label' => __('Background with border small round corner style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-primary-color',
				'label' => __('Primary Color Set', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-secondary-color',
				'label' => __('Secondary Color Set', 'fotawp')
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'categories-background-with-mixed-color',
				'label' => __('Mixed Color Set', 'fotawp')
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'fotawp-title-hover-underline-primary-color',
				'label' => __('Hover: Underline Primary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'fotawp-title-hover-underline-secondary-color',
				'label' => __('Hover: Underline Secondary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-color',
				'label' => __('Button hover: Primary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-secondary-color',
				'label' => __('Button hover: Secondary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-primary-bgcolor',
				'label' => __('Button hover: Primary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-secondary-bgcolor',
				'label' => __('Button hover: Secondary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-tertiary-bgcolor',
				'label' => __('Button hover: Tertiary color fill', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-white-bgcolor',
				'label' => __('Button hover: White color fill', 'fotawp')
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-style-set-one',
				'label' => __('Set 1', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-style-set-two',
				'label' => __('Set 2: Arrow With Button Shadow', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-style-set-three',
				'label' => __('Set 3: Upward Arrow with Button Shadow ', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-style-set-four',
				'label' => __('Set 4: Arrow', 'fotawp')
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'button-hover-style-set-five',
				'label' => __('Set 5: Upward Arrow', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-color',
				'label' => __('Read More hover: Primary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-color',
				'label' => __('Read More hover: Secondary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-tertiary-color',
				'label' => __('Read More hover: Tertiary Color', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-primary-fill',
				'label' => __('Read More hover: Primary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-secondary-fill',
				'label' => __('Read More hover: secondary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/read-more',
			array(
				'name'  => 'readmore-hover-tertiary-fill',
				'label' => __('Read More hover: Tertiary Fill', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'list-style-no-bullet',
				'label' => __('None', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-check',
				'label' => __('Checklist', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-check-fill',
				'label' => __('Check Circle', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-check-primary-fade',
				'label' => __('Check Circle:Primary Fade ', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-check-secondary-fade',
				'label' => __('Check Circle:Secondary Fade ', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-check-outline',
				'label' => __('Outline Circle', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-square',
				'label' => __('Square', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-arrow',
				'label' => __('Arrow', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-arrow-outline',
				'label' => __('Arrow Outline', 'fotawp')
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-arrow-circle',
				'label' => __('Arrow Circle', 'fotawp')
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'  => 'fotawp-list-style-dash',
				'label' => __('Dash', 'fotawp')
			)
		);
		register_block_style(
			'core/gallery',
			array(
				'name'  => 'enable-grayscale-mode-on-image',
				'label' => __('Enable Grayscale Mode on Image', 'fotawp')
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'social-icon-border',
				'label' => __('Border Style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'fotawp-post-featured-image-overlap',
				'label' => __('Top Overlap Style', 'fotawp')
			)
		);
		register_block_style(
			'core/page-list',
			array(
				'name'  => 'fotawp-page-list-bullet-hide-style',
				'label' => __('Hide Bullet Style', 'fotawp')
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'fotawp-categories-bullet-hide-style',
				'label' => __('Hide Bullet Style', 'fotawp')
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'fotawp-cover-round-style',
				'label' => __('Round Corner Style', 'fotawp')
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'  => 'fotawp-cover-round-overlap',
				'label' => __('Round Corner with Overlap Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke',
				'label' => __('Heading Primary Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-secondary',
				'label' => __('Heading Secondary Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-heading',
				'label' => __('Heading Color Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-foreground',
				'label' => __('Heading Foreground Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'  => 'fotawp-heading-transparentfill-outline-stroke-tertiary',
				'label' => __('Heading Tertiary Stroke Style', 'fotawp')
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-name-with-icon',
				'label' => __('With Icon', 'fotawp')
			)
		);
		register_block_style(
			'core/post-author-name',
			array(
				'name'  => 'author-name-with-white-icon',
				'label' => __('With White Icon', 'fotawp')
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'post-date-with-icon',
				'label' => __('With Icon', 'fotawp')
			)
		);
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'post-date-with-white-icon',
				'label' => __('With White Icon', 'fotawp')
			)
		);
		register_block_style(
			'core/site-title',
			array(
				'name'  => 'fotawp-site-title-gradient-style',
				'label' => __('Gradient Color', 'fotawp')
			)
		);
	}
	add_action('init', 'fotawp_register_block_styles');
}
