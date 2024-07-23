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

function CPT_books() {
    $labels = array(
        'name'                  => __( 'Books' ),
        'singular_name'         => __( 'Book' ),
        'menu_name'             => __( 'Books' ),
        'name_admin_bar'        => __( 'Book' ),
        'add_new'               => __( 'Add New' ),
        'add_new_item'          => __( 'Add New Book' ),
        'new_item'              => __( 'New Book' ),
        'edit_item'             => __( 'Edit Book' ),
        'view_item'             => __( 'View Book' ),
        'all_items'             => __( 'All Books' ),
        'search_items'          => __( 'Search Books' ),
        'parent_item_colon'     => __( 'Parent Books:' ),
        'not_found'             => __( 'No books found.' ),
        'not_found_in_trash'    => __( 'No books found in Trash.' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'books' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true, // Activa el soporte para la API REST de WordPress
    );

    register_post_type( 'books', $args );
}
add_action( 'init', 'CPT_books' );

function display_books_shortcode() {
    $args = array(
        'post_type' => 'books',
        'posts_per_page' => -1,
    );
    $books_query = new WP_Query($args);

    if ($books_query->have_posts()) {
        $output = '<div class="books-container">';

        while ($books_query->have_posts()) {
            $books_query->the_post();
            $title = get_the_title('title');
            $description = get_field('description'); 
            $year = get_field('year_of_publication'); 
            $author = get_field('author'); 
            $image = get_field('image'); 

            $output .= '<div class="book">';
            if ($image) {
                $output .= '<div class="book-image"><img src="' . esc_url($image['url']) . '" alt="' . esc_attr($title) . '"></div>';
            }
            if ($title) {
                $output .= '<h2 class="book-title">' . esc_html($title) . '</h2>';
            }
            if ($author) {
                $output .= '<h2 class="book-author">' . esc_html($author) . '</h2>';
            }
            if ($year) {
                $output .= '<p class="book-year">' . esc_html($year) . '</p>';
            }
            if ($description) {
                $output .= '<p class="book-description">' . esc_html($description) . '</p>';
            }
            $output .= '</div>';
        }

        $output .= '</div>';
    } else {
        $output = '<p>No books found.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('display_books', 'display_books_shortcode');

