<?php $cats = wp_get_object_terms($cat_ids, 'ue_faq_types');
?>
<div class="sidemenu">
    <div class="form-group dropdownn showinmobile">
        <select class="form-control">
            <option>Register your product</option>
            <?php
            foreach ($cats as $cat) {
                echo '<li><a href="javascript:void(0)" class="support-type" id="' . $cat->slug . '" >' . $cat->name . '</a></li>';
            }
            ?>    
        </select>
    </div>
    <ul>
        <?php
        foreach ($cats as $cat) {
            echo '<li><a href="javascript:void(0)" class="support-type" id="' . $cat->slug . '" >' . $cat->name . '</a></li>';
        }
        ?>

        <li><a href="javascript:void(0)" class="support-type" id="all">ALL</a></li>
    </ul>
</div>