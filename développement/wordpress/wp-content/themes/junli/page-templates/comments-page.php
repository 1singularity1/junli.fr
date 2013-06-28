<?php
/**
 * Template Name: Commentaires
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>