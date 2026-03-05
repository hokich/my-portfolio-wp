<?php

/**
 * Title: Default Sidebar Block
 * Slug: showfolio/sidebar-template
 * Categories: showfolio-patterns
 */
$showfolio_sidebar_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_sidebar_img = array(
    $showfolio_sidebar_url . '/assets/images/pattern_sidebar.jpg'
)
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"2px","width":"1px"}},"borderColor":"background-alt","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-background-alt-border-color" style="border-width:1px;border-radius:2px;margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:image {"align":"left","id":631,"width":100,"height":200,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
            <figure class="wp-block-image alignleft size-full is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_sidebar_img[0])  ?>" alt="" class="wp-image-631" style="border-radius:50%" width="100" height="200" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"large"} -->
            <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('Alexa Liv', 'showfolio') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"x-small"} -->
            <p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e('1.5M Followers', 'showfolio') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Check out our new font generator and level up your social bios. Need more? Head over to Glyphy for all the fancy fonts and cool symbols you could ever imagine.', 'showfolio') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Follow', 'showfolio') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"2px","width":"1px"}},"borderColor":"primary","fontSize":"small"} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background-alt","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php esc_html_e('Latest Posts', 'showfolio') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"10px"}},"backgroundColor":"background-alt","layout":{"inherit":false}} -->
                <div class="wp-block-group has-background-alt-background-color has-background" style="border-radius:10px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"90px"} -->
                        <div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"height":"90px","style":{"border":{"radius":"5px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
                                <div class="wp-block-group has-x-small-font-size" style="padding-bottom:0"><!-- wp:post-date {"fontSize":"xx-small"} /-->

                                    <!-- wp:paragraph -->
                                    <p>.</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:post-author-name {"fontSize":"xx-small"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#262424"}}},"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400","fontSize":"18px"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background-alt","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php esc_html_e('Categories', 'showfolio') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background-alt","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php esc_html_e('Pages', 'showfolio') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:page-list {"className":"is-style-fotawp-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background-alt","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading"><?php esc_html_e('Tags', 'showfolio') ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:tag-cloud /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->