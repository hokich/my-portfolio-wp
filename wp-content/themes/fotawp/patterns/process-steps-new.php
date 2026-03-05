<?php

/**
 * Title: Process Step New
 * Slug: fotawp/process-steps-new
 * Categories: fotawp, about
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/step_img_1.png',
    $fotawp_url . 'assets/images/new/step_img_2.png',
    $fotawp_url . 'assets/images/new/step_img_3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","textColor":"heading-color","layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group has-heading-color-color has-background-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size" style="letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('How we work', 'fotawp') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Our Structured Process to Achieve Your Goals', 'fotawp') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:100px"><!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-up","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"84px","fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
            <h1 class="wp-block-heading has-tertiary-light-color has-text-color has-link-color" style="font-size:84px;font-style:normal;font-weight:900;line-height:1"><?php esc_html_e('01', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
            <h3 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Initial Consultation', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <p style="margin-top:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-style-set-five","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"80px","width":"1px"}}} -->
                <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:80px"><?php esc_html_e('Apply Now', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":3774,"sizeSlug":"full","linkDestination":"none","align":"right","className":"fotawp-fade-left"} -->
            <figure class="wp-block-image alignright size-full fotawp-fade-left"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-3774" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"100px","bottom":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:100px;margin-bottom:100px"><!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-left"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-left"><!-- wp:image {"id":3897,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-3897" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-up","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"84px","fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
            <h1 class="wp-block-heading has-tertiary-light-color has-text-color has-link-color" style="font-size:84px;font-style:normal;font-weight:900;line-height:1"><?php esc_html_e('02', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
            <h3 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Strategy Development &amp; Implementation', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <p style="margin-top:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-style-set-five","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"80px","width":"1px"}}} -->
                <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:80px"><?php esc_html_e('Explore More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-up","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"84px","fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary-light"}}}},"textColor":"tertiary-light"} -->
            <h1 class="wp-block-heading has-tertiary-light-color has-text-color has-link-color" style="font-size:84px;font-style:normal;font-weight:900;line-height:1"><?php esc_html_e('03', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
            <h3 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Reviews &amp; Finalization', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
            <p style="margin-top:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-style-set-five","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"80px","width":"1px"}}} -->
                <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:80px"><?php esc_html_e('Explore More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-right"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-right"><!-- wp:image {"id":3898,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
            <figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-3898" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->