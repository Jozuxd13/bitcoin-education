<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function targetify_scripts()
{
    // enqueue parent style
    wp_enqueue_style('targetify-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'targetify_scripts');

if (!function_exists('targetify_excerpt_limit')) {
    function targetify_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'targetify_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since targetify 1.0.0
 *
 * @return void
 */
function targetify_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'targetify-patterns' => array('label' => __('Targetify Patterns', 'targetify'))
    );

    $block_pattern_categories = apply_filters('targetify_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'targetify_register_pattern_category', 9);
