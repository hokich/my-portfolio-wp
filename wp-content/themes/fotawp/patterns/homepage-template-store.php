<?php

/**
 * Title: Homepage Template: Store
 * Slug: fotawp/homepage-template-store
 * Categories: fotawp-homepage
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/store_banner_bg.jpg',
    $fotawp_url . 'assets/images/pattern_img_5.jpg',
    $fotawp_url . 'assets/images/review_star.svg',
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/store_cta_bg.jpg'
)
?>
<!-- wp:group {"metadata":{"name":"Store Homepage"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":3374,"dimRatio":60,"overlayColor":"black","isUserOverlayColor":true,"minHeight":750,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
    <div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3374" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|20","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"width":30,"shouldSyncIcon":false} /-->

                        <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px"}},"textColor":"text-alter-color"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true,"className":""} /-->

                        <!-- wp:navigation-link {"label":"Style Guide","url":"#","kind":"custom","isTopLevelLink":true,"className":""} /-->

                        <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true,"className":""} /-->

                        <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true,"className":""} /-->
                        <!-- /wp:navigation -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"156px"} -->
            <div style="height:156px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5,"style":{"color":{"text":"#10d2d2"}},"fontSize":"small"} -->
                <h5 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#10d2d2"><?php esc_html_e('Summer Sale Offer', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.5","fontSize":"64px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foregound-alt"} -->
                <h2 class="wp-block-heading alignwide has-text-align-center has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:0;padding-left:0;font-size:64px;font-style:normal;font-weight:800;line-height:1.5;text-transform:uppercase"><?php esc_html_e('Save Flat 40% on Every Buy!', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"textAlign":"center","textColor":"background","style":{"spacing":{"padding":{"left":"45px","right":"45px","top":"22px","bottom":"22px"}},"border":{"radius":"13px"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","fontSize":"17px"},"color":{"background":"#03aaaa"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:17px;font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-background-color has-text-color has-background has-text-align-center wp-element-button" style="border-radius:13px;background-color:#03aaaa;padding-top:22px;padding-right:45px;padding-bottom:22px;padding-left:45px"><?php esc_html_e('Visit Store', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:spacer {"height":"192px"} -->
            <div style="height:192px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"40px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
        <div class="wp-block-group" style="padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px"}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="font-size:32px"><?php esc_html_e('Featured Products', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"17px"}}} -->
            <p class="has-text-align-center" style="font-size:17px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":177,"query":{"perPage":"8","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"className":"ct-products-block"} -->
        <div class="wp-block-query ct-products-block"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":4}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","bottom":"0px","left":"0px","top":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"customOverlayColor":"#e8eae9","isUserOverlayColor":true,"minHeight":300,"contentPosition":"top right","isDark":false,"style":{"border":{"radius":"0px"}},"className":"ct-product-featured-image-holder is-style-fotawp-cover-round-style"} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-top-right ct-product-featured-image-holder is-style-fotawp-cover-round-style" style="border-radius:0px;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#e8eae9"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /--></div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","right":"0","bottom":"16px","left":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:16px;padding-right:0;padding-bottom:16px;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-title-hover-secondary-color","fontSize":"medium"} /-->

                        <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"style":{"color":{"background":"#03aaaa"},"spacing":{"padding":{"left":"35px","right":"35px","top":"20px","bottom":"20px"}},"border":{"radius":"13px"}},"fontSize":"medium"} -->
            <div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:13px;background-color:#03aaaa;padding-top:20px;padding-right:35px;padding-bottom:20px;padding-left:35px"><?php esc_html_e('Visit Store', 'fotawp') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"140px","bottom":"140px","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"color":{"background":"#107d790f"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background" style="background-color:#107d790f;padding-top:140px;padding-right:var(--wp--preset--spacing--40);padding-bottom:140px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"64px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[1]) ?>","id":3360,"dimRatio":0,"customOverlayColor":"#a9a7a4","isUserOverlayColor":true,"minHeight":540,"isDark":false,"className":"is-style-default"} -->
                <div class="wp-block-cover is-light is-style-default" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a9a7a4"></span><img class="wp-block-cover__image-background wp-image-3360" alt="" src="<?php echo esc_url($fotawp_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":6,"style":{"color":{"text":"#03aaaa"}}} -->
                <h6 class="wp-block-heading has-text-color" style="color:#03aaaa"><?php esc_html_e('Our Story', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"40px","lineHeight":"1.3"}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-size:40px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Committed to delivering the best quality in the industry since a decade.', 'fotawp') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":1.6}},"textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-sub-heading-color-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"5px"} -->
                <div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}},"typography":{"textDecoration":"none","fontSize":"18px"},"color":{"background":"#03aaaa"},"border":{"radius":"13px"}},"className":"is-style-fill"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:18px;text-decoration:none"><a class="wp-block-button__link has-background-color has-text-color has-background wp-element-button" style="border-radius:13px;background-color:#03aaaa;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","right":"0","bottom":"var:preset|spacing|80","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isUserOverlayColor":true,"isDark":false} -->
        <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"10px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained","contentSize":"660px"}} -->
                <div class="wp-block-group is-style-default has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize","lineHeight":"1.5"},"spacing":{"margin":{"bottom":"35px"}},"color":{"text":"#03aaaa"}},"fontSize":"medium"} -->
                    <h2 class="wp-block-heading has-text-align-center has-text-color has-medium-font-size" style="color:#03aaaa;margin-bottom:35px;line-height:1.5;text-transform:capitalize"><?php esc_html_e('Thousands of 5 Star reviews from satisfied Customers', 'fotawp') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:image {"id":726,"width":"115px","height":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7","fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"color":{"text":"#292929"}},"fontSize":"medium","fontFamily":"playfair-display"} -->
                    <p class="has-text-align-center has-text-color has-playfair-display-font-family has-medium-font-size" style="color:#292929;margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.7"><?php esc_html_e('Not only theme, it\'s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"id":1822,"width":"70px","height":"70px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"10px"}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:10px;font-style:normal;font-weight:600"><?php esc_html_e('Alex Pawar', 'fotawp') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
                    <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Digital Marketing, CozyThemes', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[4]) ?>","id":3375,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.3,"y":0.07},"minHeight":640,"contentPosition":"center center","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3375" alt="" src="<?php echo esc_url($fotawp_images[4]) ?>" style="object-position:30% 7%" data-object-fit="cover" data-object-position="30% 7%" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"540px","justifyContent":"right"}} -->
                <div class="wp-block-group has-transparent-background-color has-background" style="padding-top:4rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"48px","lineHeight":"1.4","textTransform":"uppercase"}},"textColor":"foregound-alt"} -->
                    <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.4;text-transform:uppercase"><?php esc_html_e('Get 50% OFF on OCULUS', 'fotawp') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"25px","bottom":"25px"}},"color":{"background":"#03aaaa"},"border":{"radius":"13px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-background wp-element-button" style="border-radius:13px;background-color:#03aaaa;padding-top:25px;padding-right:40px;padding-bottom:25px;padding-left:40px"><?php esc_html_e('Explore More Features', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"1.5rem"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#242525"}},"textColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background-color has-text-color has-background" style="background-color:#242525;margin-top:0;margin-bottom:0;padding-top:5rem;padding-bottom:1.5rem"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Categories', 'fotawp') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2,"textDecoration":"none"},"elements":{"link":{"color":{"text":"#dddfdf"}}}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
                <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-decoration:none" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Womens Wear', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Kids Wear', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Footwear', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Mens Wear', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Smart Watch', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Smart Gadgets', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Support', 'fotawp') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2},"elements":{"link":{"color":{"text":"#dddfdf"}}}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
                <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About us', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Our Team', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Conatct Us', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Legal', 'fotawp') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2},"elements":{"link":{"color":{"text":"#dddfdf"}}}},"className":"is-style-hide-bullet-list-link-hover-style-secondary"} -->
                <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-hide-bullet-list-link-hover-style-secondary has-link-color"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Policy', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"85%"} -->
                    <div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
                        <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('Fota Store', 'fotawp') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","bottom":"var:preset|spacing|30","left":"0","top":"1.2rem"}},"typography":{"lineHeight":"1.5"},"color":{"text":"#dddfdf"}}} -->
                        <p class="has-text-color" style="color:#dddfdf;margin-top:1.2rem;margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0;line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip ex ea commodo consequat.', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Opening Hour: 7 Days/ 6:00AM - 10:00 PM', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('1234 Seaside Street, South Wales California 234211, USA', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('+1 (888) 012-3456', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('email@example.com', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|20","left":"0"},"margin":{"top":"4rem"}},"border":{"top":{"color":"#323232","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-color:#323232;border-top-width:1px;margin-top:4rem;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
            <p class="has-foregound-alt-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by WordPress | Theme: FotaWP by CozyThemes.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"0"}}},"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->