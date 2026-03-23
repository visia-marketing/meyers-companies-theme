
  <?php get_template_part('flexible/section_header'); ?>  

  <?php 
  $column_ratio = get_sub_field('column_ratio');
  $content_alignment = get_sub_field('content_alignment');
  $vertical_alignment = get_sub_field('vertical_alignment') ?: 'top';
  $valign_class = $vertical_alignment === 'middle' ? 'uk-flex-middle' : 'uk-flex-top';


  $left_col = '';
  $right_col = '';


switch ($column_ratio) {
  case '1-3':
    $left_col = 'uk-width-1-3@m';
    $right_col = 'uk-width-2-3@m';
    break;
  case '2-3':
    $left_col = 'uk-width-2-3@m';
    $right_col = 'uk-width-1-3@m';
    break;
  default: // '1-2' or empty
    $left_col = 'uk-width-1-2@m';
    $right_col = 'uk-width-1-2@m';
}


  ?>

  <div class="uk-grid uk-grid-large uk-child-width-expand <?php echo esc_attr($valign_class); ?>">

      <div class="uk-width-1-1@s <?php echo esc_attr($left_col); ?> uk-flex-stretch content column">
        <div class="content uk-width-1-1 uk-flex uk-flex-column uk-height-1-1 uk-flex-stretch uk-flex-<?php echo esc_attr($content_alignment); ?>">
          <?php echo get_sub_field('column_1'); ?>
        </div>
      </div>
      <div class="uk-width-1-1@s <?php echo esc_attr($right_col); ?> uk-flex-stretch column">
        <div class="content uk-width-1-1 uk-flex uk-flex-column uk-height-1-1 uk-flex-<?php echo esc_attr($content_alignment); ?>">
          <?php echo get_sub_field('column_2'); ?>
        </div>
      </div>

  </div>
