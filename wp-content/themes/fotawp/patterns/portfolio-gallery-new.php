<?php

/**
 * Title: Portfolio Gallery New
 * Slug: fotawp/portfolio-gallery-new
 * Categories: fotawp-portfolio
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/folio_1.jpg',
    $fotawp_url . 'assets/images/new/folio_2.jpg',
    $fotawp_url . 'assets/images/new/folio_3.jpg',
    $fotawp_url . 'assets/images/new/folio_4.jpg',
    $fotawp_url . 'assets/images/new/folio_5.jpg',
    $fotawp_url . 'assets/images/new/folio_6.jpg',
    $fotawp_url . 'assets/images/new/folio_7.jpg',
    $fotawp_url . 'assets/images/new/folio_8.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"fotawp-fade-up","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"120px","bottom":"68px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group fotawp-fade-up" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:68px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"3px"}},"textColor":"secondary","fontSize":"small"} -->
                <h5 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Portfolio', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"foregound-alt"} -->
                <h1 class="wp-block-heading has-foregound-alt-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Explore Our', 'fotawp') ?><br><?php esc_html_e('Project Highlights', 'fotawp') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foregound-alt"} -->
                <p class="has-foregound-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"36px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:36px"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-button-hover-style-set-five","style":{"spacing":{"padding":{"left":"3rem","right":"3rem","top":"1.3em","bottom":"1.3em"}},"border":{"radius":"80px"}}} -->
                    <div class="wp-block-button is-style-button-hover-style-set-five"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:80px;padding-top:1.3em;padding-right:3rem;padding-bottom:1.3em;padding-left:3rem"><?php esc_html_e('Explore More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"fotawp-fade-up","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns fotawp-fade-up" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":4137,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4137" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"70px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:70px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":4138,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"isDark":false,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4138" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[2]) ?>","id":4139,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4139" alt="" src="<?php echo esc_url($fotawp_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[3]) ?>","id":4140,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4140" alt="" src="<?php echo esc_url($fotawp_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"fotawp-fade-up","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns fotawp-fade-up" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[4]) ?>","id":4141,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4141" alt="" src="<?php echo esc_url($fotawp_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[5]) ?>","id":4142,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"isDark":false,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4142" alt="" src="<?php echo esc_url($fotawp_images[5]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[6]) ?>","id":4143,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"isDark":false,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4143" alt="" src="<?php echo esc_url($fotawp_images[6]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[7]) ?>","id":4144,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":340,"isDark":false,"className":"fotawp-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light fotawp-portfolio-box" style="min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4144" alt="" src="<?php echo esc_url($fotawp_images[7]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"background-alt","fontSize":"large"} -->
                    <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Portfolio Title', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons" style="margin-top:20px;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"80px","width":"1px","color":"#FEFEFE"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" style="border-color:#FEFEFE;border-width:1px;border-radius:80px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->