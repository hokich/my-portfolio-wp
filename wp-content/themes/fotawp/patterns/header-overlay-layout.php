<?php

/**
 * Title: Header Overlay Layout
 * Slug: fotawp/header-overlay-layout
 * Categories: header
 */
?>
<!-- wp:group {"metadata":{"name":"Overlay Header"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"position":{"type":""},"color":{"background":"#1d0f30"}},"className":"fotawp-overlay-header fotawp-sticky-header","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group fotawp-overlay-header fotawp-sticky-header has-background" style="background-color:#1d0f30;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Overlay Content Holder"},"className":"fota-overlay-content","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group fota-overlay-content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->
            <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"metadata":{"name":""},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
            <!-- wp:home-link {"label":"Home"} /-->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
            <!-- wp:group {"metadata":{"name":"Fotawp Search Modal"},"style":{"spacing":{"blockGap":"0"}},"className":"fotawp-search-modal","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group fotawp-search-modal"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"secondary","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"className":"fotawp-search-button","fontSize":"small"} -->
                    <div class="wp-block-button has-custom-font-size fotawp-search-button has-small-font-size"><a class="wp-block-button__link has-secondary-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e('Search', 'fotawp') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"fotawp-search-content","layout":{"type":"constrained","contentSize":"100%"}} -->
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