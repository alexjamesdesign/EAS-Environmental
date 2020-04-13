<?php
/**
 * The template for rendering any single pages with no template.
 * @author  Adtrak
 * @package AdtrakChild
 * @version 1.0.0
 */
// Template Name: FAQs
?>

<?php
    get_header();
    include locate_template('parts/hero.php');
?>

<main class="site-content">
    <div class="container">
        
    <?php

        if( have_rows('faqs') ): ?>

        <div class="faqs-container">
      
            <?php while ( have_rows('faqs') ) : the_row(); ?>

                <div class="faq">
                    <div class="faq-inner">
                        <p class="faq__question"><?php the_sub_field('question'); ?></p>
                        <p class="faq__answer"><?php  the_sub_field('answer'); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
