<div class="fixed z-50 z w-full flex flex-wrap bg-gray-100 lg:hidden">

	<?php /*<div class="w-1/2 p-2 text-center bg-gray-500">
		<?php do_action('ld_default', false); ?>
	</div>*/ ?>

	<?php

		/*
		---------------------------------------------------------------------------------------
		Output the drop down trigger and drop down list
		---------------------------------------------------------------------------------------*/ ?>

		  <div class="w-1/2 p-2 text-center bg-gray-500">
				<?php do_action("ld_mobile_top", "Call us today"); ?>
			</div>

			<div class="location-numbers hidden absolute top-10 left-0 z-10 w-full p-4 bg-gray-500 ">
				<?php do_action("ld_default",true); ?>
				<?php do_action("ld_list", false, "inline"); ?>
			</div>

		<?php ?>

	<div class="menu-btn w-1/2 p-2 text-center bg-gray-40 flex items-center justify-center"><?php icon('bars'); ?> <span class="ml-2">Menu</span></div>

</div>
