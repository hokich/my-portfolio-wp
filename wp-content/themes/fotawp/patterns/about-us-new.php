<?php

/**
 * Title: About Us New
 * Slug: fotawp/about-us-new
 * Categories: about
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/about_image.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"}}},"gradient":"fade-gradient","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-fade-gradient-gradient-background has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"fotawp-fade-up","style":{"spacing":{"padding":{"top":"0"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up" style="padding-top:0;flex-basis:45%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"4px"}},"textColor":"primary","fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-primary-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:4px"><?php esc_html_e('OUR STORY', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.2"}},"textColor":"heading-color"} -->
                <h2 class="wp-block-heading has-heading-color-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Comprehensive Digital Services for Unmatched Growth!', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                <p class="has-foreground-color has-text-color" style="font-size:16px;line-height:1.5"><?php esc_html_e('Comes with native builder Full Site Editing/Gutenberg and integration of page builder Elementor adding the full control of site and making FotaWP perfect powerful tools of site builder that you easily build your site without coding knowledge.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"className":"is-style-fotawp-list-style-check-primary-fade","style":{"typography":{"lineHeight":"2","fontSize":"18px"},"spacing":{"margin":{"top":"24px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <ul style="margin-top:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;line-height:2" class="wp-block-list is-style-fotawp-list-style-check-primary-fade"><!-- wp:list-item -->
                    <li><?php esc_html_e('Full Site Editing, No Limits at All!', 'fotawp') ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php esc_html_e('100% Track Record, Driven by Results', 'fotawp') ?></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><?php esc_html_e('Seamless Integration, Effortless Performance', 'fotawp') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"36px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:36px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","className":"is-style-button-hover-style-set-five","style":{"spacing":{"padding":{"left":"3rem","right":"3rem","top":"1.4em","bottom":"1.4em"}},"border":{"radius":"80px"}}} -->
                    <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:80px;padding-top:1.4em;padding-right:3rem;padding-bottom:1.4em;padding-left:3rem"><?php esc_html_e('Explore More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":3676,"sizeSlug":"full","linkDestination":"none","className":"fotawp-zoom-in-up","style":{"color":{"duotone":"unset"}}} -->
                <figure class="wp-block-image size-full fotawp-zoom-in-up"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-3676" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->