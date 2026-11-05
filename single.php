<article class="post-single">
  <section class="post-content-wrapper">
      <?php

      $args = array(
            'page_heading' => get_the_title(),
            'header_style' => array(
              'background' => 'dark',
              'background_image' => 0,
              'header_size' => '',
            ),
            'show_header' => 1,
            'show_breadcrumbs' => 1,
            'heading_eyebrow' => 'news'
      );
      ?>

      <?php get_template_part('partials/page-header', null, $args);?>


      <div class="post-featured-image uk-container uk-container-large uk-margin-auto ">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail(); // 
        }
        ?>
      </div>


    <div class="uk-container uk-container-small">
      <div class="uk-width-1-1 uk-margin-auto">
        <?php get_template_part('partials/content-single', get_post_type()); ?>
      </div>
    </div>
  </section>
</article>

<?php get_template_part('flexible/section_call_to_action', null, array( 'source' => 'default')); ?>