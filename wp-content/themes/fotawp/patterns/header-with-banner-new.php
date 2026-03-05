<?php

/**
 * Title: Header With Banner New
 * Slug: fotawp/header-with-banner-new
 * Categories: header,fotawp-banner
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/hero_image.png',
);
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"text-alter-color","fontSize":"large"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":""},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
                <!-- wp:home-link {"label":"Home"} /-->

                <!-- wp:page-list /-->
                <!-- /wp:navigation -->

                <!-- wp:group {"metadata":{"name":"Fotawp Search Modal"},"className":"fotawp-search-modal","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group fotawp-search-modal"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","className":"fotawp-search-button","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"fontSize":"small"} -->
                        <div class="wp-block-button has-custom-font-size fotawp-search-button has-small-font-size"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e('Search', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                    <!-- wp:group {"className":"fotawp-search-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-group fotawp-search-content" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":760,"className":"search-modal-cover","layout":{"type":"constrained","contentSize":"970px"}} -->
                        <div class="wp-block-cover search-modal-cover" style="min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search this site...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none","radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"background","textColor":"primary"} /-->

                                <!-- wp:html -->
                                <button class="fotawp-search-close" tabindex="3"><?php esc_html_e('x', 'fotawp') ?></button>
                                <!-- /wp:html -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"dimRatio":0,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40"},"margin":{"top":"20px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
    <div class="wp-block-cover alignfull is-light" style="margin-top:20px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"40px"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"590px","justifyContent":"right"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:heading {"textAlign":"left","level":1,"className":"fotawp-flip-up","style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"60px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"foregound-alt"} -->
                        <h1 class="wp-block-heading has-text-align-left fotawp-flip-up has-foregound-alt-color has-text-color has-link-color" style="margin-bottom:24px;font-size:60px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Ignite Your Online Presence, Expand', 'fotawp') ?><br><?php esc_html_e('Your Business Globally!', 'fotawp') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left","className":"fotawp-fade-up","style":{"typography":{"lineHeight":"1.8","fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"2.6rem"}}},"textColor":"foregound-alt"} -->
                        <p class="has-text-align-left fotawp-fade-up has-foregound-alt-color has-text-color" style="margin-top:0;margin-bottom:2.6rem;font-size:16px;line-height:1.8"><?php esc_html_e('The placeholder text, beginning with the line lorem ipsum looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"fotawp-slide-up","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons fotawp-slide-up"><!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","className":"is-style-button-hover-white-bgcolor","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.5rem","bottom":"1.5rem"}},"typography":{"fontSize":"18px"}}} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-white-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:100px;padding-top:1.5rem;padding-right:2.5rem;padding-bottom:1.5rem;padding-left:2.5rem"><?php esc_html_e('Schedule an Appointment', 'fotawp') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"1.5rem","bottom":"1.5rem"}},"typography":{"fontSize":"18px"}}} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:100px;padding-top:1.5rem;padding-right:2.5rem;padding-bottom:1.5rem;padding-left:2.5rem"><?php esc_html_e('Request Demo', 'fotawp') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":3594,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"fotawp-zoom-in-up"} -->
                    <figure class="wp-block-image size-full fotawp-zoom-in-up"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-3594" style="object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->