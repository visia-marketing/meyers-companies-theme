<?php

$sections = get_sub_field('sections');

// print_r( $sections );

?>






<div class="uk-grid uk-grid-large sticky-sidebar" uk-grid id="sticky-sidebar-boundary">

    <div class="uk-width-1-1 uk-width-4-5@m uk-flex-last@m" id="sticky-content">

        <?php foreach( $sections as $i => $section): ?>

            <?php
            
            if($section['settings']['custom_link']){
                $section_id = $section['settings']['custom_link_section'];
            } else{
                $section_id = 'section_'.$i;
            }
            ?>

            <div class="uk-background-muted uk-height-large uk-margin-large-bottom" id="<?php echo$section_id ;?>">
                <?php print_r($section); ?> 
            </div>
        <?php endforeach; ?>

    </div>


    <div class="uk-width-1-1 uk-width-1-5@m uk-flex-first@m" >


        <div uk-sticky="offset: 200; end: #sticky-end; media: @m">
            <ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true">
                <?php foreach( $sections as $i => $section): ?>

                    <?php
        
                    if($section['settings']['custom_link']){
                        $section_id = $section['settings']['custom_link_section'];
                    } else{
                        $section_id = 'section_'.$i;
                    }
                    ?>

                    <?php if( $section['settings']['divider']): ?>
                        <li class="uk-margin-top">
                            <hr class="uk-margin-bottom" />
                        </li>
                    <?php endif; ?>

                    <li class="uk-margin-small-bottom">
                        <a href="#<?php echo $section_id;?>" class="uk-flex uk-flex-inline uk-flex-center uk-margin-small-bottom">
                            <?php echo wp_get_attachment_image( $section['settings']['section_icon'], 'full', true, array( 'class' => 'uk-preserve', 'uk-svg' => '')  );?>
                            <?php echo $section['settings']['section_title'];?>
                        </a>
                    </li>


                <?php endforeach; ?>
            </ul>
        </div>


    </div>

</div>

<div id="sticky-end"></div>