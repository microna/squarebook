<?php

function my_custom_styles() {
    wp_enqueue_style('normalize-style', get_stylesheet_directory_uri() . '/normalize.css');
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'my_custom_styles');


//scripts function
function my_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');


function menu_top() {
    register_nav_menu('menu-top', __( 'menu top' ));
}
add_action('init', 'menu_top');

add_theme_support( 'post-thumbnails' );

// Register Custom Post Type: Invest Items
function create_invest_item_cpt() {
    $labels = array(
        'name'                  => _x( 'Invest Items', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Invest Item', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Invest Items', 'text_domain' ),
        'name_admin_bar'        => __( 'Invest Item', 'text_domain' ),
        'archives'              => __( 'Invest Item Archives', 'text_domain' ),
        'attributes'            => __( 'Invest Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Invest Item:', 'text_domain' ),
        'all_items'             => __( 'All Invest Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Invest Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Invest Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Invest Item', 'text_domain' ),
        'update_item'           => __( 'Update Invest Item', 'text_domain' ),
        'view_item'             => __( 'View Invest Item', 'text_domain' ),
        'view_items'            => __( 'View Invest Items', 'text_domain' ),
        'search_items'          => __( 'Search Invest Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Invest Item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Invest Item', 'text_domain' ),
        'items_list'            => __( 'Invest Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Invest Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Invest Items list', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'Invest Item', 'text_domain' ),
        'description'           => __( 'Custom Post Type for Invest Items', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-chart-line',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type( 'invest', $args );
}

add_action( 'init', 'create_invest_item_cpt', 0 );





// Add this to your theme's functions.php file

/**
 * Fix Contact Form 7 AJAX loader image path
 */
add_action('wp_enqueue_scripts', 'fix_cf7_spinner', 20);
function fix_cf7_spinner() {
    // Only do this if Contact Form 7 is active
    if (function_exists('wpcf7_plugin_url')) {
        // Define CSS to fix the spinner path
        $css = '
        .wpcf7 .ajax-loader {
            background-image: url("' . wpcf7_plugin_url('assets/ajax-loader.gif') . '") !important;
        }';
        
        // Add inline CSS
        wp_add_inline_style('contact-form-7', $css);
    }
}

// Alternative: Completely replace the spinner with a CSS spinner
add_action('wp_head', 'replace_cf7_spinner_with_css');
function replace_cf7_spinner_with_css() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        ?>
<style type="text/css">
.wpcf7 .ajax-loader {
    background-image: none !important;
    width: 20px !important;
    height: 20px !important;
    margin: 0 0 0 4px !important;
    vertical-align: middle !important;

    /* CSS Spinner */
    border: 2px solid rgba(0, 0, 0, 0.1) !important;
    border-left: 2px solid #333 !important;
    border-radius: 50% !important;
    animation: cf7_spin 1s infinite linear !important;
}

@keyframes cf7_spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>
<?php
    }
}

// /**
//  * Replace empty hidden field with value in Contact Form 7
//  */
// add_filter('wpcf7_form_elements', function($content) {
//     if (is_singular('invest')) {
//         $item_slug = 'item-' . get_post_field('post_name', get_the_ID());
//         // Replace the empty hidden field with one containing the value
//         $content = str_replace(
//             '[hidden item-label]',
//             '<input type="hidden" name="item-label" value="' . esc_attr($item_slug) . '" />',
//             $content
//         );
//     }
//     return $content;
// });

// /**
//  * Set default value for item-label field
//  */
// add_filter('wpcf7_form_tag_data', function($data, $tag) {
//     if ($tag->name === 'item-label' && is_singular('invest')) {
//         $item_slug = 'item-' . get_post_field('post_name', get_the_ID());
//         error_log('CF7 Form Tag Data - Item Slug: ' . $item_slug);
//         return $item_slug;
//     }
//     return $data;
// }, 10, 2);


function add_page_slug_to_form() {
    global $post;
    if (isset($post)) {
        $slug = $post->post_name;
        ?>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var hiddenFields = document.querySelectorAll('input[name="item-label"]');
    hiddenFields.forEach(function(field) {
        field.value = '<?php echo esc_js($slug); ?>';
    });
});
</script>
<?php
    }
}
add_action('wp_footer', 'add_page_slug_to_form');


function add_form_submission_spinner() {
    ?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.wpcf7-form');

    forms.forEach(form => {
        const submitButton = form.querySelector('.wpcf7-submit');
        if (submitButton) {
            // Create spinner element
            const spinner = document.createElement('span');
            spinner.className = 'form-submission-spinner';
            submitButton.parentNode.insertBefore(spinner, submitButton.nextSibling);

            // Handle form submission
            form.addEventListener('submit', function() {
                form.classList.add('form-submitting');
            });

            // Handle form response
            document.addEventListener('wpcf7submit', function(event) {
                if (event.detail.contactFormId === form.querySelector('input[name="_wpcf7"]')
                    .value) {
                    form.classList.remove('form-submitting');
                }
            }, false);
        }
    });
});
</script>
<?php
}
add_action('wp_footer', 'add_form_submission_spinner');






?>