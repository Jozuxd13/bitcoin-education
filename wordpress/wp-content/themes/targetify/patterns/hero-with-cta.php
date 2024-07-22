<?php

/**
 * Title: Hero Section with CTA
 * Slug: targetify/hero-with-cta
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/banner_bg.png',
    $targetify_url . 'assets/images/about_img.jpg',
    $targetify_url . 'assets/images/icon_1.png',
    $targetify_url . 'assets/images/icon_2.png',
    $targetify_url . 'assets/images/icon_3.png',
    $targetify_url . 'assets/images/icon_4.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url($targetify_images[0]) ?>","id":6890,"source":"file","title":"banner_bg-3-2"}},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"60px","bottom":"420px"}}},"className":"targetify-banner-section","layout":{"type":"constrained","contentSize":"1240px"}} -->
    <div class="wp-block-group targetify-banner-section" style="padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:420px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"fotawp-slide-up"} -->
            <div class="wp-block-column is-vertically-aligned-center fotawp-slide-up"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"16px","right":"16px"}},"border":{"radius":"5px"}},"backgroundColor":"accent-lite","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-accent-lite-background-color has-background" style="border-radius:5px;padding-top:5px;padding-right:16px;padding-bottom:5px;padding-left:16px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
                        <h5 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Award Winning Agency', 'targetify') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"10px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:10px;margin-bottom:0"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.3"}},"textColor":"primary"} -->
                    <h1 class="wp-block-heading has-primary-color has-text-color has-link-color" style="line-height:1.3"><?php esc_html_e('Digital Marketing', 'targetify') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"}}} -->
                    <h1 class="wp-block-heading" style="line-height:1.3"><?php esc_html_e('And Web Solutions', 'targetify') ?></h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel at risus arcu porta sociis hac egestas eu. Nulla feugiat aliquam rutrum aliquam neque eu nunc consectetur sit amet, sectetur adipiscing elit.', 'targetify') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"12px","bottom":"12px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px"><?php esc_html_e('Work With Us', 'targetify') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"secondary","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"12px","bottom":"12px"}}},"className":"is-style-button-hover-primary-bgcolor"} -->
                    <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-radius:0px;padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px"><?php esc_html_e('Learn More', 'targetify') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","className":"fotawp-zoom-in-up"} -->
            <div class="wp-block-column is-vertically-aligned-center fotawp-zoom-in-up"><!-- wp:image {"id":6892,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right","style":{"border":{"radius":{"topLeft":"100px","bottomRight":"100px"}}},"className":"is-style-fotawp-boxshadow-medium"} -->
                <figure class="wp-block-image alignright size-full has-custom-border is-style-fotawp-boxshadow-medium"><img src="<?php echo esc_url($targetify_images[1]) ?>" alt="" class="wp-image-6892" style="border-top-left-radius:100px;border-bottom-right-radius:100px;object-fit:cover" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1240px"}} -->
    <div class="wp-block-group has-transparent-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"border":{"radius":"12px"},"spacing":{"margin":{"top":"0px"},"padding":{"right":"40px","left":"40px","top":"40px","bottom":"60px"}}},"backgroundColor":"background-alt","className":"banner-cta","layout":{"type":"constrained","contentSize":"1240px"}} -->
        <div class="wp-block-group banner-cta has-background-alt-background-color has-background" style="border-radius:12px;min-height:0px;margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"fotawp-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group fotawp-fade-up"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
                <h2 class="wp-block-heading has-text-align-center" style="font-size:40px"><?php esc_html_e('Why Choose Us', 'targetify') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel at risus arcu porta sociis hac egestas eu. Nulla feugiat aliquam rutrum aliquam neque eu nunc consectetur sit amet, sectetur adipiscing elit.', 'targetify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
            <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"className":"fotawp-fade-up"} -->
                <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7041,"width":"84px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[2]) ?>" alt="" class="wp-image-7041" style="border-radius:100px;width:84px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:28px"><?php esc_html_e('Consulting', 'targetify') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist hac egestas eu.', 'targetify') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"fotawp-fade-up"} -->
                <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7042,"width":"84px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[3]) ?>" alt="" class="wp-image-7042" style="border-radius:100px;width:84px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:28px"><?php esc_html_e('Marketing', 'targetify') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist hac egestas eu.', 'targetify') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"fotawp-fade-up"} -->
                <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7043,"width":"84px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[4]) ?>" alt="" class="wp-image-7043" style="border-radius:100px;width:84px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:28px"><?php esc_html_e('Design', 'targetify') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist hac egestas eu.', 'targetify') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"fotawp-fade-up"} -->
                <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-fotawp-boxshadow has-background-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7044,"width":"84px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($targetify_images[5]) ?>" alt="" class="wp-image-7044" style="border-radius:100px;width:84px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"28px"}}},"fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:28px"><?php esc_html_e('Development', 'targetify') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                        <p class="has-text-align-center has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum vel at risus arcu porta sociist hac egestas eu.', 'targetify') ?></p>
                        <!-- /wp:paragraph -->
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
</div>
<!-- /wp:group -->