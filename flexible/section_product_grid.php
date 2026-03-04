<?php

$top_level = get_sub_field('show_top_level');
$parent_product = get_sub_field('parent_product');




if( $top_level == 1 ){

    $args = array(
        'post_type'      => 'elkhart-product',
        'post_parent'    => 0, // This restricts the query to only top-level pages
        'posts_per_page' => -1, // Use -1 to return all matching pages, overriding the default limit
        'order'          => 'ASC',
        'orderby'        => 'menu_order' // Often used for ordering pages hierarchically
    );

    
}else{

    if( is_array($parent_product) ){
        $parent_id = $parent_product[0];
    }

    $args = array(
        'post_type'      => 'elkhart-product',
        'post_parent'    => $parent_id, // This restricts the query to only top-level pages
        'posts_per_page' => -1, // Use -1 to return all matching pages, overriding the default limit
        'order'          => 'ASC',
        'orderby'        => 'menu_order' // Often used for ordering pages hierarchically
    );
}

$parent_pages_query = new WP_Query( $args );

?>

    <div class="uk-flex uk-grid-medium <?php if(  $parent_pages_query->found_posts < 3 ): ?>uk-flex-center<?php else: ?>uk-flex-left <?php endif;?> fc-section-cards product-cards" uk-grid>
        <?php foreach( $parent_pages_query->posts as $elk_prod ): ?>
            <div class="uk-width-1-2 uk-width-1-3@m">
                <?php get_template_part( 'partials/content', 'product-card', array('prod_id' => $elk_prod->ID) ); ?>
            </div>
        <?php endforeach; ?>
    </div>

