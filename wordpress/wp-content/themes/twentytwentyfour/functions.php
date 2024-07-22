<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

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

