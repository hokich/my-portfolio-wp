<?php

/**
 * Title: Footer
 * Slug: showfolio/footer-default
 * Categories: footer, showfolio-patterns
 */
$showfolio_footer_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_footer_img = array(
    $showfolio_footer_url . 'assets/images/hero-section.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|background-alt","width":"1px"},"right":[],"bottom":[],"left":[]}},"textColor":"background","layout":{"type":"constrained","contentSize":"100%","wideSize":"100%"}} -->
<div class="wp-block-group has-background-color has-text-color" style="border-top-color:var(--wp--preset--color--background-alt);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","wideSize":"100%","contentSize":"1200px"}} -->
    <div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"200px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"426px"} -->
            <div class="wp-block-column" style="flex-basis:426px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:image {"id":47,"width":"156px","height":"156px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url($showfolio_footer_img[0]) ?>" alt="" class="wp-image-47" style="border-radius:100px;object-fit:cover;width:156px;height:156px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"238px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:238px"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained","wideSize":"238px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"32px"}},"textColor":"foregound-alt","fontFamily":"space-grotesk"} -->
                            <h2 class="wp-block-heading has-foregound-alt-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:32px"><?php esc_html_e('Robert Mathew', 'showfolio') ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}},"fontFamily":"open-sans"} -->
                            <p class="has-open-sans-font-family" style="font-size:20px"><?php esc_html_e('Web Developer', 'showfolio') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"5px"}}}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                                <!-- wp:social-link {"url":"#","service":"x"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"574px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:574px">
                <!-- wp:navigation {"fontSize":"medium","layout":{"type":"flex","justifyContent":"right"}} -->
                <!-- wp:home-link {"label":"Home"} /-->
                <!-- wp:page-list /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","fontFamily":"space-grotesk"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e('Proudly powered by WordPress and ', 'showfolio') ?><a href="https://cozythemes.com/fotawp/" target="_blank" rel="noreferrer noopener"><?php esc_html_e('FotaWP', 'showfolio') ?></a><?php esc_html_e(' | Product of ', 'showfolio') ?><a href="https://cozythemes.com/" target="_blank" rel="noopener"><?php esc_html_e('CozyThemes.', 'showfolio') ?></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->