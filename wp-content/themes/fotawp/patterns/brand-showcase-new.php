<?php

/**
 * Title: Brands Logos Showcase New
 * Slug: fotawp/brand-showcase-new
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_brands_logo = array(
    $fotawp_url . 'assets/images/new/logo_1.png',
    $fotawp_url . 'assets/images/new/logo_2.png',
    $fotawp_url . 'assets/images/new/logo_3.png',
    $fotawp_url . 'assets/images/new/logo_4.png',
    $fotawp_url . 'assets/images/new/logo_5.png',
    $fotawp_url . 'assets/images/new/logo_6.png',
);
?>
<!-- wp:group {"className":"fotawp-zoom-in-up","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center","contentSize":"1180px"}} -->
<div class="wp-block-group fotawp-zoom-in-up has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"60px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
        <h5 class="wp-block-heading has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Trusted by 20,000+ Professionals', 'fotawp') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center","className":"fotawp-brands-logos is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"top":"64px","right":"0"},"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50"}}}} -->
        <figure class="wp-block-gallery aligncenter has-nested-images columns-6 fotawp-brands-logos is-style-default" style="margin-top:64px;margin-right:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:image {"id":3626,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[0]) ?>" alt="" class="wp-image-3626" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":3634,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[1]) ?>" alt="" class="wp-image-3634" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":3624,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[2]) ?>" alt="" class="wp-image-3624" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":3627,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[3]) ?>" alt="" class="wp-image-3627" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":3629,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[4]) ?>" alt="" class="wp-image-3629" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":3625,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fotawp_brands_logo[5]) ?>" alt="" class="wp-image-3625" /></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->