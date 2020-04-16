<?php
/**
 * The template for displaying the footer within your theme.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.1.0
 */
?>

	<footer>
		

		<div class="footer-left">

			<div class="container">

				<div class="grid grid6_12">
					<h6>Services</h6>
					<?php
					// Secondary Menu
						if(has_nav_menu('primary')) {
							wp_nav_menu([
								'menu' => 'Primary Menu',
								'menu_class' => "menu-primary",
								'container' => ''
							]);
						}
					?>
					
				</div>

				<div class="grid grid6_12">
					<h6>Navigate</h6>
					<?php
					// Secondary Menu
					if(has_nav_menu('secondary')) {
						wp_nav_menu([
							'menu' => 'Secondary Menu',
							'menu_class' => "menu-secondary",
							'container' => ''
						]);
					}
					?>

					<ul>
						<li><a href="http://localhost:8888/EAS-Environmental/privacy-policy/">Privacy Policy</a></li>
					</ul>
				</div>

				<div class="grid grid12_12 footer-bottom">

					<p>Address: <?php address_inline(); ?></p>

					<?php if(get_field('reg_number', 'option')): ?>
						<p>Registered Number: <?php the_field('reg_number', 'option'); ?></p>
					<?php endif; ?>
					<?php if(get_field('vat_number', 'option')): ?>
						<p>VAT Number: <?php the_field('vat_number', 'option'); ?></p>
					<?php endif; ?>
					<p><?php bloginfo('title'); ?> is a registered company in England.</p>
					<p>&copy; <?php bloginfo('title'); ?> <?php echo date('Y'); ?>. All Rights Reserved</p>

				</div>
			
			</div>

		</div>

		<?php $footerImage = get_field( 'footer_image' , 'options' ); ?>

		<div class="footer-right" style="background-image:url('<?php echo $footerImage['sizes']['large']; ?>');">

			<a href="<?php echo home_url(); ?>">
				<?php $image = get_field('site_logo_white','option'); if( !empty($image) ): ?>
					<img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php bloginfo('title'); ?> Logo" />
				<?php endif; ?>
			</a>

		</div>

	</footer>

	<!-- Back to top arrow -->
	<div class="back-top-wrap">
	    <p id="back-top">
	        <a><i class="fa fa-arrow-up fa-2x"></i> Top</a>
	    </p>
	</div>

</div><!-- wrapper -->


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts/lazysizes.min.js" async=""></script>

<?php wp_footer(); ?>
	
</body>
</html>
