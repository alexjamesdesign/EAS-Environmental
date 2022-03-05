<script>
window.addEventListener('load', function() {
  baguetteBox.run('.gallery');
});
</script>

<div class="page-gallery">

    <div class="page-gallery__container">

    <?php 

        $images = get_field('page_gallery', 'options');

        if( $images ): ?>

        <div class="page-gallery">

            <div class="gallery owl-gallery owl-carousel owl-theme">
                
            <?php foreach( $images as $image ): ?>

                <a href="<?php echo $image['sizes']['large']; ?>" class="swipebox" rel="gallery-1">
                
                    <img class="lazyload" src="" data-src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />

                </a>
            
            <?php endforeach; ?>
                
            </div>
        </div>

    <?php endif; ?> 

</div>