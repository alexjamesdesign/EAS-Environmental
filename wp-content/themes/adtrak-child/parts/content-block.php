<div class="content-block">

	<div class="container">

        <div class="content-block__body">

            <div class="content-block__title-container">
                <?php if( get_field('title_icon') ): ?>
                <div class="content-block__icon">
                    <img src="<?php the_field('title_icon'); ?>" alt="icon" />
                </div>
                <?php endif; ?>
                <p class="title"><?php the_field('title'); ?></p>
            </div>
            
            <?php the_field('content'); ?>

            <?php include locate_template('parts/contact-bar.php'); ?>

        </div>

        <div class="content-block__secondary">

            <?php

            $blocktype = get_field('image_or_usps');

            if( $blocktype && in_array('usps', $blocktype) ) {
            
            if( have_rows('usps') ) : ?>

            <ul class="content-block__usps">
            
                <?php while ( have_rows('usps') ) : the_row(); ?>

                <li>
                    <?php $icon = get_sub_field('icon'); if( !empty( $icon ) ): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                    <?php endif; ?>
                    
                    <span><?php the_sub_field('usp'); ?></span>
                </li>

                <?php endwhile; ?>

            </ul>
            
            <?php endif; } ?>

        </div>

    </div>

</div>