<?php
/**
 * Template name: GUIDE
 */
get_header('guide');

$term = get_terms('ue_guide', array(
    'orderby' => 'id',
    'hide_empty' => 1 // hide categories with no posts
    )
);
$page_id = get_queried_object_id();
$page_meta = get_post_meta($page_id);

$guide_for_product = get_post_meta($page_id, 'products_selector', true);
$selected_product = get_post_meta($page_id, 'products_selector', true);


function replace_product_name($text){
    $replace = array(
        // 'words to find' => 'replace with this'
        '{{product-name}}' => get_the_title(get_post_meta(get_queried_object_id(), 'products_selector', true))
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}
add_filter('the_content', 'replace_product_name');
remove_filter('the_content', 'wpautop');
?>
<div id="fullpage">
    <div class="section register_product one" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page_id)) ?>) no-repeat;background-size:cover;" id="section0">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" >
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 offset-md-2"> </div>
                                <div class="col-md-6" class="<?php echo $guide_for_product; ?>">
                                    <?php 
                                    if (have_posts()){
                                        while(have_posts()){
                                            the_post();
                                            the_content();
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $args = array(
        'post_type' => 'ue_guide', // replace with name of your custom post type
        'ue_guide' => $term->slug, // replace with name of your custom taxonomy
        'orderby' => 'ID',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'products_selector',
                'value' => $selected_product
                )
            )
        );
    $query = new WP_Query($args);

    $i = 1;
    add_filter('the_content', 'wpautop');
    while ($query->have_posts()) : $query->the_post();
    $term_list = wp_get_post_terms($post->ID, 'ue_guide_types', array("fields" => "all"));
    ?>
    <div class="section success_product" id="section<?php echo $i; ?>">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 offset-md-2 stepmg"> 
                                  <!-- <img src="<?php //echo get_stylesheet_directory_uri()                    ?>/img/step1.png" alt="" class="img-fluid" > -->
                                  <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"> 
                              </div>
                              <div class="col-md-6 info">
                                <div class="stepname"><?php the_title(); ?></div>
                                <?php /*<div class="sheading"></div>*/?>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$i++;
endwhile;
wp_reset_postdata();
?>

</div>
<!--GUIDE ENDS STARTS--> 
<?php
get_footer('guide');
