<?php

/**
 * Title: Testimonial Block
 * Slug: showfolio/testimonial-block
 * Categories: showfolio-patterns
 */
$showfolio_testimonial_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_testimonial_img = array(
    $showfolio_testimonial_url . 'assets/images/testimonial.jpg',
    $showfolio_testimonial_url . 'assets/images/logo-1.png',
    $showfolio_testimonial_url . 'assets/images/logo-2.png',
    $showfolio_testimonial_url . 'assets/images/logo-3.png',
    $showfolio_testimonial_url . 'assets/images/logo-4.png',
    $showfolio_testimonial_url . 'assets/images/logo-5.png'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"}} -->
    <div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"20px","left":"120px"}}}} -->
            <div class="wp-block-columns alignwide"><!-- wp:column {"width":"402px","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column" style="flex-basis:402px"><!-- wp:image {"id":1943,"width":"402px","height":"518px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
                    <figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_testimonial_img[0]) ?>" alt="" class="wp-image-1943" style="border-radius:10px;object-fit:cover;width:402px;height:518px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"675px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:675px"><!-- wp:group {"style":{"spacing":{"blockGap":"64px"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large","fontFamily":"space-grotesk"} -->
                        <p class="has-background-color has-text-color has-link-color has-space-grotesk-font-family has-large-font-size"><?php esc_html_e('“We are constantly searching for novelties for the footwear world, offering our knowledge to extreme processes and level-up the technical level of the materials”', 'showfolio') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                            <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family"><?php esc_html_e('John Doe', 'showfolio') ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"fontSize":"large","fontFamily":"open-sans"} -->
                            <p class="has-open-sans-font-family has-large-font-size"><?php esc_html_e('CEO & Founder', 'showfolio') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"fontSize":"large","fontFamily":"open-sans"} -->
                            <p class="has-open-sans-font-family has-large-font-size"><?php esc_html_e('Doe Industry', 'showfolio') ?></p>
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

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"80px","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"style":"none","width":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:80px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center","className":"fotawp-brands-logos is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"64px","right":"0"},"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}}} -->
            <figure class="wp-block-gallery aligncenter has-nested-images columns-6 fotawp-brands-logos is-style-default" style="margin-top:64px;margin-right:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:image {"id":1980,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($showfolio_testimonial_img[1]) ?>" alt="" class="wp-image-1980" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":1981,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($showfolio_testimonial_img[2]) ?>" alt="" class="wp-image-1981" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":1982,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($showfolio_testimonial_img[3]) ?>" alt="" class="wp-image-1982" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":1983,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($showfolio_testimonial_img[4]) ?>" alt="" class="wp-image-1983" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":1984,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($showfolio_testimonial_img[5]) ?>" alt="" class="wp-image-1984" /></figure>
                <!-- /wp:image -->
            </figure>
            <!-- /wp:gallery -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->