<div class="contact-bar">
    <div class="contact-bar__phone">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-phone.svg" alt="phone icon">
        <?php do_action("ld_default", true, true); ?>
    </div>
    <div class="contact-bar__button">

    <?php 
        $link = get_field('contact_bar_link');
        
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn btn--blanc" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php else : ?>
            <a class="btn btn--blanc" href="<?php echo site_url(); ?>/contact">Contact Us</a>
        <?php endif; ?>
    </div>
</div>