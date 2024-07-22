<?php

/**
 * Title: Team Block
 * Slug: targetify/team-layout
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/team_1.jpg',
    $targetify_url . 'assets/images/team_2.jpg',
    $targetify_url . 'assets/images/team_3.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"6rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"fotawp-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group fotawp-fade-up"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="font-size:44px;font-style:normal;font-weight:600"><?php esc_html_e('Meet the Experts', 'targetify') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'targetify') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"30px"},"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column {"className":"fotawp-fade-up"} -->
        <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[0]) ?>","id":139,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"targetify-team-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center targetify-team-box" style="margin-top:0;margin-bottom:0;min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-139" alt="" src="<?php echo esc_url($targetify_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"primary","iconBackgroundColorValue":"#12a86b","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e('John Doe', 'targetify') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('CEO &amp; Founder', 'targetify') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-up"} -->
        <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[1]) ?>","id":144,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"className":"targetify-team-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center targetify-team-box" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-144" alt="" src="<?php echo esc_url($targetify_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"primary","iconBackgroundColorValue":"#12a86b","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e('Robert Peter', 'targetify') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
                    <p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('CTO', 'targetify') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-fade-up"} -->
        <div class="wp-block-column fotawp-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[2]) ?>","id":145,"dimRatio":0,"overlayColor":"heading-color","isUserOverlayColor":true,"minHeight":460,"contentPosition":"bottom center","isDark":false,"className":"targetify-team-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center targetify-team-box" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-145" alt="" src="<?php echo esc_url($targetify_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"primary","iconBackgroundColorValue":"#12a86b","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
                        <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"github"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e('Liyana Pinklet', 'targetify') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('HR Manager', 'targetify') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->