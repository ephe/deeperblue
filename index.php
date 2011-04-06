<?php get_header(); ?>

<div id="content">

		<?php $my_query = new WP_Query('showposts=1');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID; ?>
        <!--first post!-->
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
        <?php endwhile; ?>
        
        <div class="spacer"> </div>
        
        <?php if (have_posts()) : while (have_posts()) : the_post();
        if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
        <!--Post loop-->
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