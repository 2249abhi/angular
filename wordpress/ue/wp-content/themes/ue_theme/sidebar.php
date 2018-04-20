<ul>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?>
        <?php wp_list_categories('orderby=name&show_count=0&title_li=<h2>Categories</h2>'); ?>
        <li>
            <h2>Archives</h2>
            <ul>
                <?php wp_get_archives('type=monthly&limit=12'); ?>
            </ul>
        </li> 
        <li>
            <h2>Pages</h2>
            <ul>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </li>
        <li>
            <h2>Meta</h2>
            <ul>
                <li><?php wp_loginout(); ?></li>
                <li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
                <li><a href="http://www.allmythemes.com">Wordpress Themes</a></li>
            </ul>
        </li>
        <li>
            <h2>Blogroll</h2>
            <ul>
                <?php get_links(-1, '<li>', '</li>', 'between', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
            </ul>
        </li>
    <?php endif; ?>
</ul>

<!-- <h2>Customer<br>
  Service</h2>
<div class="block">

  <div class="phn">+1 646-454-3200</div>
  <div class="detail">Mon-Fri: 6am - 6pm(PST) </div>
</div>
<div class="block sml">
            <div class="lang">German</div>
            <div class="phn">41-22-761-40-12</div>
            <div class="detail">Mo-Fr: 9:00 - 18:00 (CET)
</div>
<div class="block sml">
  <div class="lang">Spanish</div>
  <div class="phn">01-800-800-4500</div>
  <div class="detail">Lunes-Viernes: 5:00am - 5:00pm(PT) </div>
</div>
<div class="block sml">
  <div class="lang">French</div>
  <div class="phn">+1 866-934-5644</div>
  <div class="detail">Du lundi au vendredi, de 6 h à 18 h (heure standard du Pacifique) </div>
</div>
<div class="block sml">
  <div class="lang">Portuguese</div>
  <div class="phn">0800-891-4173</div>
  <div class="detail">Segunda - Sexta: 9h00 - 21h00 </div>
</div> -->