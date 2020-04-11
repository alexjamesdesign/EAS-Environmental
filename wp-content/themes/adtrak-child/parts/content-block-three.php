<div class="content-block content-block--three">

    <div class="content-block__background"></div>

    <?php $blockorderthree = get_field('blockorderthree'); $includeMap = get_field('include_map');?>

	<div class="container <?php if( $blockorderthree && in_array('right', $blockorderthree) ) { ?>container--reverse<?php } ?>">

        <div class="content-block__body <?php if( $includeMap && in_array('no', $includeMap) ) { ?>content-block__body--full<?php } ?>">

            <div class="content-block__title-container">
                <?php if( get_field('title_icon_three') ): ?>
                <div class="content-block__icon">
                    <img src="<?php the_field('title_icon_three'); ?>" alt="icon" />
                </div>
                <?php endif; ?>
                <p class="title"><?php the_field('title_three'); ?></p>
            </div>
            
            <?php the_field('content_three'); ?>

            <?php include locate_template('parts/contact-bar.php'); ?>

        </div>

        
        <?php

        if( $includeMap && in_array('yes', $includeMap) ) : ?>

            <div class="content-block__secondary">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157656.24259685483!2d0.47733346150765404!3d51.87229783616024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd683eff8775038b4!2sEssex%20Auto%20Salvage!5e0!3m2!1sen!2suk!4v1586593023787!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

        <?php endif; ?>

    </div>

</div>