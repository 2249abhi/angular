<?php
$page_id = get_queried_object_id();
$selected_product = get_post_meta($page_id, 'products_selector', true);
;
?>
<div class="footerblack">
    <div class="faqcat">
        <ul>
            <li><a href="<?php echo str_replace('/products', '', get_permalink($selected_product)) ?>"><i class="fa  fa-angle-left "></i>FAQ page</a></li>
            <li><a href="<?php echo site_url()?>/email-support">Customer Support <i class="fa fa-angle-right "></i></a></li>
        </ul>
    </div>

    <div class="footer">
        <div class="container">
            <div class="col-md-12">
                <ul class="smlnk" >
<?php dynamic_sidebar('Sidebar 2'); ?>
                    <li><a href="http://ultimateears.com">ultimateears.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>