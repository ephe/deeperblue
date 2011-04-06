<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">

		<div id="header">
		<div id="logo">
		</div>

		<!-- Navigation Bar -->	
		<div id="navbar">
		<ul>
			<li><a href="<?php echo get_option('home'); ?>">Blog</a></li>
			<?php wp_list_bookmarks('title_li=&categorize=0&category_name=portfolio'); ?>
			<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
		</ul>
		</div>
		</div><!--header-->
		<br clear="all" />
		<!-- main: contains sidebar stuff and the body -->
		<div id ="main">
			<?php include (TEMPLATEPATH . '/sidebar.php'); ?>