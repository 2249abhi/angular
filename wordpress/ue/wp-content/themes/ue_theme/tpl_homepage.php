<?php
/**
 * Template name: HOMEPAGE
 */
get_header();
$page_id = get_queried_object_id();
$page_meta = get_post_meta($page_id);

if (function_exists('geoip_country_code_by_name')) {
    $country_code = geoip_country_code_by_name($_SERVER['REMOTE_ADDR']);
} elseif (function_exists('geoip_detect2_get_info_from_ip')) {
    $userInfo = geoip_detect2_get_info_from_ip($_SERVER['REMOTE_ADDR'], NULL);
    $country_code = $userInfo->country->isoCode;
} else {
    $country_code = $q_config['language'];
}
$post_conditions = array(
    'post_type' => 'ue_products',
    'posts_per_page' => 6,
    'post_status' => 'published',
    'meta_query' => array(
        array(
            'key' => 'ue_product_location',
            'value' => 'top'
        )
        ));
if (!$country_code || !in_array($country_code, array('en', 'de', 'US', 'UK', 'DE', 'GB'))) {
    $post_conditions['post__not_in'] = array(85, 84);
}
$products = new WP_Query($post_conditions);
$bottom_products = new WP_Query(array(
    'post_type' => 'ue_products',
    'posts_per_page' => 4,
    'post_status' => 'published',
    'meta_query' => array(
        array(
            'key' => 'ue_product_location',
            'value' => 'bottom'
        )
    ))
);
?>

<div class="support_banner">
    <div class="container">
        <div class="banner_heading">
            <?php if (have_posts()):while (have_posts()): the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <?php the_content(); ?> 
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div> 
<?php
$class_count = $products->post_count == 6 ? 2 : 3;
if ($products->have_posts()):
    ?>
    <div class="outer">
        <div class="container">
            <div class="row spro">
                <?php while ($products->have_posts()): $products->the_post() ?>
                    <div class="col-md-<?php echo $class_count ?> col-sm-4"> <a href="<?php echo str_replace('/products', '', get_permalink($post->ID)) ?>">
                            <div class="pro_img"> 
                                <?php
                                the_post_thumbnail('post-thumbnail', array(
                                    'class' => 'img-fluid',
                                    'alt' => $post->post_title
                                ));
                                ?>
                            </div>
                            <p><?php the_title(); ?></p>
                            <span class="click" ><?php echo $page_meta['ue_page_top_product_link_button_text'][0] ?></span>
                        </a> 
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="outer tapparty  " >
    <div class="tap ">
        <div class="container">
            <div class="row">
                <h2><?php echo $page_meta['ue_page_left_title'][0] ?></h2>
                <div class="col-md-6 offset-md-3 text-center">
                    <?php echo apply_filters('the_content', $page_meta['ue_page_left_section'][0]) ?>

                </div>
            </div>
        </div>
    </div>
    <div class="party">
        <div class="container">
            <div class="row">
                <h2><?php echo $page_meta['ue_page_right_title'][0] ?></h2>
                <div class="col-md-6 offset-md-3 text-center">
                    <?php echo apply_filters('the_content', $page_meta['ue_page_right_section'][0]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($bottom_products->have_posts()): ?>
    <div class="outer bpro">
        <div class="container">
            <div class="row spro">
                <?php while ($bottom_products->have_posts()): $bottom_products->the_post(); ?>
                    <div class="col-md-3 col-sm-6"> <a href="<?php echo str_replace('/products', '', get_permalink($post->ID)) ?>"  >
                            <div class="pro_img"> 
                                <?php
                                the_post_thumbnail('post-thumbnail', array(
                                    'class' => 'img-fluid',
                                    'alt' => $post->post_title
                                ));
                                ?>
                            </div>
                            <p><?php the_title(); ?></p>
                            <span class="click" ><?php echo $page_meta['ue_page_bottom_product_link_button_text'][0] ?></span>
                        </a> 
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
get_footer();
