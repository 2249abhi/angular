<?php
/**
 * Template name: PRODUCT FAQs
 */
$object_id = get_queried_object_id();
$page_meta = get_post_meta($object_id);
$product_id = get_post_meta($object_id, 'products_selector', true);
$product_meta = get_post_meta($product_id);
$faqs = new WP_Query(array(
    'post_type' => 'ue_faqs',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'products_selector',
            'value' => $product_id
        )
    )
        ));
$stylsheet_dir = get_stylesheet_directory_uri();
get_header();
//Onboarding, Connectivty, Alexa, App, Power Up, General
$custom_order = array(96, 98, 97, 95, 100, 99);
$p_slug = $post->post_name;

$terms = get_terms(array(
    'taxonomy' => 'ue_faq_types',
    'include' => array(97, 95, 98, 99, 100, 96)
        ));
$c_terms = array();
foreach ($terms as $term) {
    $c_terms[$term->term_id] = $term;
}
?>
<div class = "section">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12 text-center">
                <h3 class = "lgname"><?php the_title(); ?></h3>
                <h1 class = "pgheading"><?php echo $page_meta['ue_page_faq_heading'][0]; ?></h1>
            </div>
            <div class = "col-md-8 offset-md-2">
                <div class = "search">
                    <input type = "text" placeholder = "<?php echo $page_meta['ue_page_search_placeholder_text'][0]; ?>" id="search-criteria" >
                    <input type = "submit" class = "subsearch" value = "" >
                </div>
            </div>
            <div class="topmenu-section d-block d-sm-none">
                <ul>
                    <li><a href="<?php echo site_url() ?>/guide/<?php echo $p_slug ?>" class="mstp"> <span><img src="<?php echo $stylsheet_dir ?>/img/guide.png"></span></a></li>
                    <li><a href="<?php echo get_permalink(287) ?>" class="mstp"> <span><img src="<?php echo $stylsheet_dir ?>/img/warranty.png"></span></a></li>
                    <li><a href="<?php echo site_url() ?>/email-support" class="mstp"> <span><img src="<?php echo $stylsheet_dir ?>/img/email.png"></span></a></li>
                    <li><a href="<?php echo "tel:" . str_replace(' ', '', $page_meta['ue_page_faq_fourth_image_heading'][0]); ?>" class="mstp"> <span><img src="<?php echo $stylsheet_dir ?>/img/call.png"></span></a></li>
                </ul>
            </div>
            <div class = "col-md-3 col-sm-6 d-none d-sm-block"> <a href = "<?php echo site_url() ?>/guide/<?php echo $p_slug ?>" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/guide.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_first_image_heading'][0]; ?></p>
                </a> 
            </div>
            <div class = "col-md-3 col-sm-6 d-none d-sm-block"> <a href = "<?php echo get_permalink(287) ?>" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/warranty.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_second_image_heading'][0]; ?></p>
                </a> </div>
            <div class = "col-md-3 col-sm-6 d-none d-sm-block"> <a href = "<?php echo site_url() ?>/email-support" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/email.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_third_image_heading'][0]; ?></p>
                </a> </div>
            <div class = "col-md-3 col-sm-6 d-none d-sm-block"> <a href = "<?php echo "tel:" . str_replace(' ', '', $page_meta['ue_page_faq_fourth_image_heading'][0]); ?>" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/call.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_fourth_image_heading'][0]; ?></p>
                </a> </div>
        </div>
        <div class = "wrapper" id = "fixed_sidebar">
            <div class = "sidemenu">
                <div class = "dropdownn showinmobile">
                    <select class = "form-control" id="sidebar-options">
                        <option value="" data-target="">--</option>
                        <option class="url-switch" value="<?php echo site_url() ?>/guide/<?php echo $p_slug ?>" data-target="<?php echo site_url() ?>/guide/<?php echo $p_slug ?>"><?php echo $page_meta['ue_page_faqs_sidebar_first_heading'][0]; ?></option>
                        <?php if (in_array($product_id, array(84, 85))):foreach ($custom_order as $d): ?>
                                <option class="faq-switch" value="<?php echo $c_terms[$d]->term_id ?>" data-target="<?php echo $c_terms[$d]->slug ?>"><?php echo $c_terms[$d]->name; ?></option>
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </select>
                </div>
                <ul>
                    <li><a href = "<?php echo site_url() ?>/guide/<?php echo $p_slug ?>"><?php echo $page_meta['ue_page_faqs_sidebar_first_heading'][0]; ?></a></li>
                    <?php if (in_array($product_id, array(84, 85))):foreach ($custom_order as $d): ?>
                            <li><a data-target="<?php echo $c_terms[$d]->slug ?>" class="faq-filter" href="#<?php echo $c_terms[$d]->slug ?>"><?php echo $c_terms[$d]->name; ?></a></li>
                            <?php
                        endforeach;
                    endif;
                    ?>

                </ul>
                <?php if ($product_meta['ue_page_google_link'][0] != '' || $product_meta['ue_page_apple_link'][0] != ''): ?>
                    <div class = "apps">
                        <h3><?php echo $page_meta['ue_page_faqs_sidebar_playstore_heading'][0]; ?></h3>
                        <p><?php echo $page_meta['ue_page_faqs_sidebar_playstore_para'][0]; ?></p>

                        <?php if ($product_meta['ue_page_google_link'][0] != ''): ?>
                            <a href = "<?php echo $product_meta['ue_page_google_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/google_play.png" alt = "" class = "img-fluid" ></a>
                            <?php
                        endif;
                        if ($product_meta['ue_page_apple_link'][0] != ''):
                            ?>
                            <a href = "<?php echo $product_meta['ue_page_apple_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/ios.png" alt = "" class = "img-fluid" ></a>
                        <?php endif ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class = "content">
                <div  role = "tablist" aria-multiselectable = "true">
                    <?php
                    if ($faqs->have_posts()):$count = 1;
                        while ($faqs->have_posts()):$faqs->the_post();
                            $t_classes = '';
                            $o_terms = wp_get_object_terms($post->ID, 'ue_faq_types');
                            if ($o_terms) {
                                foreach ($o_terms as $ot) {
                                    $t_classes .= ' ' . $ot->slug;
                                }
                            }
                            ?>
                            <div class = "card question_block <?php echo $t_classes ?> <?php echo $count === 1 ? 'active' : '' ?>">
                                <div class = "card-header question" role = "tab" id = "heading<?php echo $count ?>">
                                    <h5 class = "mb-0  ">
                                        <div class = "qno"><?php echo $count; ?></div>
                                        <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapse<?php echo $count ?>" aria-expanded = "true" aria-controls = "collapse<?php echo $count ?>"> <?php the_title(); ?></a> </h5>
                                </div>
                                <div id = "collapse<?php echo $count; ?>" class = "collapse <?php echo $count === 1 ? 'show' : '' ?>" role = "tabpanel" aria-labelledby = "heading<?php echo $count ?>">
                                    <div class = "card-block answer">
                                        <div class = "row">
                                            <div class = "col-md-12">
                                                <?php the_content(); ?>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $count++;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class = "apps mobile_only">
                    <h3><?php echo $page_meta['ue_page_faqs_sidebar_playstore_heading'][0]; ?></h3>
                    <p><?php echo $page_meta['ue_page_faqs_sidebar_playstore_para'][0]; ?></p>
                    <a href = "<?php echo $page_meta['ue_page_google_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/google_play.png" alt = "" class = "img-fluid"></a>
                    <a href = "<?php echo $page_meta['ue_page_apple_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri() ?>/img/ios.png" alt = "" class = "img-fluid"></a>


                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
