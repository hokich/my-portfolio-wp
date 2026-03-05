<?php

/**
 * Title: Contact Newsletter
 * Slug: showfolio/contact-newsletter
 * Categories: showfolio-patterns
 */
$showfolio_contact_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_contact_img = array(
    $showfolio_contact_url . 'assets/images/contact-banner.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"64px"}},"layout":{"type":"constrained","wideSize":"450px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:separator {"className":"is-style-default","backgroundColor":"background"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-default" />
                    <!-- /wp:separator -->

                    <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"52px"}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px"><?php esc_html_e('Interested in', 'showfolio') ?> <a href="#"><?php esc_html_e('Working', 'showfolio') ?></a> <?php esc_html_e('with me?', 'showfolio') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textDecoration":"underline","fontSize":"52px"}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px;text-decoration:underline"><?php esc_html_e("Let's Talk", 'showfolio') ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0","top":"0"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"250px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="border-radius:10px;min-height:250px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph -->
                    <p><?php esc_html_e('* Note : Insert Contact Form 7 shortcode with the custom classname “showfolio-contact-form”', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->