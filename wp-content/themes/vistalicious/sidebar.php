<div class="sidebars">

<ul>

<li class="nobg">
<a href="feed:<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('template_directory'); ?>/images/subscribe.gif" alt="subscribe"></img></a>
</li>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) : ?>

<li>
<h2>Categories</h2>
<ul>
  <?php wp_list_categories('show_count=0&title_li='); ?>
</ul>
</li>

<li>
<h2>Meta</h2>
<ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
  <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
  <?php wp_meta(); ?>
</ul>
</li>

<?php endif; ?>
</ul>

<div class="cleared"></div>
</div> <!-- Closes Sidebars -->
