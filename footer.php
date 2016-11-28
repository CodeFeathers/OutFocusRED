<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OutFocus_RED
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( '%1$s, coded with ❤ by %2$s.', 'outfocusred' ), 'OutFocusRED', '<a href="http://www.thefeathers.in/code" rel="designer">CodeFeathers | Muthu Kumar</a>' ); ?>
			<p> OutFocusRED is in version 2.9.2 (beta). Please report any bugs or recommendations <a href="http://www.thefeathers.in/code">here!</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>