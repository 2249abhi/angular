<?php

$filter = array(
  'post_type' => 'ue_faqs',
  'post_status' => 'publish',
  'orderby' => 'meta_value_num',
  'meta_key'   => 'ue_guide_sort_order',
  'order' => 'ASC',
  'posts_per_page' => -1,  
);

if (isset($_GET['faq_product']) && $_GET['faq_product'] != ''){
  $filter['meta_query'] = array(
    array(
    'key' => 'products_selector',
    'value' => intval($_GET['faq_product']),
    
    ));
}
$query = new WP_Query($filter);


if (!$query->have_posts()){
  $filter = array(
  'post_type' => 'ue_faqs',
  'post_status' => 'publish',
  'orderby' => 'meta_value_num',
  'meta_key'   => 'ue_guide_sort_order',
  'order' => 'ASC',
  'posts_per_page' => -1,  
    );

    if (isset($_GET['faq_product']) && $_GET['faq_product'] != ''){
      $filter['meta_query'] = array(
        array(
        'key' => 'products_selector',
        'value' => intval($_GET['faq_product']),
        
        ));
    }
    $query = new WP_Query($filter);

  }
?>

<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; }
#sortable li span { position: absolute; margin-left: -1.3em; }
</style>
<script>
jQuery( function() {

  jQuery('.update-nag').hide();
  jQuery( "#sortable" ).sortable({
    change: function( event, ui ) { },
    update: function( event, ui ) { 
        //console.log(jQuery("#sortable").sortable("serialize"));
    }
  });
  jQuery( "#sortable" ).disableSelection();
} );

var update_url = '<?php echo admin_url('admin-ajax.php')?>';
jQuery(document).ready(function(){
  jQuery('#update_btn').on('click', function(){
  //var post_data = jQuery('#faq_sortable').serializeArray();
  var post_data = jQuery("#sortable").sortable("serialize");
  //console.log(post_data);
  jQuery.ajax({
          url : update_url,
          type: "POST",
          data : {action:'update_order', post_data:post_data},
          success: function(data, textStatus, jqXHR){
              if(data==1)
              {
                  location.reload();
              }
              else
              {
                  alert('Something goes wrong.')
                  location.reload();
              }
          },
          error: function (jqXHR, textStatus, errorThrown){
       
          }
      });
});
});
</script>

<div style="margin: 40px 0px 20px 20px;">
<h1 class="wp-heading-inline">Faq</h1>
<div class="row col-md-12">
<?php
$products = get_posts(array(
  'post_type' => 'ue_products',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order' => 'ASC',
  'orderby' => 'post_title'
  ));
//$value = get_post_meta($post->ID, 'products_selector', true);


?>
<form action="<?php menu_page_url('faq-sort.php')?>" method="GET">
  <input type="hidden" name="page" value="faq-sort.php">
  <select name="faq_product">
    <option value="">-Select Product-</option>
    <?php
    if ($products): foreach ($products as $product):
      ?>
    <option <?php echo $product->ID == $_GET['faq_product'] ? 'selected' : "" ?> value="<?php echo $product->ID ?>"><?php echo apply_filters('the_title', $product->post_title) ?></option>
    <?php
    endforeach;
    endif;
    ?>
  </select>
  <button class="button" type="submit">Apply filter</button>
  <input type="button" class="button button-primary button-large" style="margin-left:150px;" value="Update" id="update_btn"/>
</form>
</div>
<div style="margin-top:10px;">
    <ul id="sortable">
    <?php 
    if ( $query->have_posts() ) : 
      foreach($query->posts as $post){ ?>
        <li class="ui-state-default" id="item_<?php echo $post->ID;?>"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo apply_filters('post_title', $post->post_title) ?></li>
     <?php
      } 
      else:
        echo "<p>No Data Found</p>";
      endif; ?>
    </ul>
</div>


</div>
