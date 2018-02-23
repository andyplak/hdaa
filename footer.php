<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bezel
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
			<?php for ($i=1; $i < 4; $i++) : ?>
				<?php if ( is_active_sidebar( 'hdaa-footer-'.$i ) ) : ?>
					<?php dynamic_sidebar( 'hdaa-footer-'.$i ); ?>
				<?php endif; ?>
			<?php endfor; ?>
			</div>
		</div>

		<?php
		// Site Info
		get_template_part( 'template-parts/site-info' );
		?>
	</footer><!-- #colophon -->

</div><!-- #page .site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
