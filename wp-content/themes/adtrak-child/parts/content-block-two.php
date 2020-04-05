<div class="content-block">

    <div class="content-block__background"></div>

    <?php $blockordertwo = get_field('blockordertwo'); ?>

	<div class="container <?php if( $blockordertwo && in_array('right', $blockordertwo) ) { ?>container--reverse<?php } ?>">

        <div class="content-block__body">

            <div class="content-block__title-container">
                <?php if( get_field('title_icon_two') ): ?>
                <div class="content-block__icon">
                    <img src="<?php the_field('title_icon_two'); ?>" alt="icon" />
                </div>
                <?php endif; ?>
                <p class="title"><?php the_field('title_two'); ?></p>
            </div>
            
            <?php the_field('content_two'); ?>

            <?php include locate_template('parts/contact-bar.php'); ?>

        </div>

        <div class="content-block__secondary">

            <?php

            $blocktype = get_field('image_or_usps_two');

            if( $blocktype && in_array('usps', $blocktype) ) {
            
            if( have_rows('usps_two') ) : ?>

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

            <?php
            $image = get_field('block_image_two');
            if( $image ):

                // Image variables.
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
                $caption = $image['caption'];

                // Thumbnail size attributes.
                $size = 'img-490-550';
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];

                // Begin caption wrap.
                if( $caption ): ?>
                    <div class="wp-caption">
                <?php endif; ?>

                <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>">
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                </a>

                <?php 
                // End caption wrap.
                if( $caption ): ?>
                    <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </div>

    </div>

</div>