<?php
/* Template name: SUPPORT FORM
 * 
 */
?>
<?php get_header() ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post() ?>
                        <h2 class="emsup" ><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-md-4 offset-md-1">
                <?php get_sidebar('support') ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
