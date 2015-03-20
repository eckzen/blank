<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package basic theme with sass
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'basic-theme-with-sass' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'basic-theme-with-sass' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'basic-theme-with-sass' ), 'basic theme with sass', '<a href="http://raphaeljaybernardo.com" rel="designer">Raphael Jay Bernardo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
