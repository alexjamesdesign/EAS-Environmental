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

        </div>

        <div class="content-block__secondary">

            <?php

            $blocktype = get_field('image_or_usps_two');

            if( $blocktype && in_array('usps', $blocktype) ) {
            
            if( have_rows('usps') ) :
            
                $uspType = "usps";
                $uspLocation = "";

            else : 

                $uspType = "global_usps";
                $uspLocation = "options";
            
            endif; } 

            if( $blocktype && in_array('usps', $blocktype) ) { ?>

            <ul class="content-block__usps">

            <?php while ( have_rows($uspType, $uspLocation) ) : the_row(); ?>
            
                <li>
                    <?php $icon = get_sub_field('icon'); if( !empty( $icon ) ): ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="lazyload" />
                    <?php endif; ?>
                    
                    <span><?php the_sub_field('usp'); ?></span>
                </li>

            <?php endwhile; ?>

            </ul>

            <?php }

            if( $blocktype && in_array('image', $blocktype) ) {
            $blockimage = get_field('block_image_two');
            if( $blockimage ):

                // Image variables.
                $url = $blockimage['url'];
                $title = $blockimage['title'];
                $alt = $blockimage['alt'];
                $caption = $blockimage['caption'];

                // Thumbnail size attributes.
                $size = 'img-490-550';
                $thumb = $blockimage['sizes'][ $size ];
                $width = $blockimage['sizes'][ $size . '-width' ];
                $height = $blockimage['sizes'][ $size . '-height' ];

                ?>

                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="lazyload" />

            <?php endif; } ?>

        </div>

    </div>

</div>