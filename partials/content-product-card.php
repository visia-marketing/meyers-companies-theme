<?php
if( array_key_exists( 'prod_id', $args ) ){
    $id = $args['prod_id'];
}
?>

<div class="uk-card uk-margin-medium-bottom">

    <div class="uk-card-media-top">
        <a href="<?php echo esc_url(get_the_permalink($id)); ?>" class="uk-flex uk-width-1-1">
            <?php echo get_the_post_thumbnail($id, 'elk-product-thumb', array('class' => 'uk-width-1-1')) ?: '<div class="placeholder"></div>'; ?>
        </a>
    </div>

    <div class="card-body">
        <h3 class="card-title"><a href="<?php echo esc_url(get_the_permalink($id)); ?>"><?php echo esc_html(get_the_title($id)); ?></a></h3>
        <p><?php
            $excerpt = get_post_field('post_excerpt', $id);
            if ( ! $excerpt ) {
                $excerpt = wp_trim_words(get_post_field('post_content', $id), 35);
            }
            echo wp_kses_post($excerpt);
        ?></p>
        <a class="uk-button uk-button-arrow uk-button-text" href="<?php echo esc_url(get_the_permalink($id)); ?>">View Product</a>
    </div>

</div>