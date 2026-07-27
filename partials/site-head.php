<head>
	
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>!function(){window.semaphore=window.semaphore||[],window.ketch=function(){window.semaphore.push(arguments)};var e=document.createElement("script");e.type="text/javascript",e.src="https://global.ketchcdn.com/web/v3/config/myers_industries_inc/elkhart/boot.js",e.defer=e.async=!0,document.getElementsByTagName("head")[0].appendChild(e)}();</script>

  <?php $font = get_field( 'google_typekit_font_url', 'options'); ?>
  <?php if( strpos( $font, 'google' ) !== false || empty($font) ): ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php endif; ?>

  <?php wp_head(); ?> 

  <?php if ( get_field('google_tag_manager_id', 'options') ):?>
    <!-- Google Tag Manager -->
    <script nonce="<?php echo esc_attr($csp_nonce ?? ''); ?>">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo esc_js(get_field('google_tag_manager_id', 'options'));?>');</script>
    <!-- End Google Tag Manager -->
  <?php endif; ?>

  <?php if( get_field('header_scripts', 'options') ): ?>
    <?php 
    echo '<!-- Header Scripts -->';
      $header_scripts =get_field('header_scripts', 'options');
      echo $header_scripts;
       ?>
  <?php endif; ?>

</head>
