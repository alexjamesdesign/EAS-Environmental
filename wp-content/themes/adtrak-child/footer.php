<?php
/**
 * The template for displaying the footer within your theme.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.1.0
 */
?>

	<footer>
		<div class="container">
			<div class="grid grid3_12">
				<a href="<?php echo home_url(); ?>">
					<?php $image = get_field('site_logo','option'); if( !empty($image) ): ?>
						<img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php bloginfo('title'); ?> Logo" />
					<?php endif; ?>
				</a>
			</div>

			<div class="grid grid3_12">
				<h6>Explore</h6>
				<?php wp_nav_menu([
					'menu' => 'Footer Menu', 
					'menu_class' => 'nav nav--footer', 
					'container' => '' 
				]); ?>
			</div>

			<div class="grid grid6_12">
		        <p>Address: <?php address_inline(); ?></p>
		        <p>Email: <a href="mailto:<?php echo get_field('site_email', 'option'); ?>"><?php the_field('site_email', 'option'); ?></a></p>
		        <p><?php bloginfo('title'); ?> is a registered company in England.</p>
				<?php if(get_field('reg_number', 'option')): ?>
					<p>Registered Number: <?php the_field('reg_number', 'option'); ?></p>
				<?php endif; ?>
				<?php if(get_field('vat_number', 'option')): ?>
					<p>VAT Number: <?php the_field('vat_number', 'option'); ?></p>
				<?php endif; ?>
		        <p>&copy; <?php bloginfo('title'); ?> <?php echo date('Y'); ?>. All Rights Reserved</p>

				<?php 
				/** 
				 * get_adtrak_logo accepts two arguments 
				 * 'colour' (as white, black, orange/default) and 
				 * 'icon' (as true or false) 
				 * e.g. for the black icon use get_adtrak_logo('black', true)
				*/ ?>
		        <a class="adtrak" href="https://www.adtrak.co.uk"><?php echo get_adtrak_logo(); ?></a>
		    </div>
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
