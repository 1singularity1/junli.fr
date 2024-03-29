<?php
/**
 * Template Name: Amis
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="subtitle">
		<?php echo get_the_subtitle(); ?>
	</div>
	<div class="content-texte">
		<div class="amis">
		<?php
			if ( has_post_thumbnail() ) {
			 	the_post_thumbnail(); // si l'article à une miniature
			} else {
			 // s'il n'en a pas...
			}
		?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>