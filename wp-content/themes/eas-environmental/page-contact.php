<?php
/**
 * The template for rendering any single pages with no template.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */
// Template Name: Contact
?>

<?php
    get_header();
    include locate_template('parts/hero.php');
?>

<main class="site-content">
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

            <article class="copy">
                <h1><?php the_field('h1'); ?></h1>
                <?php the_content(); ?>
                <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
            </article>

            <aside class="sidebar">
                <?php get_sidebar(); ?>
            </aside>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php include locate_template('parts/page-gallery.php'); ?>

<?php get_footer(); ?>
