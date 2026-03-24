<article class="post-archive">

  <section class="post-content">
    <div class="uk-container">

      <?php if (!have_posts()) : ?>
        <div class="uk-alert uk-alert-warning">
          <?php _e('Sorry, no results were found.', 'visia_starter_theme'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <div class="uk-width-1-1 uk-width-1-3@m">
          <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    </div>
  </section>

</article>





