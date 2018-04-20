<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php wp_title('|', true, 'right') ?> <?php bloginfo('name')?></title>
        <?php wp_head() ?>
    </head>

    <body <?php body_class() ?>>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> <a href="<?php echo site_url()?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="" ></a> </div>
                </div>
            </div>
        </header>
