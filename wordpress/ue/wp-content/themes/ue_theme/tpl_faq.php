<?php
/**
 * Template name: FAQ
 */
get_header();

$term = get_terms('ue_faqs', array(
    'orderby' => 'id',
    'hide_empty' => 1 // hide categories with no posts
        )
);
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="lgname">ultimate ears wonderboom</h3>
                <h1 class="pgheading">Frequently Asked questions</h1>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="search">
                    <input type="text" placeholder="search" id="search-criteria" >
                    <input type="submit" class="subsearch" value="" id="search" >
                </div>
            </div>
            <div class="col-md-3 col-sm-6"> <a href="javascript:void(0)" class="mstp"> <span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/guide.png"></span>
                    <p>How to guide</p>
                </a> </div>
            <div class="col-md-3 col-sm-6"> <a href="javascript:void(0)" class="mstp"> <span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/warranty.png"></span>
                    <p>Warranty info</p>
                </a> </div>
            <div class="col-md-3 col-sm-6"> <a href="javascript:void(0)" class="mstp"> <span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/email.png"></span>
                    <p>Email Support</p>
                </a> </div>
            <div class="col-md-3 col-sm-6"> <a href="javascript:void(0)" class="mstp"> <span><img src="<?php echo get_stylesheet_directory_uri() ?>/img/call.png"></span>
                    <p>+1 646 454 3200</p>
                </a> </div>
        </div>
        <div class="wrapper">
            
            <div class="content"> 


                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                    //foreach ($terms as $term) {
                        
                        // Define the query
                        $args = array(
                            'post_type' => 'ue_faqs', // replace with name of your custom post type
                            'ue_faqs' => $term->slug // replace with name of your custom taxonomy
                        );
                        $query = new WP_Query($args);
                        
                                // Start the post loop
                           // $i=1;
                             //   while ( $query->have_posts() ) : $query->the_post(); 

                    //echo'<h2 class="h2 faq-cat">' . $term->name . '</h2>';
                    // Start the post loop
                    $i = 1;
                    $cat_ids = [];
                    while ($query->have_posts()) : $query->the_post();

                    array_push($cat_ids, $query->post->ID);
                        ?>

                        <?php /* display the post as you see fit */ 
                            $term_list = wp_get_post_terms($post->ID, 'ue_faq_types', array("fields" => "all"));
                        ?>
                            <div id="question-list">
                                <div class="card question_block <?php echo $term_list[0]->slug; ?>">
                                    <div class="card-header question" role="tab" id="heading<?php echo $i; ?>">
                                        <h5 class="mb-0"> <div class="qno"><?php echo $i; ?></div> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseThree"> 
                                        <?php the_title(); ?> </a> </h5>
                                    </div>
                                    <div id="collapse<?php echo $i; ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                        <div class="card-block answer"> <?php the_content(); ?> </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $i++;
                            endwhile;
                    //echo '<hr/>';
                    // use reset postdata to restore the original query
                    wp_reset_postdata();

                    //}
                    ?>
                </div>
            </div>
            <?php 
            include (get_template_directory() . "/sidebar-faq.php");
            //get_sidebar('faq'); 

            ?>
        </div>
    </div>
</div>
<?php
get_footer();
