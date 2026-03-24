<div class="post-header">
  <?php
    if ( is_single() ) {
        $post_type = get_post_type();
        echo '<span class="post-type">' . esc_html($post_type === 'post' ? 'blog' : $post_type) . '</span>';
    }
  ?>
  <h1 class="post-title"><?php echo esc_html(get_the_title()); ?></h1>
  <?php if (get_field('post_subhead')): echo '<div class="post-subhead">' . wp_kses_post(get_field('post_subhead')) . '</div>'; endif; ?>
  <div class="post-featured-image">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail(); // Default size
    }
    ?>
  </div>
  <div class="post-meta">
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('m . d . y'); ?></time>
  </div>
</div>
<div class="post-content">
  <?php the_content();?>
</div>