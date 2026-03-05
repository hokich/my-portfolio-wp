<?php

/**
 * Title: Services Section New
 * Slug: fotawp/services-section-new
 * Categories: fotawp-services
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/service_icon_1.png',
    $fotawp_url . 'assets/images/new/service_icon_2.png',
    $fotawp_url . 'assets/images/new/service_icon_3.png',
    $fotawp_url . 'assets/images/new/service_icon_4.png',
    $fotawp_url . 'assets/images/new/service_icon_5.png',
    $fotawp_url . 'assets/images/new/service_icon_6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","textColor":"heading-color","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-heading-color-color has-background-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-small-font-size" style="letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Services', 'fotawp') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Tailored Services Designed to Fit Your Business Needs', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center" style="line-height:1.6"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":3707,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-3707" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Business Strategy', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":4126,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-4126" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Digital Marketing', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":4127,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-4127" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('UI/UX Design', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"40px"}}}} -->
        <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":4130,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-4130" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Ecommerce Solution', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":4131,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[4]) ?>" alt="" class="wp-image-4131" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Data Analytics', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"fotawp-fade-up"} -->
            <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-background-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":4132,"width":"75px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url($fotawp_images[5]) ?>" alt="" class="wp-image-4132" style="width:75px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"large"} -->
                        <h6 class="wp-block-heading has-heading-color-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('QA &amp; Testing', 'fotawp') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.5"}},"textColor":"foreground"} -->
                        <p class="has-foreground-color has-text-color" style="font-size:18px;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}}},"borderColor":"tertiary-light"} -->
                            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-tertiary-light-border-color wp-element-button" style="border-width:1px;border-radius:60px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
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
<!-- /wp:group -->