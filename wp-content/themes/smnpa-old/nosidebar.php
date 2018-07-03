<?php
/*
Template Name: No_Sidebar
*/
?>
<?php get_header(); ?>
<style type="text/css" media="screen">
p{font-weight:normal;}
#pics{height:0px;border-bottom:0px none;overflow:hidden;}#pics a{display:none;}
h5{float:left;font-size:1em;display:block;width:100px;border:1px solid #DADADA;margin:10px 3px 10px 0;color:#666;}
h6{font-size:1em;font-weight:normal;margin:10px 0 10px 105px;}
.entry hr{height:1px;background:#DADADA;clear:both;display:block;margin:0 90px;border:0px none;}
#content{width:780px;}
#nav{width:800px;}
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

<?php get_footer(); ?>
