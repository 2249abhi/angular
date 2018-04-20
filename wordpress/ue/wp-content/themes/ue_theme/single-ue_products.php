<?php
$object_id = get_queried_object_id();
$page_meta = get_post_meta($object_id);

$faqs = new WP_Query(array(
    'post_type' => 'ue_faqs',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'products_selector',
            'value' => $object_id
        )
    )
        ));
get_header();
?>
<div class = "section">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12 text-center">
                <h3 class = "lgname"><?php echo $post->post_title?></h3>
                <h1 class = "pgheading"><?php echo $page_meta['ue_page_faq_heading'][0]; ?></h1>
            </div>
            <div class = "col-md-8 offset-md-2">
                <div class = "search">
                    <input type = "text" placeholder = "<?php echo $page_meta['ue_page_search_placeholder_text'][0]; ?>" id="search-criteria">
                    <input type = "submit" class = "subsearch" value = "" >
                </div>
            </div>
            <div class = "col-md-3 col-sm-6"> <a href = "javascript:void(0)" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri()?>/img/guide.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_first_image_heading'][0]; ?></p>
                </a> </div>
            <div class = "col-md-3 col-sm-6"> <a href = "javascript:void(0)" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri()?>/img/warranty.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_second_image_heading'][0]; ?></p>
                </a> </div>
            <div class = "col-md-3 col-sm-6"> <a href = "javascript:void(0)" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri()?>/img/email.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_third_image_heading'][0]; ?></p>
                </a> </div>
            <div class = "col-md-3 col-sm-6"> <a href = "<?php echo "tel:".str_replace(' ', '', $page_meta['ue_page_faq_fourth_image_heading'][0]); ?>" class = "mstp"> <span><img src = "<?php echo get_stylesheet_directory_uri()?>/img/call.png"></span>
                    <p><?php echo $page_meta['ue_page_faq_fourth_image_heading'][0]; ?></p>
                </a> </div>
        </div>
        <div class = "wrapper" id = "fixed_sidebar">
            <div class = "sidemenu">
                <div class = "form-group dropdownn showinmobile">
                    <select class = "form-control">
                        <option><?php echo $page_meta['ue_page_faqs_sidebar_first_heading'][0]; ?></option>
                        <!-- <option>Simple Setup</option>
                        <option>Bluetooth</option>
                        <option>Power connectivity</option>
                        <option>Battery level</option>
                        <option>Waterproof</option>
                        <option>Other</option> -->
                    </select>
                </div>
                <ul>
                    <li><a href = ""><?php echo $page_meta['ue_page_faqs_sidebar_first_heading'][0]; ?></a></li>
                    <!-- <li><a href = "">Simple Setup</a></li>
                    <li><a href = "">Bluetooth</a></li>
                    <li><a href = "">Power connectivity</a></li>
                    <li><a href = "">Battery level</a></li>
                    <li><a href = "">Waterproof</a></li>
                    <li><a href = "">Other</a></li> -->
                </ul>
<?php if ($page_meta['ue_page_google_link'][0] != '' || $page_meta['ue_page_apple_link'][0] != ''): ?>                
                <div class = "apps">
                    <h3><?php echo $page_meta['ue_page_faqs_sidebar_playstore_heading'][0]; ?></h3>
                    <p><?php echo $page_meta['ue_page_faqs_sidebar_playstore_para'][0]; ?></p>

                    <?php if ($product_meta['ue_page_google_link'][0] != ''): ?>

                    <a href = "<?php echo $page_meta['ue_page_google_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri()?>/img/google_play.png" alt = "" class = "img-fluid" ></a>
                    <?php
                        endif;
                        if ($page_meta['ue_page_apple_link'][0] != ''):
                    ?>
                    <a href = "<?php echo $page_meta['ue_page_apple_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri()?>/img/ios.png" alt = "" class = "img-fluid" ></a>
                    <?php endif ?>
                </div>
            </div>
<?php endif; ?>            
            <div class = "content">
                <div id = "accordion" role = "tablist" aria-multiselectable = "true">
                    <?php
                    if ($faqs->have_posts()):$count = 1;
                        while ($faqs->have_posts()):$faqs->the_post();
                            ?>
                            <div class = "card question_block <?php echo $count === 1 ? 'active' : '' ?>">
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

                    <a href = "<?php echo $page_meta['ue_page_google_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri()?>/img/google_play.png" alt = "" class = "img-fluid"></a>
                    <a href = "<?php echo $page_meta['ue_page_apple_link'][0]; ?>"><img src = "<?php echo get_stylesheet_directory_uri()?>/img/ios.png" alt = "" class = "img-fluid"></a>


                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
