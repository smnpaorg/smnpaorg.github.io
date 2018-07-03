Vistalicious WordPress Theme
Brought to you by DailyBlogTips.com
http://dailyblogtips.com

SUMMARY:
Vistalicious is a theme for WordPress with a Vista twist.

INSTALLATION OF THE THEME: 
1. Unpack the folder in your wp-content/themes/ directory.
2. Go to the WordPress Admin panel and select presentation.
3. Select the Vistalicious theme.

SIMPLE TWEAKS:
1. Changing the welcome text on the upper right of the header: go to your Admin Panel under Presentation-Theme Editor
and find the header.php theme file. In the header division, locate the 'topright' class. Edit at will.
2. Customizing the menu: by default, the menu will query all WP pages created + home. If you wish 
to edit the menu manually, you can delete the entire page query code and insert your own links. Just make sure
you insert your list elements in the following pattern: <a href="#"><li><span>Menu element</span></a></li>
Make sure to put them in a span as shown.

ADDING 125x125 BLOCKS

If you want to add 125x125 ad blocks, simply open the sidebar.php file, and in the place of the 300x250 image code, put the following:

	<a rel="nofollow" href="#"><img style="margin: 0 15px 0 16px" height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

	<a rel="nofollow" href="#"><img height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

	<a rel="nofollow" href="#"><img style="margin: 15px 15px 0 16px" height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

	<a rel="nofollow" href="#"><img style="margin: 15px 0 0 0;" height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

	<a rel="nofollow" href="#"><img style="margin: 15px 15px 0 16px" height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

	<a rel="nofollow" href="#"><img style="margin: 15px 0 0 0;" height="125" width="125" src="<?php bloginfo('template_directory'); ?>/images/img125.gif" border="0" title="insert title" alt="insert title" /></a>

Then just upload the banners you want to use to the images folder, and change the code above respectively.

Enjoy!
