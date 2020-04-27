<?php
/**
 * The template for rendering any single pages with no template.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */
?>

<?php
    get_header();
    include locate_template('parts/hero.php');
?>

	<main class="site-content">
		<?php include locate_template('parts/content-block.php'); ?>
		<?php include locate_template('parts/review-bar.php'); ?>
		<?php include locate_template('parts/content-block-two.php'); ?>
		<?php include locate_template('parts/content-block-three.php'); ?>
	</main>

	<?php include locate_template('parts/page-gallery.php'); ?>

<?php get_footer(); ?>
