<?php

$per_row   = get_sub_field('per_row') ?: 3;
$col_class = $per_row == 4 ? 'uk-width-1-2@s uk-width-1-4@m' : 'uk-width-1-2@s uk-width-1-3@m';


$blog_query = get_posts(array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
) );


?>

<div class="uk-flex uk-grid fc-section-cards blog-cards">
    <?php foreach( $blog_query as $post ): ?>
        <div class="uk-width-1-1 <?php echo $col_class; ?>">
            <?php get_template_part( 'partials/content', 'blog-card', array('post' => $post->ID) ); ?>
        </div>
    <?php endforeach; ?>
</div>
