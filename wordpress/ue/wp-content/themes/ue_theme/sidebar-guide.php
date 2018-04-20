<?php
$selected_product = get_post_meta(get_queried_object_id(), 'products_selector', true);
$steps_array = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
        ];
?>
<div class="fix_menu">
    <ul id="menu">
        <?php
        $post_type_query = new WP_Query(
                array(
            'post_type' => 'ue_guide',
            'posts_per_page' => -1,
            'orderby' => 'ID',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'products_selector',
                    'value' => $selected_product
                )
            )
                )
        );
// we need the array of posts
        $posts_array = $post_type_query->posts;
// create a list with needed information
// the key equals the ID, the value is the post_title
        $guide_steps_titles = wp_list_pluck($posts_array, 'post_title', 'ID');
        ?>
        <li data-menuanchor="register"><a href="#one">Register Product</a></li>
        <?php
        if ($post_type_query->have_posts()) {
            $m_id = 2;
            while ($post_type_query->have_posts()) {
                $post_type_query->the_post();
                $j = $m_id - 1;
                echo '<li data-menuanchor="' . $steps_array[$m_id] . '"><a href="#' . $steps_array[$m_id] . '">' . get_the_title($post->ID) . '</a></li>';
                $m_id++;
            }
        }
        ?>
    </ul>
</div>