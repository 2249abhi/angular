<?php
//add theme support-abc
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
register_nav_menus(array(
    'warranty_sidebar' => 'Sidebar on Warranty layout',
));
require_once 'includes/class-walker-warranty-nav-menu.php';
require_once 'includes/MCAPI.php';
require_once 'includes/class-mailchimp.php';
if (function_exists('register_sidebar')) {
    register_sidebars(2, array('name' => 'Sidebar %d'));
}
add_image_size('guide-thumbnail', 140, 140);

//add svg upload support
function ue_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'ue_mime_types');
if (!function_exists('add_script_style')) {

    function add_script_style()
    {
        $page_template = get_post_meta(get_queried_object_id(), '_wp_page_template', true);
        /* Register & Enqueue Styles. */
        $stylesheet_directory = get_stylesheet_directory_uri();

        wp_enqueue_style('bootstrap', $stylesheet_directory . '/css/bootstrap.min.css');

        if ($page_template === 'tpl_guide.php') {
            wp_enqueue_style('theme-full-page', $stylesheet_directory . '/css/full-page.css');
            wp_enqueue_style('theme-guide', $stylesheet_directory . '/css/guide.css');
            wp_enqueue_style('theme-square-blue', $stylesheet_directory . '/css/square/blue.css');

            wp_enqueue_script('full-page', $stylesheet_directory . '/js/jquery.fullPage.js', array(), '1.0', true);
            wp_enqueue_script('icheck', $stylesheet_directory . '/js/icheck.js', array(), '1.0', true);
        }

        wp_enqueue_style('theme-font', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('theme-style', $stylesheet_directory . '/css/style.css');
        wp_enqueue_style('theme-style-responsive', $stylesheet_directory . '/css/responsive.css');
        wp_enqueue_style('theme-style-main', $stylesheet_directory . '/style.css');
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', '3.2.1', true);
        wp_enqueue_script('tether', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js', '1.2.4', true, array('jquery'));

        wp_enqueue_script('bootstrap-4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '4.0.0', true, array('tether', 'jquery'));


        wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js');

        wp_enqueue_script('jqueryvalidate', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js', array('jquery'), '1.16.0', true);

        wp_enqueue_script('jqueryvalidatemethod', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js', array('jquery'), '1.16.0', true);


        wp_enqueue_script('ue-scripts', $stylesheet_directory . '/js/ue-scripts.js', array('jquery'), '1.0', true);
        wp_localize_script('ue-scripts', 'ue_ajax', array(
            'url' => admin_url('admin-ajax.php')
        ));
    }

}
add_action('wp_enqueue_scripts', 'add_script_style', 10);

//add locales as taxonomy
function ue_taxonomies()
{
    register_taxonomy('ue_locales', array('ue_faqs', 'ue_products'), array(
        'labels' => array(
            'name' => 'Locales',
            'singular_name' => 'Locale',
            'all_items' => 'All locales',
            'edit_item' => 'Edit locale',
            'view_item' => 'View locale',
            'update_item' => 'Update locale',
            'add_new_item' => 'Add new locale',
            'new_item_name' => 'New Locale',
            'parent_item' => 'Parent',
            'parent_item_colon' => 'Parent:',
            'search_items' => 'Search locales',
            'not_found' => 'Locale not found'
        ),
        'show_admin_column' => true,
        'hierarchical' => true,
        'rewrite' => true
    ));
    register_taxonomy('ue_faq_types', array('ue_faqs'), array(
        'labels' => array(
            'name' => 'Support type',
            'singular_name' => 'Locale',
            'all_items' => 'All locales',
            'edit_item' => 'Edit locale',
            'view_item' => 'View locale',
            'update_item' => 'Update locale',
            'add_new_item' => 'Add new locale',
            'new_item_name' => 'New Locale',
            'parent_item' => 'Parent',
            'parent_item_colon' => 'Parent:',
            'search_items' => 'Search locales',
            'not_found' => 'Locale not found'
        ),
        'show_admin_column' => true,
        'hierarchical' => true,
        'rewrite' => true
    ));
}

add_action('init', 'ue_taxonomies', 0);

//add FAQ section as Post type
function ue_post_types()
{
    register_post_type('ue_faqs', array(
        'labels' => array(
            'name' => 'FAQs',
            'singular_name' => 'FAQ',
            'add_new' => 'New FAQ',
            'add_new_item' => 'Add new FAQ',
            'edit_item' => 'Edit FAQ',
            'new_item' => 'New FAQ',
            'view_item' => 'View FAQ',
            'view_items' => 'View FAQs',
            'search_items' => 'Search FAQs',
            'not_found' => 'No FAQ found',
            'not_found_in_trash' => 'No FAQs in trash',
            'all_items' => 'All FAQs',
            'archives' => 'FAQ archives',
            'insert_into_item' => 'Insert into FAQ',
            'uploaded_to_this_item' => 'Uploaded to this FAQ',
            'featured_image' => 'Featured image for this FAQ',
        ),
        'public' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-screenoptions',
        'rewrite' => array('slug' => 'faqs'),
    ));
    register_post_type('ue_products', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
            'add_new' => 'New product',
            'add_new_item' => 'Add new product',
            'edit_item' => 'Edit product',
            'new_item' => 'New product',
            'view_item' => 'View product',
            'view_items' => 'View products',
            'search_items' => 'Search products',
            'not_found' => 'No products found',
            'not_found_in_trash' => 'No productss in trash',
            'all_items' => 'All products',
            'archives' => 'Product archives',
            'insert_into_item' => 'Insert into products',
            'uploaded_to_this_item' => 'Uploaded to this product',
            'featured_image' => 'Product image',
        ),
        'public' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-products',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array(
            'slug' => 'products',
            'with_front' => false
        )
    ));

    register_post_type('ue_guide', array(
        'labels' => array(
            'name' => 'Guide Steps',
            'singular_name' => 'Guide Step',
            'add_new' => 'New Guide Step',
            'add_new_item' => 'Add guide step',
            'edit_item' => 'Edit guide step',
            'new_item' => 'New guide step',
            'view_item' => 'View guide step',
            'view_items' => 'View guide steps',
            'search_items' => 'Search guide steps',
            'not_found' => 'No guide step found',
            'not_found_in_trash' => 'No guide steps in trash',
            'all_items' => 'All guide steps',
            'archives' => 'Guide archives',
            'insert_into_item' => 'Insert into guide steps',
            'uploaded_to_this_item' => 'Uploaded to this guide step',
            'featured_image' => 'Guide Step image',
        ),
        'public' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
//        'rewrite' => array(
//            'slug' => 'guide'
//        )
    ));
}

add_action('init', 'ue_post_types');

/**
 * Add theme shortcodes
 */
add_shortcode('HOMEPAGE_URL', 'ue_homepage_url_callback');

function ue_homepage_url_callback()
{
    return '<a href="' . get_site_url() . '">HOME PAGE</a>';
}

//add class 'text-justify' to '<p>' tags. add_filter is called on needed templates
function ue_justify($content)
{
    return str_replace('<p', '<p class="text-justify"', $content);
}

add_filter('the_content', 'ue_support_hash');

function ue_support_hash($content)
{
    //create hash and unique id and add as hidden fields in support form
    $uuid = 'ue:' . ueUuid('1546058f-5a25-4334-85ae-e68f2a44bbaf', uniqid('', true));
    $shared_key = 'L0git3chU3';
    $hashed_value = md5($shared_key . $uuid);
    return str_replace(array('{ue-hash}', '{ue-uuid}'), array($hashed_value, $uuid), $content);
}

// login page customisation 
function my_login_logo()
{
    ?>
    <style type="text/css">
    #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
        height:83px;
        width:180px;
        background-size: 180px 83px;
        background-repeat: no-repeat;
        padding-bottom: 15px;
    }
</style>
<?php
}

add_action('login_enqueue_scripts', 'my_login_logo');

/**
 * add metaboxes
 */
function ue_register_meta_boxes()
{

    add_meta_box('search-placeholder-text', __('Search Placeholder Text', 'ue'), 'ue_display_callback_search_placeholder_text', array('page', 'ue_products'));

    add_meta_box('top-product-link-button-text', __('Top Product Link Button Text', 'ue'), 'ue_display_callback_top_product_link_button_text', array('page'));

    add_meta_box('bottom-product-link-button-text', __('Bottom Product Link Button Text', 'ue'), 'ue_display_callback_bottom_product_link_button_text', array('page'));

    add_meta_box('faqs-main-heading', __('Faqs Main Heading', 'ue'), 'ue_display_callback_faq_heading', array('page', 'ue_products'));

    add_meta_box('faqs-first-image-heading', __('Faqs First Image Text', 'ue'), 'ue_display_callback_faq_first_image_heading', array('page', 'ue_products'));

    add_meta_box('faqs-second-image-heading', __('Faqs Second Image Text', 'ue'), 'ue_display_callback_faq_second_image_heading', array('page', 'ue_products'));

    add_meta_box('faqs-third-image-heading', __('Faqs Third Image Text', 'ue'), 'ue_display_callback_faq_third_image_heading', array('page', 'ue_products'));

    add_meta_box('faqs-fourth-image-heading', __('Faqs Fourth Image Text', 'ue'), 'ue_display_callback_faq_fourth_image_heading', array('page', 'ue_products'));

    add_meta_box('faqs-sidebar-first-heading', __('Faqs Sidebar First Heading', 'ue'), 'ue_display_callback_faqs_sidebar_first_heading', array('page', 'ue_products'));

    add_meta_box('faqs-sidebar-playstore-heading', __('Sidebar Playstore Heading', 'ue'), 'ue_display_callback_faqs_sidebar_playstore_heading', array('page', 'ue_products'));

    add_meta_box('faqs-sidebar-playstore-para', __('Sidebar Playstore Para', 'ue'), 'ue_display_callback_faqs_sidebar_playstore_para', array('page', 'ue_products'));

    add_meta_box('guide-form', __('Guide Form contents', 'ue'), 'ue_display_callback_guide_form', 'ue_products');

    add_meta_box('lef-section', __('Left box contents', 'ue'), 'ue_display_callback', 'page');

    add_meta_box('right-section', __('Right box contents', 'ue'), 'ue_display_callback_right', 'page');

    add_meta_box('google-section', __('Play store link', 'ue'), 'ue_display_callback_google_link', 'ue_products', 'side');

    add_meta_box('apple-section', __('apple store link', 'ue'), 'ue_display_callback_apple_link', 'ue_products', 'side');

    add_meta_box('product-display-location', __('Product display location', 'ue'), 'ue_callback_product_location', 'ue_products', 'side');

    add_meta_box('product-selector', __('Product for this FAQ', 'ue'), 'ue_callback_product_selector', array('ue_faqs', 'ue_guide'), 'side', 'high');

    add_meta_box('product-selector-guide', __('Product for this Guide', 'ue'), 'ue_callback_product_selector', array('page'), 'side', 'high');

    add_meta_box('banner_title', __('Title to display on banner', 'ue'), 'ue_banner_title_callback', array('page'));

    add_meta_box('form_title', __('Form title to display on banner', 'ue'), 'ue_form_title_callback', array('page'));
}

add_action('add_meta_boxes', 'ue_register_meta_boxes');

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
//-------------Products page meta--------

function ue_display_callback_search_placeholder_text($post)
{
    $link = get_post_meta($post->ID, 'ue_page_search_placeholder_text', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_search_placeholder_text', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_top_product_link_button_text($post)
{
    $link = get_post_meta($post->ID, 'ue_page_top_product_link_button_text', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_top_product_link_button_text', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_bottom_product_link_button_text($post)
{
    $link = get_post_meta($post->ID, 'ue_page_bottom_product_link_button_text', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_bottom_product_link_button_text', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faq_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faq_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faq_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faq_first_image_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faq_first_image_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faq_first_image_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faq_second_image_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faq_second_image_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faq_second_image_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faq_third_image_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faq_third_image_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faq_third_image_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faq_fourth_image_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faq_fourth_image_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faq_fourth_image_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faqs_sidebar_first_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faqs_sidebar_first_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faqs_sidebar_first_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faqs_sidebar_playstore_heading($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faqs_sidebar_playstore_heading', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faqs_sidebar_playstore_heading', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_faqs_sidebar_playstore_para($post)
{
    $link = get_post_meta($post->ID, 'ue_page_faqs_sidebar_playstore_para', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_faqs_sidebar_playstore_para', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

//-------------Products page meta--------

function ue_display_callback_guide_form($post)
{
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');
    $title = get_post_meta($post->ID, 'ue_page_form_title', true);
    $para = get_post_meta($post->ID, 'ue_page_form_para', true);
    echo '<h2 style="padding:0"><strong>Title</strong></h2>';
    wp_editor($title, 'ue_page_form_title', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
    echo '<h2 style="padding:0"><strong>Paragraph</strong></h2>';

    wp_editor($para, 'ue_page_form_para', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback($post)
{
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');
    $title = get_post_meta($post->ID, 'ue_page_left_title', true);
    $content = get_post_meta($post->ID, 'ue_page_left_section', true);
    echo '<h2 style="padding:0"><strong>Title</strong></h2>';
    wp_editor($title, 'ue_page_left_title', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
    wp_editor($content, 'ue_page_left_section', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 3
    ));
}

function ue_display_callback_right($post)
{
    $title = get_post_meta($post->ID, 'ue_page_right_title', true);
    $content = get_post_meta($post->ID, 'ue_page_right_section', true);
    echo '<h2 style="padding:0"><strong>Title</strong></h2>';
    wp_editor($title, 'ue_page_right_title', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
    wp_editor($content, 'ue_page_right_section', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 3
    ));
}

function ue_display_callback_google_link($post)
{
    $link = get_post_meta($post->ID, 'ue_page_google_link', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');

    wp_editor($link, 'ue_page_google_link', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_display_callback_apple_link($post)
{
    $link = get_post_meta($post->ID, 'ue_page_apple_link', true);
    wp_editor($link, 'ue_page_apple_link', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_banner_title_callback($post)
{
    $banner_title = get_post_meta($post->ID, 'ue_banner_title', true);
    wp_editor($banner_title, 'ue_banner_title', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

function ue_form_title_callback($post)
{
    $banner_title = get_post_meta($post->ID, 'ue_form_title', true);
    wp_editor($banner_title, 'ue_form_title', array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => 1,
        'teeny' => true,
        'tinymce' => false,
        'quicktags' => false
    ));
}

/**
 * Product display location
 */
function ue_callback_product_location($post)
{
    $location = get_post_meta($post->ID, 'ue_product_location', true);
    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');
    ?>  
    <select name="ue_product_location">
        <option value="">--</option>
        <option <?php echo $location === 'top' ? 'selected' : '' ?> value="top">Top</option>
        <option <?php echo $location === 'bottom' ? 'selected' : '' ?> value="bottom">Bottom</option>
    </select>
    <?php
}

/**
 * Product display location
 */
function ue_callback_product_selector($post)
{
    $products = get_posts(array(
        'post_type' => 'ue_products',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'post_title'
    ));
    $value = get_post_meta($post->ID, 'products_selector', true);

    wp_nonce_field('ue_save_meta', 'ue_meta_nonce');
    ?>
    <select name="products_selector">
        <option value="">--</option>
        <?php
        if ($products): foreach ($products as $product):
            ?>
            <option <?php echo $product->ID == $value ? 'selected' : "" ?> value="<?php echo $product->ID ?>"><?php echo apply_filters('the_title', $product->post_title) ?></option>
            <?php
        endforeach;
    endif;
    ?>
</select>
<?php
}

    /**
     * Save meta box content.
     *
     * @param int $post_id Post ID
     */
    function ue_save_meta_box($post_id)
    {
        // Ignore if its autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        // return if nonce could not be validated
        if (!isset($_POST['ue_meta_nonce']) || !wp_verify_nonce($_POST['ue_meta_nonce'], 'ue_save_meta')) {
            return;
        }
        // if our current user can't edit this post, bail
        if (!current_user_can('edit_post')) {
            return;
        }
        if (isset($_POST['ue_page_form_title'])) {
            update_post_meta($post_id, 'ue_page_form_title', $_POST['ue_page_form_title']);
        }
        if (isset($_POST['ue_page_form_para'])) {
            update_post_meta($post_id, 'ue_page_form_para', $_POST['ue_page_form_para']);
        }
        if (isset($_POST['ue_page_left_title'])) {
            update_post_meta($post_id, 'ue_page_left_title', $_POST['ue_page_left_title']);
        }
        if (isset($_POST['ue_page_left_section'])) {
            update_post_meta($post_id, 'ue_page_left_section', $_POST['ue_page_left_section']);
        }
        if (isset($_POST['ue_page_right_title'])) {
            update_post_meta($post_id, 'ue_page_right_title', $_POST['ue_page_right_title']);
        }
        if (isset($_POST['ue_page_right_section'])) {
            update_post_meta($post_id, 'ue_page_right_section', $_POST['ue_page_right_section']);
        }
        if (isset($_POST['ue_product_location'])) {
            update_post_meta($post_id, 'ue_product_location', $_POST['ue_product_location']);
        }
        if (isset($_POST['products_selector'])) {
            update_post_meta($post_id, 'products_selector', $_POST['products_selector']);
        }
        if (isset($_POST['ue_banner_title'])) {
            update_post_meta($post_id, 'ue_banner_title', $_POST['ue_banner_title']);
        }
        if (isset($_POST['ue_form_title'])) {
            update_post_meta($post_id, 'ue_form_title', $_POST['ue_form_title']);
        }
        if (isset($_POST['ue_page_apple_link'])) {
            update_post_meta($post_id, 'ue_page_apple_link', $_POST['ue_page_apple_link']);
        }
        if (isset($_POST['ue_page_google_link'])) {
            update_post_meta($post_id, 'ue_page_google_link', $_POST['ue_page_google_link']);
        }
        if (isset($_POST['ue_page_search_placeholder_text'])) {
            update_post_meta($post_id, 'ue_page_search_placeholder_text', $_POST['ue_page_search_placeholder_text']);
        }
        if (isset($_POST['ue_page_top_product_link_button_text'])) {
            update_post_meta($post_id, 'ue_page_top_product_link_button_text', $_POST['ue_page_top_product_link_button_text']);
        }
        if (isset($_POST['ue_page_bottom_product_link_button_text'])) {
            update_post_meta($post_id, 'ue_page_bottom_product_link_button_text', $_POST['ue_page_bottom_product_link_button_text']);
        }

//-------------Products page meta--------

        if (isset($_POST['ue_page_faq_heading'])) {
            update_post_meta($post_id, 'ue_page_faq_heading', $_POST['ue_page_faq_heading']);
        }
        if (isset($_POST['ue_page_faq_first_image_heading'])) {
            update_post_meta($post_id, 'ue_page_faq_first_image_heading', $_POST['ue_page_faq_first_image_heading']);
        }
        if (isset($_POST['ue_page_faq_second_image_heading'])) {
            update_post_meta($post_id, 'ue_page_faq_second_image_heading', $_POST['ue_page_faq_second_image_heading']);
        }

        if (isset($_POST['ue_page_faq_third_image_heading'])) {
            update_post_meta($post_id, 'ue_page_faq_third_image_heading', $_POST['ue_page_faq_third_image_heading']);
        }

        if (isset($_POST['ue_page_faq_fourth_image_heading'])) {
            update_post_meta($post_id, 'ue_page_faq_fourth_image_heading', $_POST['ue_page_faq_fourth_image_heading']);
        }

        if (isset($_POST['ue_page_faqs_sidebar_first_heading'])) {
            update_post_meta($post_id, 'ue_page_faqs_sidebar_first_heading', $_POST['ue_page_faqs_sidebar_first_heading']);
        }

        if (isset($_POST['ue_page_faqs_sidebar_playstore_heading'])) {
            update_post_meta($post_id, 'ue_page_faqs_sidebar_playstore_heading', $_POST['ue_page_faqs_sidebar_playstore_heading']);
        }

        if (isset($_POST['ue_page_faqs_sidebar_playstore_para'])) {
            update_post_meta($post_id, 'ue_page_faqs_sidebar_playstore_para', $_POST['ue_page_faqs_sidebar_playstore_para']);
        }

//-------------Products page meta--------
    }

    add_action('save_post', 'ue_save_meta_box');
// get current language
//$GLOBALS['q_config']['language']

    /**
     * Helper function to generate hash
     */
    function ueUuid($nameSpace, $name)
    {
        $result = preg_match('/^\{?[0-9a-f]{8}\-?[0-9a-f]{4}\-?[0-9a-f]{4}\-?' . '[0-9a-f]{4}\-?[0-9a-f]{12}\}?$/i', $nameSpace) === 1;

        if (!$result) {
            return;
        }
        $nhex = str_replace(array('-', '{', '}'), '', $namespace);
        $nstr = '';
        // Convert Namespace UUID to bits
        for ($i = 0; $i < strlen($nhex); $i+=2) {
            $nstr .= chr(hexdec($nhex[$i] . $nhex[$i + 1]));
        }
        // Calculate hash value
        $hash = md5($nstr . $name);

        return sprintf('%08s-%04s-%04x-%04x-%12s',
                // 32 bits for "time_low"
            substr($hash, 0, 8),
                // 16 bits for "time_mid"
            substr($hash, 8, 4),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 5
            (hexdec(substr($hash, 12, 4)) & 0x0fff) | 0x5000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
            (hexdec(substr($hash, 16, 4)) & 0x3fff) | 0x8000,
                // 48 bits for "node"
            substr($hash, 20, 12)
        );
    }

//ajax requests
    add_action('wp_ajax_register_product', 'register_product_callback');
    add_action('wp_ajax_nopriv_register_product', 'register_product_callback');

    function register_product_callback()
    {
        $data = $_POST;
        $mc = new MailChimp();

        $result = $mc->registerProduct($data);

        echo json_encode($result);
        die;
    }

//add products to ue_faq post screen
// Add the data to the custom columns for the book post type:
    add_filter('manage_ue_faqs_posts_columns', 'set_custom_edit_book_columns');
    add_filter('manage_ue_guide_posts_columns', 'set_custom_edit_book_columns');

    function set_custom_edit_book_columns($columns)
    {
        $columns['product'] = __('Product..', 'ue');
        return $columns;
    }

    add_action('manage_ue_faqs_posts_custom_column', 'ue_custom_faq_columns', 10, 2);
    add_action('manage_ue_guide_posts_custom_column', 'ue_custom_faq_columns', 10, 2);

    function ue_custom_faq_columns($column, $post_id)
    {
        switch ($column) {

            case 'product' :
            echo get_the_title(get_post_meta($post_id, 'products_selector', true));
        }
    }

//add filter for faqs
    add_action('restrict_manage_posts', 'cpt_type_filter', 10, 2);

    function cpt_type_filter($post_type, $which)
    {
        if ('ue_faqs' !== $post_type && 'ue_guide' !== $post_type) {
            return; //check to make sure this is your cpt
        }
        $products = new WP_Query(array(
            'post_type' => 'ue_products',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'post_title'
        ));

        if (isset($_REQUEST['products_selector'])) {
            $selected_val = $_REQUEST['products_selector'];
        } else {
            $selected_val = '';
        }
        ?>
        <select name="products_selector">
            <option value="">--</option>
            <?php
            if ($products->have_posts()): while ($products->have_posts()): $products->the_post();
                $c_id = get_the_ID()
                ?>
                <option <?php echo $selected_val == $c_id ? 'selected' : "" ?> value="<?php echo $c_id ?>"><?php the_title(); ?></option>
                <?php
            endwhile;
        endif;
        ?>
    </select>
    <?php
}

add_filter('parse_query', 'filter_request_query', 10);

function filter_request_query($query)
{
        //modify the query only if it admin and main query.
    if (!(is_admin() AND $query->is_main_query())) {
        return $query;
    }
        //we want to modify the query for the targeted custom post and filter option
    if (!(('ue_faqs' === $query->query['post_type'] || 'ue_guide' === $query->query['post_type']) && isset($_REQUEST['products_selector']))) {
        return $query;
    }
        //for the default value of our filter no modification is required
    if (0 == $_REQUEST['products_selector']) {
        return $query;
    }
        //modify the query_vars.
    $query->query_vars['meta_query'] = array(array(
        'field' => 'products_selector',
        'value' => $_REQUEST['products_selector'],
        'compare' => ' = ',
        'type' => 'CHAR'
    ));
    return $query;
}

function ue_edit_footer()
{
    add_filter('admin_footer_text', 'ue_edit_text', 11);
}

function ue_edit_text($content)
{
    return '<a href="https://ultimateears.com" target="_blank"><strong>Ultimate Ears</strong></a> Support';
}

add_action('admin_init', 'ue_edit_footer');

    /**
     * Remove the slug from published post permalinks. Only affect our custom post type, though.
     */
    function gp_remove_cpt_slug($post_link, $post, $leavename)
    {

        if ('ue_products' != $post->post_type || 'publish' != $post->post_status) {
            return $post_link;
        }

        $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);

        return $post_link;
    }

    add_filter('post_type_link', 'gp_remove_cpt_slug', 10, 3);

    /**
     * Have WordPress match postname to any of our public post types (post, page, race).
     * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
     * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
     *
     * @param $query The current query.
     */
    function gp_add_cpt_post_names_to_main_query($query)
    {
        // Bail if this is not the main query.
        if (!$query->is_main_query()) {
            return;
        }
        // Bail if this query doesn't match our very specific rewrite rule.
        if (!isset($query->query['page']) || 2 !== count($query->query)) {
            return;
        }
        // Bail if we're not querying based on the post name.
        if (empty($query->query['name'])) {
            return;
        }
        // Add CPT to the list of post types WP will include when it queries based on the post name.
        $query->set('post_type', array('post', 'page', 'ue_products'));
    }

    add_action('pre_get_posts', 'gp_add_cpt_post_names_to_main_query');
    //add sorting page
    add_action( 'admin_menu', 'ue_sort_page' );

    function ue_sort_page() {
        add_options_page( 
            'My Options',
            'Faq Sorting',
            'manage_options',
            'faq-sort.php',
            'ue_sort_page_callback'
        );
    }

    function ue_sort_page_callback(){
        include_once 'faq_sorting.php';
    }

//------------------------------

    add_action( 'admin_menu', 'ue_all_sort_page' );

    function ue_all_sort_page() {
        add_options_page( 
            'My Options',
            'Guide Sorting',
            'manage_options',
            'guide-sort.php',
            'ue_all_sort_page_callback'
        );
    }


    function ue_all_sort_page_callback()
    {
       //echo '<pre>';print_r($faqs);
        include_once 'guide_sorting.php';
    }

    add_action('wp_ajax_update_order', 'update_faq_order_cb');
    /*function update_order() {
        if($_POST['action'] == 'update_order') {
            parse_str($_POST['post_data'], $faq_order);
            foreach ($faq_order['item'] as $key => $value) {
                update_post_meta( intval($value), 'sort_order', intval($key));
            }
            
        } else {
            echo 0;
        }
        die();
    } */


    function update_faq_order_cb() {
        if(!empty($_POST['post_data']) && $_POST['action'] == 'update_order') {
            parse_str($_POST['post_data'], $order);
            foreach ($order['item'] as $key => $value) {
                update_post_meta( intval($value), 'ue_guide_sort_order', intval($key));
            }
            echo '1';
        } else {
            echo '0';
        }
        
        die();
    }