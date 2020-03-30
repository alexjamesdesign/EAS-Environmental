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

        </div>

    </div>

</div>