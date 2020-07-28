<?php $reviewBg = get_field( 'reviews_bar_background', 'options' ); ?>

<div class="review-bar" style="background-image:url('<?php echo $reviewBg['sizes']['large']; ?>');">

	<div class="container">

        <p>Highly Recommended</p>

        <div class="review-bar__stars">
            <i class='fa fa-star animate star-one'></i>
            <i class='fa fa-star animate star-two'></i>
            <i class='fa fa-star animate star-three'></i>
            <i class='fa fa-star animate star-four'></i>
            <i class='fa fa-star animate star-five'></i>
        </div>

        <a class="btn btn--noir" href="https://bit.ly/EAS-Environmental-Read-Reviews" target="_blank">Google Reviews</a>
        <a class="btn btn--noir" href="https://bit.ly/EAS-Environmental-GMB-Review" target="_blank">Write a Review</a>

    </div>

</div>