<?php
/**
 * Template name: WARRANTY
 */
get_header();
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="lgname">ultimate ears</h3>
                <h1 class="pgheading"><?php the_title(); ?></h1>
            </div>

        </div>
        <div class="wrapper warranty">
            <div class="sidemenu">
                <?php echo get_sidebar('warranty') ?>
            </div>
            <div class="content "> 
                <?php if (have_posts()):while (have_posts()): the_post(); ?>
                        <div class=" question_block ">
                            <div class="question" >
                                <?php the_title(); ?> 
                            </div>
                            <div class="answer">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>