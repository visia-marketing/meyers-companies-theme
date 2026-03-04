<?php
if( array_key_exists( 'prod_id', $args ) ){
    $id = $args['prod_id'];
}
?>



<div class="uk-card uk-margin-medium-bottom">

    <div class="uk-card-media-top">
        <a href="<?php echo get_the_permalink($id); ?>" class="uk-flex uk-width-1-1">
            <?php echo get_the_post_thumbnail($id, 'elk-product-thumb', array('class' => 'uk-width-1-1')) ?: '<div class="placeholder"></div>'; ?>
        </a>
    </div>

    <div class="card-body">
        <h3 class="card-title"><?php echo get_the_title($id); ?></h3>
        <p><?php echo get_the_excerpt($id); ?></p>

        <a class="uk-button uk-button-arrow uk-button-text" href="<?php echo get_the_permalink($id); ?>" >View Product</a>
    </div>

</div>