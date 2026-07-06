<?php while (have_posts()) : the_post(); ?>
  
  <article class="page landing-page page-<?php global $post; echo esc_attr($post->post_name); ?>">

    <?php get_flexible_content(); ?>

  </article>
  
<?php endwhile; ?>