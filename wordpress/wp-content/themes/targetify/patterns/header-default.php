<?php

/**
 * Title: Default Header
 * Slug: targetify/header-default
 * Categories: targetify-patterns, header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|50","bottom":"10px","left":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

            <!-- wp:site-title {"level":3,"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","textTransform":"none","lineHeight":"1.1"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}},"color":{"text":"var:preset|color|primary"}}}},"fontSize":"x-large","fontFamily":"outfit"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"background-alt","overlayTextColor":"secondary","className":"storemate-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
        <!-- wp:page-list /-->
        <!-- /wp:navigation -->
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0px"},"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-buttons" style="margin-top:0px"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"typography":{"fontSize":"18px"},"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"13px","bottom":"13px"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:13px;padding-right:var(--wp--preset--spacing--60);padding-bottom:13px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Work with Us', 'targetify') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->