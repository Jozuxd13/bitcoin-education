<?php

/**
 * Title: CTA Block
 * Slug: targetify/cta-block
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/cta_bg.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[0]) ?>","id":6302,"dimRatio":90,"overlayColor":"primary","minHeight":540,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6302" alt="" src="<?php echo esc_url($targetify_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"60px","lineHeight":"1.2"}},"className":"fotawp-flip-up"} -->
                <h1 class="wp-block-heading has-text-align-center fotawp-flip-up" style="font-size:60px;font-style:normal;font-weight:500;line-height:1.2"><?php esc_html_e('Looking for best agency to work together?', 'targetify') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"className":"fotawp-fade-up","fontSize":"medium"} -->
                <p class="has-text-align-center fotawp-fade-up has-medium-font-size" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'targetify') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"fotawp-slide-up","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"42px"}}}} -->
                <div class="wp-block-buttons fotawp-slide-up" style="margin-top:42px"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"},"border":{"radius":"80px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:80px;padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><?php esc_html_e('Schedule an Appointment', 'targetify') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->