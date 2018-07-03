<?php get_header(); ?>

<div id="contentwrapper"><div id="content">

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="pageTitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="pageTitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('F, Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="pageTitle">Archive for <?php the_time('Y'); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="pageTitle">Author Archive</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="pageTitle">Blog Archives</h2>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post">
<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<div class="postMeta">Filed in <?php the_category(', '); ?> on <?php the_time('M.d, Y') ?></div>
<div class="postContent"><?php the_excerpt('(Read the rest of this entry...)'); ?></div>
<div class="postTags"><?php the_tags('Tags: ', ', ', ''); ?></div>
<p class="comments"><?php comments_popup_link('Leave a Comment', 'Comments (1)', 'Comments (%)'); ?></p>
</div> <!-- Closes Post -->

<?php endwhile; ?>

<div id="nextprevious">
<div class="left"><?php posts_nav_link('','','&laquo; previous entries') ?></div>
<div class="right"><?php posts_nav_link('','next entries &raquo;','') ?></div>
<div class="cleared"></div>
</div>

<?php else : ?>

<div class="post">
<h2 class="postTitle">Not Found</h2>
<p>Sorry, but you are looking for something that isn't here.</p>
</div> <!-- Closes Post -->

<?php endif; ?>

</div></div> <!-- Closes Content -->

<?php get_sidebar(); ?>

<div class="cleared"></div>

</div> <!-- Closes Main -->
<div class="bottomcurvewhite"></div>



<?php get_footer(); ?>
