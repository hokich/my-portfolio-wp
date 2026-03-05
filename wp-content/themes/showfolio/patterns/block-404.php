<?php

/**
 * Title: 404 Block
 * Slug: showfolio/block-404
 * Categories: showfolio-patterns
 */
$showfolio_404_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_404_img = array(
    $showfolio_404_url . 'assets/images/404.png'
);
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","fontSize":"xxxx-large","layout":{"type":"constrained","contentSize":"860px"}} -->
    <div class="wp-block-group has-background-alt-background-color has-background has-xxxx-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isUserOverlayColor":true,"minHeight":400,"isDark":false,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}}} -->
        <div class="wp-block-cover is-light" style="padding-bottom:var(--wp--preset--spacing--80);min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1454,"width":"308px","height":"146px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":["#C3CAD5","#6B00D6"]}}} -->
                    <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($showfolio_404_img[0]) ?>" alt="" class="wp-image-1454" style="width:308px;height:146px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:300;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('OOPS! Page Not Found!', 'showfolio') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                <h3 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php esc_html_e('Helpful Links', 'showfolio') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e("Something went wrong! We couldn't find the page you were looking for. But don't worry, we've got some other Links that might be helpful:", 'showfolio') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
            <div class="wp-block-column has-foregound-alt-color has-text-color has-link-color"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                <h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Pages', 'showfolio') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:page-list {"className":"is-style-fotawp-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
            <div class="wp-block-column has-foregound-alt-color has-text-color has-link-color"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php esc_html_e('Categories', 'showfolio') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"textColor":"foregound-alt"} -->
            <div class="wp-block-column has-foregound-alt-color has-text-color has-link-color" style="padding-top:0;padding-bottom:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignfull" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <h4 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Latest Posts', 'showfolio') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":31,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
                <div class="wp-block-query alignfull"><!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
                    <!-- wp:post-title {"level":5,"isLink":true,"className":"is-style-title-hover-secondary-color","style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"25px"}}},"textColor":"contrast","fontSize":"medium"} /-->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->