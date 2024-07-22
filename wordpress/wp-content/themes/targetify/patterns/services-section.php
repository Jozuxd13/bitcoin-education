<?php

/**
 * Title:Services Section
 * Slug: targetify/services-section
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/icon_5.png',
    $targetify_url . 'assets/images/icon_6.png',
    $targetify_url . 'assets/images/icon_7.png',
    $targetify_url . 'assets/images/icon_8.png',
    $targetify_url . 'assets/images/icon_9.png',
    $targetify_url . 'assets/images/icon_10.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"5rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"fotawp-flip-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-flip-up" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Our Services', 'targetify') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","lineHeight":1.9}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:18px;line-height:1.9"><?php esc_html_e('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout.', 'targetify') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%","className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"0px","bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"12px","bottom":"12px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px"><?php esc_html_e('More Services', 'targetify') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"30px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7049,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[0]) ?>" alt="" class="wp-image-7049" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Business Strategy', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7050,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[1]) ?>" alt="" class="wp-image-7050" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Digital Marketing', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7051,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[2]) ?>" alt="" class="wp-image-7051" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('SEO', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0rem","left":"30px"},"margin":{"top":"30px"}}}} -->
    <div class="wp-block-columns" style="margin-top:30px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7052,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[3]) ?>" alt="" class="wp-image-7052" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Social Media Marketing', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7053,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[4]) ?>" alt="" class="wp-image-7053" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Ecommerce', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"10px"}},"className":"fotawp-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":7054,"width":"52px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"60px"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[5]) ?>" alt="" class="wp-image-7054" style="border-radius:60px;aspect-ratio:1;object-fit:cover;width:52px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}},"textColor":"heading-color"} -->
                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Web Application', 'targetify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->