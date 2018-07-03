<!doctype html><html lang="en"> 
<head> 
  <meta charset=utf-8>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_reset_query();  
	if ( is_page('Smoky Mountain Native Plants Association') ) {
		echo 'Smoky Mountain Native Plants Association'; 
	} else { wp_title(' '); } ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1" type="text/css" media="screen" />

<!-- ?php wp_head(); ?>  No need for the extra junk-->
</head>
<!--[if IE 5.5000]><body id="ie5" class="5 png ie"><![endif]-->
<!--[if IE 5]><body id="ie5" class="png ie"><![endif]-->
<!--[if IE 6]><body id="ie6" class="png ie"><![endif]-->
<!--[if IE 7]><body id="ie7" class="ie"><![endif]-->

<!--[if !(lt IE 8)]><!-->
<body id="notie" onload="var x = document.getElementById('content').clientHeight;document.getElementById('inner').style.minHeight = x - 23 + 'px';">
<!--<![endif]-->

<div id="page">
<div id="header">
<h1>Smoky Mountain Native Plants Association</h1>
<p>Building a Sustainable Future for Generations to come</p>
</div>
<div id="pics">
<a href="http://www.smnpa.org/programs/" style="width:104px;" title="Education">
<span>Education</span></a>
<a href="http://www.cals.ncsu.edu/specialty_crops/" style="width:102px;" title="Specialty Crops">
<span>Specialty Crops</span></a>
<a href="http://www.smnpa.org/programs/" style="width:98px;" title="Spring Plant Sale">
<span>Spring Plant Sale</span></a>
<a href="http://www.ces.ncsu.edu/depts/hort/hil/hil-127.html" style="width:102px;" title="Ginseng">
<span>Ginseng</span></a>
<a href="http://www.smnpa.org/farmers-market/" style="width:102px;" title="Farmers Market">
<span>Farmers Market</span></a>
<a href="http://www.smnpa.org/products/" style="width:92px;" title="Products">
<span>Products</span></a>
<a href="http://www.cals.ncsu.edu/specialty_crops/publications/reports/2004/davis_RampsProject.htm" style="width:90px;" title="Ramps">
<span>Ramps</span></a>
<a href="http://www.cals.ncsu.edu/specialty_crops/publications/reports/2004/davis_bloodroot.htm" style="width:110px;" title="Bloodroot">
<span>Bloodroot</span></a>
</div>
<hr/>
<div id="content">
<ul id="nav">
<li><a href="http://www.smnpa.org/" id="home">Home</a></li>

<li><a href="<?php echo get_permalink(8); ?>">Membership</a></li>

<li><a href="<?php echo get_permalink(21); ?>">Programs</a>

<ul>
	<li>
		<a href="<?php echo get_permalink(21); ?>">Research</a>
	</li>
	<li>
		<a href="<?php echo get_permalink(21); ?>">Education</a>
	</li>
	<li>
		<a href="<?php echo get_permalink(21); ?>">Community Service</a>
	</li>
	<li>
		<a href="<?php echo get_permalink(21); ?>">Economic Developement</a>
	</li>
</ul>
</li>
<li><a href="<?php echo get_permalink(38); ?>">Products</a></li></ul>