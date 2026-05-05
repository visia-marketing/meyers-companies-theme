<?php

$selected  = get_sub_field('products');
$per_row   = (int) ( get_sub_field('per_row') ?: 3 );
$col_class = match( $per_row ) {
    2       => 'uk-width-1-1@s uk-width-1-2@m',
    4       => 'uk-width-1-2@s uk-width-1-4@m',
    default => 'uk-width-1-2@s uk-width-1-3@m',
};

$args = array(
    'post_type'      => 'elkhart-product',
    'posts_per_page' => -1,
    'orderby'        => 'post__in',
    'post__in'       => (array) $selected,
);

$parent_pages_query = new WP_Query( $args );

?>

    <div class="uk-flex uk-grid fc-section-cards product-cards">
        <?php foreach( $parent_pages_query->posts as $elk_prod ): ?>
            <div class="uk-width-1-1 <?php echo $col_class; ?>">
                <?php get_template_part( 'partials/content', 'product-card', array('prod_id' => $elk_prod->ID) ); ?>
            </div>
        <?php endforeach; ?>
    </div>
