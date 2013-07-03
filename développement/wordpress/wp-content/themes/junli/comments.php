<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<div class="subtitle">
			<?php echo get_comments_number();?> internautes ont donné leur avis.
		</div>

		<div class="navigation">
		</div>
 		
		<?php $args = array(
				'walker'            => null,
				'max_depth'         => '5',
				'style'             => 'ul',
				'callback'          => 'junli_comment',
				'end-callback'      => null,
				'type'              => 'all',
				'reply_text'        => 'Répondre',
				'page'              => null,
				'per_page'          => 100,
				'avatar_size'       => 32,
				'reverse_top_level' => 'true',
				'reverse_children'  => 'true',
				'format'            => 'html5', //or html5 @since 3.6
				'short_ping'        => 'false' // @since 3.6
		); ?>
		
 		<div class="commentlist">
			<?php wp_list_comments($args);?>
		</div>
		
		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->