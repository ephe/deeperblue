<?php get_header(); ?>

<div id="content">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
        <div class="post" id="post-<?php the_ID(); ?>">
			<!--post content-->
			<div class="postcontent">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink"><?php the_title(); ?></a></h1>			
				<?php the_content('Read more &raquo;'); ?>
				<?php comments_template( '', true ); ?>
			</div>

			<div class="rightbar">
				<div class="date"><?php the_time('F jS, Y'); ?></div>
				<div class="tags"><h2>Tags</h2><?php the_category(', '); ?></div>
				<div class="tags"><?php edit_post_link('Edit', '', ''); ?></div>
			</div>
        </div>	
		<div class="spacer"> </div>
		
		<?php endwhile; ?>
        <div class="prevnext">
        <a href="<?php next_posts_link('Older Entries') ?>">Older Entries</a> || <a href="<?php previous_posts_link('Newer Entries') ?>">Newer Entries</a>
        </div>
        <br clear="all" />

		<?php else : ?>
		<?php endif; ?> 

</div><!--content-->

<?php get_footer(); ?>