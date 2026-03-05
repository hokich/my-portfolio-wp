<?php

/**
 * Title: Header Minimal
 * Slug: fotawp/header-minimal
 * Categories: header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
  <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:site-logo {"width":50,"style":{"color":{"duotone":"unset"}}} /-->

      <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
    <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
      <!-- wp:home-link {"label":"Home"} /-->

      <!-- wp:page-list /-->
      <!-- /wp:navigation -->

      <!-- wp:group {"metadata":{"name":"Fotawp Search Modal"},"className":"fotawp-search-modal","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group fotawp-search-modal"><!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","className":"fotawp-search-button","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"fontSize":"small"} -->
          <div class="wp-block-button has-custom-font-size fotawp-search-button has-small-font-size"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">Search</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:group {"className":"fotawp-search-content","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group fotawp-search-content" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":760,"className":"search-modal-cover","layout":{"type":"constrained","contentSize":"970px"}} -->
          <div class="wp-block-cover search-modal-cover" style="min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search this site...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none","radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"background","textColor":"primary"} /-->

              <!-- wp:html -->
              <button class="fotawp-search-close" tabindex="3">x</button>
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