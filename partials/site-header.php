<?php if (has_nav_menu('top_navigation')) : ?>
<div class="top-header">
	<div class="uk-container uk-container-xlarge">
		<div class="uk-width-1-1">
      <div class="uk-flex uk-flex-between uk-flex-middle">
        <?php $top_header_text = get_field('top_header_text', 'options'); if ($top_header_text) : ?>
          <span class="top-header-text"><?php echo esc_html($top_header_text); ?></span>
        <?php endif; ?>
        <div class="top-header-search show-for-medium uk-margin-auto-left"><?php get_template_part('searchform'); ?></div>
        <?php
          wp_nav_menu(['theme_location' => 'top_navigation', 'depth' => 1, 'menu_class' => 'top-header-navigation top-header-navigation-right']); 
        ?>
      </div>
		</div>
	</div>
</div>
<?php endif; ?>

<header class="main-header">
	<div class="uk-container uk-container-xlarge uk-flex uk-flex-middle uk-margin-top uk-margin-bottom">
    <div class="uk-width-1-5@m">
      <div class="main-logo">
        <a href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_field('main_logo', 'options'));?>" alt="<?php bloginfo('name'); ?>" loading="lazy"></a>
      </div>
    </div>
    <div class="uk-width-expand uk-flex uk-flex-right uk-flex-middle hide-for-medium">
      <button class="menu-icon" type="button" uk-toggle="target: #uk-off-canvas"></button>
		</div>
    <div class="uk-width-expand@m show-for-medium">
      <div class="primary-navigation-wrapper">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'depth' => 2, 'menu_class' => 'primary-navigation uk-padding-remove uk-margin-remove', 'items_wrap' => '<ul class="%2$s" id="primary-navigation">%3$s</ul>' ]);
          endif;
        ?>
      </div>
    </div>
  </div>
</header>