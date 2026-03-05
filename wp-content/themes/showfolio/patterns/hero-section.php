<?php

/**
 * Title: Hero Section
 * Slug: showfolio/hero-section
 * Categories: showfolio-patterns
 */
$showfolio_hero_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_hero_img = array(
    $showfolio_hero_url . 'assets/images/hero-section.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"1px","bottom":"210px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1px;padding-right:var(--wp--preset--spacing--40);padding-bottom:210px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"80px","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:80px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"60px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"610px"} -->
            <div class="wp-block-column" style="flex-basis:610px"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","wideSize":"100%","contentSize":"610px"}} -->
                <div class="wp-block-group"><!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background"} -->
                    <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-default" style="margin-top:0;margin-bottom:0" />
                    <!-- /wp:separator -->

                    <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"75px"}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:75px;font-style:normal;font-weight:700"><?php esc_html_e('Hi, I am Robert! A web developer', 'showfolio') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
                    <p class="has-foregound-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames turpis pretium bibendum nisl est sagittis aliquam pretium nunc curabitur magna est in nulla id volutpat et venenatis at lacus.', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"10px","left":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":[],"left":[]}}} -->
                    <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px"><!-- wp:column {"width":"251px","layout":{"type":"constrained","wideSize":"100%","contentSize":"251px","justifyContent":"left"}} -->
                        <div class="wp-block-column" style="flex-basis:251px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"fontFamily":"space-grotesk","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                            <div class="wp-block-group has-space-grotesk-font-family"><!-- wp:heading {"style":{"typography":{"fontSize":"65px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
                                <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:65px"><?php esc_html_e('10', 'showfolio') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"72px"}},"textColor":"secondary"} -->
                                <h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:72px"><?php esc_html_e('+', 'showfolio') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"layout":{"type":"constrained","wideSize":"110px"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                                    <p class="has-background-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Years of Experience', 'showfolio') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"295px","layout":{"type":"constrained","wideSize":"100%","contentSize":"300px","justifyContent":"left"}} -->
                        <div class="wp-block-column" style="flex-basis:295px"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"fontFamily":"space-grotesk","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
                            <div class="wp-block-group has-space-grotesk-font-family"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"64px"}},"textColor":"background"} -->
                                <h2 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:64px"><?php esc_html_e('120', 'showfolio') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"72px"}},"textColor":"secondary"} -->
                                <h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:72px"><?php esc_html_e('+', 'showfolio') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:group {"layout":{"type":"constrained","wideSize":"110px"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                                    <p class="has-background-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Projects Completed', 'showfolio') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"520px"} -->
            <div class="wp-block-column" style="flex-basis:520px"><!-- wp:image {"id":47,"width":"520px","height":"520px","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"100%"}}} -->
                <figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_hero_img[0]) ?>" alt="" class="wp-image-47" style="border-radius:100%;object-fit:cover;width:520px;height:520px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->