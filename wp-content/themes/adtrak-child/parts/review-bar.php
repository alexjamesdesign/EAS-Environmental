<?php $reviewBg = get_field( 'reviews_bar_background', 'options' ); ?>

<div class="review-bar" style="background-image:url('<?php echo $reviewBg['sizes']['large']; ?>');">

	<div class="container">

        <p>Highly Recommended</p>

        <div class="review-bar__stars">
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
        </div>

        <a class="btn btn--noir" href="#">Google Reviews</a>

        </div>

    </div>

</div>