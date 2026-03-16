<div class="fc-section-columns">
  <?php get_template_part('flexible/section_header'); ?>
  <div class="uk-flex uk-flex-wrap uk-child-width-1-1@s uk-child-width-1-3@m">

      <div>
        <div class="content content-columns">
          <?php echo wp_kses_post(get_sub_field('column_1')); ?>
        </div>
      </div>
      <div>
        <div class="content content-columns">
          <?php echo wp_kses_post(get_sub_field('column_2')); ?>
        </div>
      </div>
      <div>
        <div class="content content-columns">
          <?php echo wp_kses_post(get_sub_field('column_3')); ?>
        </div>
      </div>

  </div>
</div>