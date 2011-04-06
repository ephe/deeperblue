

	<!-- Side Bar -->	
<div id="leftbar">
	<!-- Each entry on the sidebar needs to be in .sideitem -->
	<!-- Intro -->
	<!--
	<h1><//?php _e('Welcome'); ?></h1>
	<p><//?php bloginfo('description'); ?></p>
	<p>
	-->
	<!-- Widgets -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

	<p>
	<!--Twitter-->
	<!-- djt classes and ID to be replaced by something that is useful to you -->
	<h1><?php _e('Twitter');  ?></h1>
	<p>
		<?php twitter_messages("leenieth"); ?>
	</p>
	<p>	
	<!--Recent-->
	<h1><?php _e('Recent Posts'); ?></h1>
	<ul>
		<?php wp_get_archives('type=postbypost&limit=5'); ?>
	</ul>	
	<p>
	
	<!--Topics-->
	<h1><?php _e('Topics'); ?></h1>
	<ul>
		<?php wp_list_categories('orderby=count&order=desc&title_li=&show_count=1'); ?>
	</ul>
	<p>
	
	<!--Links
	old: title_li=Links Out&title_before=<h1>&title_After=</h1>&-->
	<h1><?php _e('Links out'); ?></h1>
    <ul>
     <?php wp_list_bookmarks('title_li=&categorize=0&category=2'); ?>
    </ul>
	<?php endif; ?>
</div>
