<?php
//----------------------------------------------------------------------------------------------------------------------
// Blog Sidebar
//----------------------------------------------------------------------------------------------------------------------
if (is_home() || is_singular('post') || is_month() || is_category() || is_search()) : ?>

	<div class="news-block">
		<?php get_search_form(); ?>
	</div>

	<div class="news-block">
		<h3 class="news-block__title">Archives</h3>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</div>

	<div class="news-block">
		<h3 class="news-block__title">Categories</h3>
		<ul>
		    <?php wp_list_categories( array(
		        'title_li' => ''
		    ) ); ?>
		</ul>
	</div>

<?php else: ?>

	<h2>Location</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157656.24259685483!2d0.47733346150765404!3d51.87229783616024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd683eff8775038b4!2sEssex%20Auto%20Salvage!5e0!3m2!1sen!2suk!4v1586593023787!5m2!1sen!2suk" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
	<h2>Get Directions</h2>
	<form class="directions" action="http://maps.google.com/maps" method="get" target="_blank">
		<input type="text" name="saddr" placeholder="Enter postcode"/>
		<input type="hidden" name="daddr" value="CM77 8DL" />
		<input name="get-directions" class="get-directions btn btn btn--blanc" type="submit" value="Get Directions" />
	</form>

	<h2>Hours</h2>
	<?php
		if( have_rows('opening_hours', 'options') ): ?>
		<ul class="opening-hours">
			<?php while ( have_rows('opening_hours', 'options') ) : the_row(); ?>
				<li><?php the_sub_field('day'); ?> <span><?php the_sub_field('times'); ?></span></li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	<?php endif; ?>