<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- content -->
	<div id="footer">
		<div id="footer-left">
			<img class="separateur_footer"  src="<?php echo get_template_directory_uri(); ?>/img/pointille_vertical.png"/>
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
				<li>
				<?php endif; ?>
			</ul>
		</div>
		<div id="footer-middle">
			<img class="separateur_footer"  src="<?php echo get_template_directory_uri(); ?>/img/pointille_vertical.png"/>
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
				<li>
				<?php endif; ?>
			</ul>
		</div>
		<div id="footer-right">
			<img class="separateur_footer"  src="<?php echo get_template_directory_uri(); ?>/img/pointille_vertical.png"/>
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 3') ) : ?>
				<li><a href="<?php echo get_home_url()?>/?page_id=76">Sites amis</a>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</body>
</html>