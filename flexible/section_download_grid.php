<?php
$downloads = get_sub_field('download_ids');

if ($downloads) : ?>

  <div class="fc-section-downloads">
    <?php get_template_part('flexible/section_header'); ?>

    <div class="download-grid">

      <?php foreach ($downloads as $post) :
        if (!$post) continue;

        $title     = get_the_title($post->ID);
        $permalink = get_permalink($post->ID);
        $thumbnail = get_the_post_thumbnail($post->ID, 'large');
      ?>

        <div class="download-item">
          <a href="<?php echo esc_url($permalink); ?>" target="_blank" rel="noopener">
            <div class="download-thumbnail">
              <?php echo $thumbnail; ?>
            </div>
          </a>
          <a href="<?php echo esc_url($permalink); ?>" target="_blank" rel="noopener" class="download-title"><i class="fa-sharp fa-solid fa-download"></i><?php echo esc_html($title); ?></a>
        </div>

      <?php endforeach; ?>

    </div>
  </div>

<?php endif; ?>
