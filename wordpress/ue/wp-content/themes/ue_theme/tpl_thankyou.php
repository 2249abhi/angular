<?php
/**
 * Template name: THANK YOU
 */
get_header();
add_filter('the_content', 'ue_justify');
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2 text-center thanks">
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <h2 class="emsup" ><?php the_title() ?></h2>
                        <?php
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-md-4 offset-md-2">
<?php get_sidebar('support') ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
