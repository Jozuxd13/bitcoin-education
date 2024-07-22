<?php

/**
 * Title: Default Footer
 * Slug: targetify/footer-default
 * Categories: targetify-patterns, footer
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/payment_methods.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"sub-heading-color","textColor":"foregound-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-foregound-alt-color has-sub-heading-color-background-color has-text-color has-background" style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"80%"} -->
                <div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","textTransform":"none"}},"textColor":"primary","fontSize":"x-large"} -->
                    <h3 class="wp-block-heading has-primary-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px;text-transform:none"><?php esc_html_e('Targetify', 'targetify') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'targetify') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"},"margin":{"top":"48px"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:48px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                        <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"20%"} -->
                <div class="wp-block-column" style="flex-basis:20%"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Products', 'targetify') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":2}},"className":"is-style-list-style-no-bullet"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Cozy Blocks', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Cozy Essentials', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('CT Patterns', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('FotaWP', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Fotablog', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Fota Agency', 'targetify') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Company', 'targetify') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":2}},"className":"is-style-list-style-no-bullet"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('About Us', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Career', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Blog', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Policy', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Term &amp; Conditions', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Legal', 'targetify') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt","fontSize":"medium"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Downloads', 'targetify') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":2}},"className":"is-style-list-style-no-bullet"} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('IOS', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Android', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Mac', 'targetify') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Windows', 'targetify') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
        <p><?php esc_html_e('Proudly powered by WordPress | Theme: Targetify by CozyThemes.', 'targetify') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"fotawp-scrollto-top is-style-button-hover-white-bgcolor"} -->
    <div class="wp-block-button fotawp-scrollto-top is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'targetify') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->