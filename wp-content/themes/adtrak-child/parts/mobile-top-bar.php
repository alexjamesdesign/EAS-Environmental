<div class="mobile-top-bar Fixed">

	<!-- <span class="mobile-top-btn mobile-top-btn--single-number"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-phone.svg" alt="phone icon"><?php do_action("ld_default", false, true); ?></span> -->

	<?php do_action("ld_mobile_top", "Call us today <i class='fa fa-caret-down' aria-hidden='true'></i>"); ?>

	<div class="location-numbers">
		<?php do_action("ld_default",true); ?>
		<?php do_action("ld_list", false, "inline"); ?>
	</div>
    
	<div class="menu-btn mobile-top-btn mobile-top-btn--menu"><i class="fa fa-bars"></i> Menu</div>

</div>