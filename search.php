<?php get_header(); ?>

<div id="content">


        <?php if (have_posts()) : while (have_posts()) : the_post();
    	
		<div class="post" id="post-<?php the_ID(); ?>">
			<!--post content-->
			<div class="postcontent">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink"><?php the_title(); ?></a></h1>			
				<?php the_content('Read more &raquo;'); ?>
			</div>
			<div class="rightbar">
				<div class="date"><?php the_time('F jS, Y'); ?></div>
				<div class="tags"><?php the_category('<h2>Tags</h2>',', '); ?></div>
				<div class="tags"><?php edit_post_link('Edit', '', ''); ?></div>
			</div>
			<div class="postfooter">
				<div class="commentline"><?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments'),__('Comments disabled') ); ?></div>
			</div>
        </div>	
		<div class="spacer"> </div>
		
		<?php endwhile; ?>

        <div class="prevnext">
        <a href="<?php next_posts_link('Older Entries') ?>">Older Entries</a> || <a href="<?php previous_posts_link('Newer Entries') ?>">Newer Entries</a>
        </div>
        <br clear="all" />
            
		<?php else : ?>
        
        <h2 class="search">Sorry! Your search for "<?php echo $_GET['s']; ?>" got no results. :<
		<?php endif; ?> 

</div><!--content-->

<?php get_footer(); ?>