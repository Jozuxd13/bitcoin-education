<?php

/**
 * Title: Featured Projects
 * Slug: targetify/featured-projects
 * Categories: targetify-patterns
 */
$targetify_url = trailingslashit(get_stylesheet_directory_uri());
$targetify_images = array(
    $targetify_url . 'assets/images/portfolio_1.jpg',
    $targetify_url . 'assets/images/portfolio_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"}},"className":"fotawp-flip-up"} -->
        <h2 class="wp-block-heading has-text-align-center fotawp-flip-up" style="font-size:48px"><?php esc_html_e('Featured Projects', 'targetify') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"fotawp-fade-up"} -->
        <p class="has-text-align-center fotawp-fade-up"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'targetify') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"className":"fotawp-zoom-in-up"} -->
        <div class="wp-block-column fotawp-zoom-in-up"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[0]) ?>","id":6256,"dimRatio":0,"minHeight":540,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"targetify-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left targetify-portfolio-box" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6256" alt="" src="<?php echo esc_url($targetify_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Web Application', 'targetify') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"fotawp-zoom-in-up"} -->
        <div class="wp-block-column fotawp-zoom-in-up"><!-- wp:cover {"url":"<?php echo esc_url($targetify_images[1]) ?>","id":6257,"dimRatio":0,"minHeight":540,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"targetify-portfolio-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left targetify-portfolio-box" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6257" alt="" src="<?php echo esc_url($targetify_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Mobile Application', 'targetify') ?></a></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->