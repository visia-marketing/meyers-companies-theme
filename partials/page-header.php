<?php 
  $page_heading = get_field('page_heading');
  $page_header_style = get_field('page_header_style');
  $show_page_header = get_field('show_page_header');
  $show_breadcrumbs = get_field('show_breadcrumbs');

  if( is_front_page() ){
    $show_page_header = false;

    get_template_part('partials/home-page', 'hero');

  }


  if( is_array( $page_header_style) ){
    if( array_key_exists( 'background', $page_header_style) ){
      if( $page_header_style['background'] ){
        $page_heading_background = $page_header_style['background'];
      }    
    }
    if( array_key_exists( 'background_image', $page_header_style) ){
      if( $page_header_style['background_image'] ){
        $page_heading_background_image = $page_header_style['background_image'];
      }    
    }
    if( array_key_exists( 'header_size', $page_header_style) ){
      if( $page_header_style['header_size'] ){
        $page_heading_size = $page_header_style['header_size'];
      }    
    }
  }


 
?>


<?php if( $show_page_header  ): ?>
  <header class="fc-page-header page-header" id="page_header_<?php echo get_the_ID();?>">
    <?php 
    if( $page_heading_background === 'image' ){
        echo wp_get_attachment_image( $page_heading_background_image, 'large', false, array( "class" => "page-header-image" ) );
    }
    ?>
    <div class="page-header-content-wrapper fc-section fc-section-<?php echo $page_heading_background;?> page-header-<?php echo $page_heading_size; ?>">
      <div class="uk-container uk-container-large uk-text-left uk-flex">
          <div class="page-header-content uk-flex uk-flex-column uk-flex-center uk-margin-medium-top uk-margin-medium-bottom">

          <?php if( $show_breadcrumbs ): ?>
            <?php get_template_part('partials/page', 'breadcrumbs'); ?>
          <?php endif; ?>

              <h1 class="uk-margin-remove">
                <?php if ( $page_heading ): echo esc_html($page_heading); else: the_title(); endif; ?>
              </h1>

          </div>
      </div>
    </div>
  </header>
<?php endif; ?>