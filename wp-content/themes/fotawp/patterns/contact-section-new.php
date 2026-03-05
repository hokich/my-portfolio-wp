<?php

/**
 * Title: Contact Us Section New
 * Slug: fotawp/contact-section-new
 * Categories: fotawp-contacts
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/new/formbg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($fotawp_images[0]) ?>","id":3918,"dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"120px","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3918" alt="" src="<?php echo esc_url($fotawp_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"fotawp-fade-up"} -->
                <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up" style="flex-basis:45%"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"4px"}},"textColor":"secondary","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Contact Us', 'fotawp') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"48px","lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"}},"textColor":"foregound-alt"} -->
                    <h1 class="wp-block-heading has-foregound-alt-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.4"><?php esc_html_e('Have Questions? Get in Touch!', 'fotawp') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px","bottom":"40px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:28px;margin-bottom:40px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"medium"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('2345 Beach,Rd', 'fotawp') ?><br><?php esc_html_e('Metrocity USA, HWY 1235', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"medium"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('+1 (000) 123-4567', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"medium"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('youremail@exampl.com', 'fotawp') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#3800D7","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","className":"fotawp-fade-left","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"54px","right":"54px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"background","textColor":"foreground"} -->
                <div class="wp-block-column is-vertically-aligned-center fotawp-fade-left has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="padding-top:40px;padding-right:54px;padding-bottom:40px;padding-left:54px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Send a Message', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:contact-form-7/contact-form-selector {"id":4031,"hash":"2420281","title":"Contact Form for Home","className":"fotahome-contact-form"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector fotahome-contact-form">[contact-form-7 id="2420281" title="Contact Form for Home"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->