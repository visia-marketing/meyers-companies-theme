

<div class="fc-section-accordion-tabs">
  <?php get_template_part('flexible/section_header'); ?>

  <?php
  $tabs = get_sub_field('tabs'); 
  if( is_array($tabs) ){
    $tab_count = sizeof( $tabs );
  }else{
    return;
  }
  

  $tabs_id = 'tabs-'.rand(1000,9999);

  ?>

  <?php if( have_rows('tabs') ): ?>



    <div class="uk-container "> 
    <div class="uk-container">
      <ul class="uk-tab tabs <?php echo $tab_count > 4 ? 'stretch-tabs' : ''; ?>" id="<?php echo esc_attr($tabs_id); ?>" uk-tab>
        <?php while( have_rows('tabs') ): the_row(); ?>
          <li>
            <a href="#"><?php echo esc_html(get_sub_field('tab_name')); ?></a>
          </li>
        <?php endwhile; ?>
      </ul>
      <ul class="uk-switcher tabs-content" id="<?php echo esc_attr($tabs_id); ?>-content">
        <?php while( have_rows('tabs') ): the_row(); ?>
          <li class="tabs-panel" id="tab-<?php echo get_row_index(); ?>_<?php echo esc_attr($tabs_id); ?>">
            <?php if( have_rows('accordion') ): ?>
              <div class="accordion in-tabs" uk-accordion>
                <?php while( have_rows('accordion') ): the_row(); ?>
                  <li class="accordion-item">
                    <a class="uk-accordion-title accordion-topic" href>
                      <h3><?php echo esc_html(get_sub_field('heading')); ?></h3>
                      <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <div class="uk-accordion-content accordion-response"><?php echo get_sub_field('content'); ?></div>
                  </li>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
    </div>
  <?php endif; ?>
</div>