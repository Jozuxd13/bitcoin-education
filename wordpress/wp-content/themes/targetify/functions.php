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
      $output = '<div class="card-container">';
  
      while ($books_query->have_posts()) {
        $books_query->the_post();
        $title = get_the_title();
        $description = get_field('description');
        $year = get_field('year_of_publication');
        $author = get_field('author');
        $image = get_field('image');
  
        $output .= '<div class="book">';
        $output .= '<div class="row">';
        if ($image) {
          $output .= '<div class="book-image"><img src="' . esc_url($image['url']) . '" alt="' . esc_attr($title) . '"></div>';
        }
        $output .= '<div class="card-content">';
        if ($title) {
          $output .= '<p class="card-title">' . esc_html($title) . '</p>';
        }
        if ($author) {
          $output .= '<p class="card-author">' . esc_html($author) . '</p>';
        }
        if ($year) {
          $output .= '<p class="card-year">' . esc_html($year) . '</p>';
        }
        if ($description) {
          $output .= '<p class="card-description">' . esc_html($description) . '</p>';
        }
        $output .= '</div>';
        $output .= '</div>';
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

function custom_shortcode_styles() {
    echo '
    <style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 0 auto;
    }

    .card {
        display: flex;
        flex-direction: row;
        width: 80%;
        max-width: 600px;
        margin: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-image {
        width: 123px;
        height: 198px;
        margin-right: 20px;
    }

    .card-content {
        flex: 1;
        padding: 10px;
    }

    .card-title {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 10px;
        color: #12A86B;
    }

    .card-author, .card-year {
        font-size: 1em;
        color: #666;
        margin-bottom: 5px;
    }

    .card-description {
        font-size: 1em;
        line-height: 1.5;
    }

    @media (max-width: 246px) {
        .card {
            flex-direction: column; 
        }

        .card-image {
            width: 60%; 
            margin-right: 0;
        }

        .card-content {
            margin-top: 20px; 
        }
    }
    </style>
    ';
}
add_action('wp_head', 'custom_shortcode_styles');

#API data
function get_bitcoin_price() {
    $response = wp_remote_get('https://mempool.space/api/v1/prices');
    if (is_wp_error($response)) {
        return 'Error fetching price.';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (isset($data['USD'])) {
        return number_format($data['USD'],2);
    }

    return 'Price not available.';
}

#register a custom sidebar
function register_custom_sidebar() {
    register_sidebar(array(
        'name'          => 'Bitcoin Price Sidebar',
        'id'            => 'bitcoin_price_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_custom_sidebar');

#To create a Widget
class Bitcoin_Price_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'bitcoin_price_widget',
            __('Bitcoin Price Widget', 'text_domain'),
            array('description' => __('Displays the current Bitcoin price', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo '<p>Current Bitcoin Price: $' . get_bitcoin_price() . '</p>';
        echo $args['after_widget'];
    }
}

function register_bitcoin_price_widget() {
    register_widget('Bitcoin_Price_Widget');
}
add_action('widgets_init', 'register_bitcoin_price_widget');

function bitcoin_price_widget_styles() {
    echo '
    <style>
    .widget {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center; /* Centra el texto del widget */
    }
    .widget p {
        font-size: 18px;
    }
    @media (max-width: 768px) {
        .widget p {
            font-size: 20px;
        }
    }
    @media (max-width: 480px) {
        .widget p {
            font-size: 16px;
        }
    }
    </style>
    ';
}
add_action('wp_head', 'bitcoin_price_widget_styles');



