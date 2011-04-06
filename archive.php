<?php get_header(); ?>

<div id="content"> 
                
<?php if (have_posts()) : ?>
	<div class="search">
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="search">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="search">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="search">Archive for <?php the_time('F jS, Y'); ?>:</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="search">Archive for <?php the_time('F Y'); ?>:</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="search">Archive for <?php the_time('Y'); ?>:</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="search">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="search">Blog Archives</h2>
 	  <?php } ?>
	</div>
		<?php while (have_posts()) : the_post(); ?>
        
        <div class="post" id="post-<?php the_ID(); ?>">
			<!--post content-->
			<div class="postcontent">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink"><?php the_title(); ?></a></h1>			
				<?php the_content('Read more &raquo;'); ?>
			</div>
			<div class="rightbar">
				<div class="date"><?php the_time('F jS, Y'); ?></div>
				<div class="tags"><h2>Tags</h2><?php the_category(', '); ?></div>
				<div class="tags"><?php edit_post_link('Edit', '', ''); ?></div>
			</div>
			<div class="postfooter">
				<div class="commentline"><?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments'),__('Comments disabled') ); ?></div>
			</div>
        </div>
		<div class="spacer"> </div>
        <!--post-->
		<?php endwhile; ?>
		<div class="prevnext">
        <a href="<?php next_posts_link('Older Entries') ?>">Older Entries</a> || <a href="<?php previous_posts_link('Newer Entries') ?>">Newer Entries</a>
        </div>
		<br clear="all" />

            
		<?php else : ?>
		<?php endif; ?> 

</div><!--content-->

<?php get_footer(); ?>