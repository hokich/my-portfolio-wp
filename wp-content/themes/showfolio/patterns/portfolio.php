<?php

/**
 * Title: Portfolio
 * Slug: showfolio/portfolio
 * Categories: showfolio-patterns
 */
$showfolio_skills_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_skills_img = array(
    $showfolio_skills_url . 'assets/images/portfolio-1.jpg',
    $showfolio_skills_url . 'assets/images/portfolio-2.jpg',
    $showfolio_skills_url . 'assets/images/portfolio-3.jpg',
    $showfolio_skills_url . 'assets/images/portfolio-4.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1200px"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"80px"}}},"layout":{"type":"constrained","wideSize":"560px","justifyContent":"left","contentSize":"570px"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:80px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"background","fontSize":"medium","fontFamily":"open-sans"} -->
                    <p class="has-background-color has-text-color has-link-color has-open-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a href="#"><?php esc_html_e('/', 'showfolio') ?></a><?php esc_html_e('Portfolio', 'showfolio') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"52px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px;line-height:1.2"><?php esc_html_e('Have a look on some latest projects of mine', 'showfolio') ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-fotawp-boxshadow-hover","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"backgroundColor":"border-color","layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-hover has-border-color-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"},"blockGap":"0px"},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                    <div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('ReactJs', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Web Developer', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"20px"}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                        <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="margin-top:20px;font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e('Website design for a food / travel blogger', 'showfolio') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"id":1892,"scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1.1}}} -->
                    <figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo esc_url($showfolio_skills_img[0]) ?>" alt="" class="wp-image-1892" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-fotawp-boxshadow-hover","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"backgroundColor":"border-color","layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-hover has-border-color-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"},"blockGap":"0px"},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('ReactJs', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Web Developer', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"20px"}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                        <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="margin-top:20px;font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e('Website project for a business agency', 'showfolio') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"id":1927,"scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1.1}}} -->
                    <figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo esc_url($showfolio_skills_img[1]) ?>" alt="" class="wp-image-1927" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-fotawp-boxshadow-hover","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"backgroundColor":"border-color","layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-hover has-border-color-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"},"blockGap":"0px"},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('ReactJs', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Web Developer', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"20px"}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                        <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="margin-top:20px;font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e('Design studio / Agency Theme Website Project for FotaWP', 'showfolio') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"id":1928,"scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1.1}}} -->
                    <figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo esc_url($showfolio_skills_img[2]) ?>" alt="" class="wp-image-1928" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-fotawp-boxshadow-hover","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"backgroundColor":"border-color","layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-hover has-border-color-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"},"blockGap":"0px"},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('ReactJs', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-background-color has-background" style="border-radius:10px;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"foreground","textColor":"background","fontFamily":"open-sans"} -->
                                <p class="has-background-color has-foreground-background-color has-text-color has-background has-link-color has-open-sans-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:700"><?php esc_html_e('Web Developer', 'showfolio') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"20px"}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                        <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="margin-top:20px;font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e('News Agency fullstack web development', 'showfolio') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"id":1929,"scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1.1}}} -->
                    <figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo esc_url($showfolio_skills_img[3]) ?>" alt="" class="wp-image-1929" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;object-fit:cover" /></figure>
                    <!-- /wp:image -->
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