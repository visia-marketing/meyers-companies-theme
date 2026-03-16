<?php  
  $home_hero_content = get_field('home_hero_content'); 
  $home_hero_background_image = get_field('home_hero_background_image');
?>


<header class="fc-page-header page-header" id="home_hero_<?php echo absint(get_the_ID()); ?>">
    <?php 
    if(  $home_hero_background_image ){
        echo wp_get_attachment_image( $home_hero_background_image, 'large', false, array( "class" => "page-header-image" ) );
    }
    ?>
    <div class="page-header-content-wrapper fc-section fc-section-image page-header-hero">
        <div class="uk-container uk-container-large uk-margin-remove">
            <div class="page-header-content uk-margin-left uk-margin-right uk-margin-remove@l">

                <div class="uk-width-2xlarge">
                    <?php echo wp_kses_post($home_hero_content); ?>
                </div>

            </div>
        </div>
    </div>
</header>