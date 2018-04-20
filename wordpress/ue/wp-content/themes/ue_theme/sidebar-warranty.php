
<div class="form-group dropdownn showinmobile">
    <?php
    wp_nav_menu(array(
        'items_wrap' => '<select class="form-control">%3$s</select>',
        'theme_location' => 'warranty_sidebar',
        'walker' => new Walker_Warranty_Nav_Menu()
    ));
    ?>

</div>
<div id="fixed_sidebar">
    <div class="sidemenu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'warranty_sidebar',
        ));
        ?>
    </div>
</div>