<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_modern_theme
 */

?>

	</div><!-- #content -->


















	<footer id="colophon" class="site-footer">
			<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h5 class="footer_title" id="footer_title_change">ABOUT</h5>
			<p class="footer_content_one">theFuture is HTML template that fits for both developers and beginners. It comes loaded with an assortment of tools and features that make customization process much easier. A pack of child themes, specically designed for various business niches, allowes users to create a fully functional site for any specific business quickly and worry-free.</p>
		</div>
		<div class="col-md-3">
			<h5 class="footer_title" id="footer_title_change">NAVIGATION</h5>
			<p class="footer_content_two" id="foot_color_change">Retina Homepage</p>
			<p class="footer_content_two" id="foot_color_change">New Page Examples</p>
			<p class="footer_content_two" id="foot_color_change">Parallax Sections</p>
			<p class="footer_content_two" id="foot_color_change">Shortcode Central</p>
			<p class="footer_content_two" id="foot_color_change">Ultimate Font Collection</p>
		</div>
		<div class="col-md-3">
			<h5 class="footer_title" id="footer_title_change">RECENT COMMENTS</h5>
			<small class="footer_content_two">Brain Williamson on</small>
			<p class="footer_content_three" id="foot_color_change">Site Speed and Search Engines Optimizations Aspects</p>
			<br>
			<small class="footer_content_two">Brian Williamson on</small>
			<p class="footer_content_three" id="foot_color_change">5 Things to Know Before You Buy an HTML Template</p>
			<br>
			<small class="footer_content_two">Brain Williamson on</small>
			<p class="footer_content_three" id="foot_color_change">Turning Your Site Into a Sales Machine</p>
		</div>
		<div class="col-md-3">
			<h5 class="footer_title">CONTACTS</h5>
			<p class="footer_content_four">Address : 457 Marmora Road, Glasgow D04 89GR</p>
			<p class="footer_content_four">Phones: (800) 123-0045 ; (800)123-0045</p>
			<p class="footer_content_four">Email: info@demolink.org</p>
			<p class="footer_content_four">We are open: Mon-Fri: 10am-8pm</p>
		</div>
	</div>
</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores_modern_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscores_modern_theme' ), 'WordPress' );
				?>
			</a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
