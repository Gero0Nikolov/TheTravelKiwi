<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Travel_Kiwi
 */

$mobile_class= "";
if ( wp_is_mobile() ) { $mobile_class = "mobile"; }
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php echo $mobile_class; ?>" role="contentinfo">
		<div class="left-container-50p">
			<a href="<?php echo get_site_url(); ?>" class="site-logo-link hvr-wobble-horizontal">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_subtitled.png" title="The Travel Kiwi" alt="The Travel Kiwi Logo Subtitled" class="site-logo" />
			</a>
		</div>
		<div class="right-container-50p">
			<a href="#" class="footer-link">About us</a>
			<span class="splitter">&bull;</span>
			<a href="#" class="footer-link">Facebook</a>
			<span class="splitter">&bull;</span>
			<a href="#" class="footer-link">Instagram</a>
			<span class="splitter">&bull;</span>
			<a href="#" class="footer-link">Twitter</a>
		</div>
		
		<?php /*<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the_travel_kiwi' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'the_travel_kiwi' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'the_travel_kiwi' ), 'the_travel_kiwi', '<a href="https://profiles.wordpress.org/geronikolov/" rel="designer">Gero Nikolov</a>' ); ?>
		</div> */ ?><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
