<?php

/**
 * Title: Latest Post New
 * Slug: fotawp/latest-post-new
 * Categories: fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"120px","top":"120px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"fotawp-fade-up","style":{"spacing":{"padding":{"top":"0"},"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center fotawp-fade-up" style="padding-top:0"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"4px"}},"textColor":"primary","fontSize":"small"} -->
            <h6 class="wp-block-heading has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('BLOGS', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Explore Our', 'fotawp') ?><br><?php esc_html_e('Latest Articles', 'fotawp') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px","lineHeight":"1.5"}}} -->
            <p style="font-size:18px;font-style:normal;font-weight:400;line-height:1.5"><?php esc_html_e('Cras tincidunt tellus at mi tristique rhoncus. Etiam dapibus rutrum leo consectetur accumsan. Vivamus viverra ante turpis, dignissim condimentum elit egestas sit amet. Phasellus dignissim condimentum elit egestas sit amet.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:28px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","className":"is-style-button-hover-style-set-five","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"},"border":{"radius":"60px"}}} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-style-set-five" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:60px;padding-top:20px;padding-right:var(--wp--preset--spacing--70);padding-bottom:20px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"className":"fotawp-fade-up","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"68px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group fotawp-fade-up" style="margin-top:68px;padding-top:0;padding-bottom:0"><!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":"3"}} -->
            <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"300px","align":"wide","style":{"border":{"radius":"10px"},"color":{"duotone":"unset"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"left":"0","right":"0"},"blockGap":"0","margin":{"top":"28px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:28px;padding-right:0;padding-left:0"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-small"} /-->

                    <!-- wp:post-title {"level":3,"isLink":true,"className":"is-style-default","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"12px","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large"} /-->

                    <!-- wp:post-date {"className":"is-style-post-date-with-icon","style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foreground"} /-->

                    <!-- wp:post-excerpt {"excerptLength":21,"style":{"spacing":{"margin":{"top":"20px"}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->