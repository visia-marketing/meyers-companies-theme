<?php
$fields = get_sub_field('accordion');
$length = 0;
if( is_array($fields) ){
    $length = count($fields);
}

$accordion_layout = get_sub_field('accordion_layout');
$accordion_container_class = 'fc-section-accordion-simple '.$accordion_layout;
$accordion = $fields;
?>

<div class="fc-section-columns <?php echo esc_attr($accordion_container_class); ?>">
  <?php get_template_part('flexible/section_header'); ?>

  <?php if( is_array( $accordion ) ): ?>

    <ul class="uk-accordion uk-accordion-default" uk-accordion>

      <?php foreach ($accordion as $item ): ?>
        <li class="uk-margin-remove-top">
          <a class="uk-accordion-title uk-flex uk-flex-middle uk-flex-between" href><h4 class="uk-margin-top uk-margin-bottom"><?php echo esc_html($item['heading']); ?></h4> <span uk-icon="icon: chevron-down; ratio: 1.5"></span></a>
          <div class="uk-accordion-content uk-margin-medium-bottom"><?php echo wp_kses_post($item['content']); ?></div>
        </li>
      <?php endforeach; ?>

    </ul>

  <?php endif; ?>
</div>
