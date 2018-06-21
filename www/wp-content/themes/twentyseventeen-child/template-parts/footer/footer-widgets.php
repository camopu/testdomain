<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<div class="textwidget"><a href="https://wordpress.org/">Proudly powered by WordPress</a></div>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-2">
				<section id="text-2" class="widget widget_text">
					<h2 class="widget-title">Contact Info</h2>			
					<div class="textwidget">
						<p>Call Us: 0987654321</p>
						<p>Email: <a href="mailto:testdomain@mail.to">testdomain@mail.to</a></p>
						<p><a href="#popup1" class="btn">Contact Us</a></p>
					</div>
				</section>
				<section id="text-4" class="widget widget_text">
					<h2 class="widget-title">Contact Info mobile</h2>
					<div class="textwidget">
						<a href="tel:0987654321" class="btn">Call Us</a>
						<a href="mailto:testdomain@mail.to" class="btn">Email </a>
						<a href="#popup1" class="btn">Contact Us</a></div>
				</section>
				<section id="text-5" class="widget widget_text">
					<div class="textwidget">
						<div id="popup1" class="overlay">
							<div class="popup">
								<h2>Title</h2>
								<a class="close" href="#">×</a>
								<div class="content">
									Thank to pop me out of that button, but now i'm done so you can close this window.
								</div>
							</div>
						</div>
					</div>
				</section>			
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
