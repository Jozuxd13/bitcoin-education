<?php

/**
 * Title:Latest Articles Section
 * Slug: targetify/latest-articles
 * Categories: targetify-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"var:preset|spacing|40","bottom":"100px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1240px","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%","className":"fotawp-flip-up"} -->
        <div class="wp-block-column is-vertically-aligned-center fotawp-flip-up" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Latest Articles &amp; Insights', 'targetify') ?></h1>
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
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:12px;padding-right:40px;padding-bottom:12px;padding-left:40px"><?php esc_html_e('More Articles', 'targetify') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
    <div class="wp-block-group" style="margin-top:60px"><!-- wp:query {"queryId":29,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":2}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"className":"fotawp-fade-up","layout":{"inherit":false}} -->
            <div class="wp-block-group fotawp-fade-up" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":90,"isUserOverlayColor":true,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover" style="border-radius:12px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.2"}},"textColor":"foreground","className":"is-style-default","fontSize":"xx-large"} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"x-small"} -->
                        <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

                            <!-- wp:paragraph -->
                            <p>.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-author-name /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"className":"fotawp-fade-up","layout":{"inherit":false}} -->
            <div class="wp-block-group fotawp-fade-up" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"240px","style":{"border":{"radius":"12px"}}} /-->

                <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-categories-background-with-round","fontSize":"x-small"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"0"}},"typography":{"fontSize":"24px","lineHeight":"1.2"}},"textColor":"foreground","className":"is-style-default"} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
                <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

                    <!-- wp:paragraph -->
                    <p>.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author-name /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"moreText":"","excerptLength":21,"style":{"typography":{"fontSize":"16px"}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->