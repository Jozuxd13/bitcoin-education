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

function create_books_cpt() {
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
add_action( 'init', 'create_books_cpt' );

// Hook into the 'add_meta_boxes' action to add a meta box to the 'books' post type
function add_book_meta_boxes() {
    add_meta_box(
        'book_details',             // ID of the meta box
        'Book Details',             // Title of the meta box
        'display_book_meta_box',    // Callback function to display the content of the meta box
        'books',                    // Post type where the meta box will be displayed
        'normal',                   // Context where the meta box will appear (normal, side, or advanced)
        'high'                      // Priority of the meta box
    );
}
add_action('add_meta_boxes', 'add_book_meta_boxes');

// Callback function to display the fields in the meta box
function display_book_meta_box($post) {
    // Retrieve existing values from post meta
    $title = get_post_meta($post->ID, 'book_title', true);
    $description = get_post_meta($post->ID, 'book_description', true);
    $image = get_post_meta($post->ID, 'book_image', true);
    $year = get_post_meta($post->ID, 'book_year', true);
    ?>
    <p>
        <label for="book_title">Title:</label>
        <input type="text" id="book_title" name="book_title" value="<?php echo esc_attr($title); ?>" />
    </p>
    <p>
        <label for="book_description">Description:</label>
        <textarea id="book_description" name="book_description"><?php echo esc_textarea($description); ?></textarea>
    </p>
    <p>
        <label for="book_image">Image URL:</label>
        <input type="text" id="book_image" name="book_image" value="<?php echo esc_url($image); ?>" />
    </p>
    <p>
        <label for="book_year">Publication Year:</label>
        <input type="text" id="book_year" name="book_year" value="<?php echo esc_attr($year); ?>" />
    </p>
    <?php
}

// Save the meta box data when the post is saved
function save_book_meta_box_data($post_id) {
    // Check if this is an autosave, if so, return
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if the user has permissions to save data
    if (!isset($_POST['book_title']) || !isset($_POST['book_description']) || !isset($_POST['book_image']) || !isset($_POST['book_year'])) {
        return;
    }

    // Sanitize and save the meta box data
    update_post_meta($post_id, 'book_title', sanitize_text_field($_POST['book_title']));
    update_post_meta($post_id, 'book_description', sanitize_textarea_field($_POST['book_description']));
    update_post_meta($post_id, 'book_image', esc_url_raw($_POST['book_image']));
    update_post_meta($post_id, 'book_year', sanitize_text_field($_POST['book_year']));
}
add_action('save_post', 'save_book_meta_box_data');

function books_shortcode() {
    $args = array(
        'post_type' => 'books',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    $output = '<div class="books-list">';
    while ($query->have_posts()) {
        $query->the_post();
        $title = get_post_meta(get_the_ID(), 'book_title', true);
        $description = get_post_meta(get_the_ID(), 'book_description', true);
        $image = get_post_meta(get_the_ID(), 'book_image', true);
        $year = get_post_meta(get_the_ID(), 'book_year', true);

        $output .= '<div class="book">';
        if ($image) {
            $output .= '<div class="book-thumbnail"><img src="' . esc_url($image) . '" alt="' . esc_attr($title) . '"></div>';
        }
        $output .= '<h2>' . esc_html($title) . '</h2>';
        $output .= '<div class="book-description">' . esc_html($description) . '</div>';
        $output .= '<p><strong>Year:</strong> ' . esc_html($year) . '</p>';
        $output .= '</div>';
    }
    $output .= '</div>';
    wp_reset_postdata();
    return $output;
}
add_shortcode('books', 'books_shortcode');
