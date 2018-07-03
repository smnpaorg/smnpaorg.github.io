<?php

if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name'=>'sidebar1',
        'before_widget' => '<li id="%1$s" class="sidebaritem">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

?>
