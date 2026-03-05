<?php

/**
 * Title: Team Section New
 * Slug: fotawp/team-section-new
 * Categories: fotawp-teams
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/team_1.jpg',
    $fotawp_url . 'assets/images/team_2.jpg',
    $fotawp_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f3fdff"}},"textColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-heading-color-color has-text-color has-background" style="background-color:#f3fdff;margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"fotawp-fade-up","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group fotawp-fade-up" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size" style="letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Meet Our Team', 'fotawp') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Tailored Services Designed to Fit Your Business Needs', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center" style="line-height:1.6"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud laboris.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"64px"},"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns" style="margin-top:64px"><!-- wp:column {"className":"fotawp-fade-right"} -->
        <div class="wp-block-column fotawp-fade-right"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"44px","right":"44px","bottom":"44px","left":"44px"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:44px;padding-right:44px;padding-bottom:44px;padding-left:44px"><!-- wp:image {"id":42,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-42" style="border-radius:50%;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-left has-large-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-align-left has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:20px;margin-bottom:20px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}}} -->
                <ul class="wp-block-social-links is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-up"} -->
        <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"44px","right":"44px","bottom":"44px","left":"44px"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:44px;padding-right:44px;padding-bottom:44px;padding-left:44px"><!-- wp:image {"id":161,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-161" style="border-radius:50%;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-left has-large-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-align-left has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:20px;margin-bottom:20px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}}} -->
                <ul class="wp-block-social-links is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-left"} -->
        <div class="wp-block-column fotawp-fade-left"><!-- wp:group {"className":"is-style-fotawp-boxshadow","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"44px","right":"44px","bottom":"44px","left":"44px"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:44px;padding-right:44px;padding-bottom:44px;padding-left:44px"><!-- wp:image {"id":162,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-162" style="border-radius:50%;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"large"} -->
                <h4 class="wp-block-heading has-text-align-left has-large-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"left","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
                <h6 class="wp-block-heading has-text-align-left has-text-color has-x-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:400"><?php esc_html_e('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-left has-sub-heading-color-color has-text-color has-small-font-size" style="margin-top:20px;margin-bottom:20px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad laboris.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}}} -->
                <ul class="wp-block-social-links is-style-logos-only" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->