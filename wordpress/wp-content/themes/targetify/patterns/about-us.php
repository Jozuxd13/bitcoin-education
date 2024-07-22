<?php

/**
 * Title: About Us Section
 * Slug: targetify/about-us
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/about_image.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"60px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"fotawp-flip-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-flip-up" style="flex-basis:45%"><!-- wp:image {"id":6957,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($targetify_images[0]) ?>" alt="" class="wp-image-6957" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:55%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"16px","right":"16px"}},"border":{"radius":"5px"}},"backgroundColor":"accent-lite","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-accent-lite-background-color has-background" style="border-radius:5px;padding-top:5px;padding-right:16px;padding-bottom:5px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('About Us', 'targetify') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"10px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:10px;margin-bottom:0"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1.3"><?php esc_html_e('We Are a Professional', 'targetify') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.3"}},"textColor":"primary","fontSize":"xx-large"} -->
                <h1 class="wp-block-heading has-primary-color has-text-color has-link-color has-xx-large-font-size" style="line-height:1.3"><?php esc_html_e('Digital Marketing Agency', 'targetify') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground","className":"fotawp-fade-up"} -->
            <p class="has-text-align-left fotawp-fade-up has-foreground-color has-text-color" style="line-height:1.5"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'targetify') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"className":"fotawp-flip-left"} -->
                <div class="wp-block-column fotawp-flip-left"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"44px"}}} -->
                    <h1 class="wp-block-heading has-text-align-left" style="font-size:44px"><?php esc_html_e('20+', 'targetify') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":4,"fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e('Years Of Experience', 'targetify') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"fotawp-flip-left"} -->
                <div class="wp-block-column fotawp-flip-left"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"44px"}}} -->
                    <h1 class="wp-block-heading has-text-align-left" style="font-size:44px"><?php esc_html_e('50+', 'targetify') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":4,"fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e('Experts Team', 'targetify') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"fotawp-flip-left"} -->
                <div class="wp-block-column fotawp-flip-left"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"44px"}}} -->
                    <h1 class="wp-block-heading has-text-align-left" style="font-size:44px"><?php esc_html_e('100+', 'targetify') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","level":4,"fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-left has-small-font-size"><?php esc_html_e('Projects Completed', 'targetify') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons {"className":"fotawp-slide-up","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"42px","bottom":"0"}}}} -->
            <div class="wp-block-buttons fotawp-slide-up" style="margin-top:42px;margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"left":"40px","right":"40px","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px"><?php esc_html_e('Discover More', 'targetify') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->