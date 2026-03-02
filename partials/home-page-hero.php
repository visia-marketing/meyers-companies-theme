<?php  
  $home_hero_content = get_field('home_hero_content'); 
  $home_hero_background_image = get_field('home_hero_background_image');
?>


<header class="fc-page-header page-header" id="home_hero_<?php echo get_the_ID();?>">
    <?php 
    if(  $home_hero_background_image ){
        echo wp_get_attachment_image( $home_hero_background_image, 'large', false, array( "class" => "page-header-image" ) );
    }
    ?>
    <div class="page-header-content-wrapper fc-section fc-section-image page-header-hero">
        <div class="uk-container uk-container-large uk-text-left uk-flex">
            <div class="page-header-content uk-flex uk-flex-column uk-flex-center uk-margin-medium-top uk-margin-medium-bottom">

                <div class="uk-width-1-2">
                    <?php echo $home_hero_content; ?>
                </div>

            </div>
        </div>
    </div>
</header>