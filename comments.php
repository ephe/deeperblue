<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'odd';
?>

<!-- You can start editing here. -->
<div id="commentsbox">

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number()),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="prevnext">
			<a href="<?php previous_comments_link('Older Comments') ?>">Older Entries</a> || <a href="<?php next_comments_link('Newer Comments') ?>">Newer Entries</a>
			</div>
			
			<!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
					<?php wp_list_comments(); ?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="prevnext">
			<a href="<?php previous_comments_link('Older Comments') ?>">Older Entries</a> || <a href="<?php next_comments_link('Newer Comments') ?>">Newer Entries</a>
			</div>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(); ?></div>