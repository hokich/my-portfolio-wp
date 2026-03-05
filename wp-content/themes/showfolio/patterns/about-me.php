<?php

/**
 * Title: About Me
 * Slug: showfolio/about-me
 * Categories: showfolio-patterns
 */
$showfolio_about_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_about_img = array(
    $showfolio_about_url . 'assets/images/about-1.jpg',
    $showfolio_about_url . 'assets/images/about-2.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":"1135px"}},"backgroundColor":"background-alt","layout":{"type":"constrained","wideSize":"100%","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="min-height:1135px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"80px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"bottom":"180px"}}}} -->
        <div class="wp-block-column" style="padding-bottom:180px"><!-- wp:group {"className":"showfolio-move-top","layout":{"type":"constrained"}} -->
            <div class="wp-block-group showfolio-move-top"><!-- wp:group {"style":{"spacing":{"blockGap":"85px"}},"layout":{"type":"constrained","wideSize":"560px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":107,"width":"560px","height":"724px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"10px"}},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                    <figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_about_img[0]) ?>" alt="" class="wp-image-107" style="border-radius:10px;object-fit:cover;width:560px;height:724px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:80px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"background","fontSize":"medium","fontFamily":"open-sans"} -->
                    <p class="has-background-color has-text-color has-link-color has-open-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a href="#"><?php esc_html_e('/', 'showfolio') ?></a> <?php esc_html_e('My Story', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"52px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px"><?php esc_html_e('My first website design back in 2009', 'showfolio') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"18px"}},"textColor":"background"} -->
                    <p class="has-background-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames turpis pretium bibendum nisl est sagittis aliquam pretium nunc curabitur magna est in nulla id volutpat et venenatis at lacus.', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"180px"}}}} -->
        <div class="wp-block-column" style="padding-top:180px"><!-- wp:group {"className":"showfolio-move-bottom","layout":{"type":"constrained"}} -->
            <div class="wp-block-group showfolio-move-bottom"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:80px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"background","fontSize":"medium","fontFamily":"open-sans"} -->
                    <p class="has-background-color has-text-color has-link-color has-open-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a href="#"><?php esc_html_e('/', 'showfolio') ?></a> <?php esc_html_e('About me', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"52px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px"><?php esc_html_e('Why I built my career as a web developer', 'showfolio') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"18px"}},"textColor":"background"} -->
                    <p class="has-background-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames turpis pretium bibendum nisl est sagittis aliquam pretium nunc curabitur magna est in nulla id volutpat et venenatis at lacus.', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"85px"}},"layout":{"type":"constrained","wideSize":"560px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":137,"width":"560px","height":"724px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"10px"}},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                    <figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_about_img[1]) ?>" alt="" class="wp-image-137" style="border-radius:10px;object-fit:cover;width:560px;height:724px" /></figure>
                    <!-- /wp:image -->
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