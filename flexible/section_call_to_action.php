<?php $source = get_sub_field('cta_content_source');?>
<?php $cta_id = 'call-to-action-' . rand(); ?>
<?php
if ( $source === 'default' ){

    $background = get_field('cta_background', 'option');

    if( $background == 'image'){
        $content_color = get_field('cta_text_color', 'option') ?? '';
        $bg_image = get_field('cta_background_image', 'option');
        $image = wp_get_attachment_image_url( $bg_image, 'large' );

    }

    $content = get_field('cta_content', 'option');
    $button = get_field('cta_link', 'option');

}else{

    $background = get_sub_field('cta_background');

    if( $background == 'image'){
        $content_color = get_sub_field('cta_text_color') ?? '';
        $bg_image = get_sub_field('cta_background_image');
        $image = wp_get_attachment_image_url( $bg_image, 'large' );
    }

    $content = get_sub_field('cta_content');
    $button = get_sub_field('cta_link');

}
?>

<style>
    <?php echo '#' . esc_attr($cta_id); ?>.call-to-action-image {
        <?php if( $image ): ?>
        background-image: url('<?php echo esc_url($image);?>');
        background-size: cover;
        background-position: center;
        <?php endif; ?>
    }
</style>

<div class="fc-section-cta fc-section-columns call-to-action call-to-action--<?php echo esc_attr($source);?> call-to-action-<?php echo esc_attr($background); ?> background--<?php echo esc_attr($background);?> background--<?php echo esc_attr($content_color ?? '');?>" id="<?php echo esc_attr($cta_id); ?>">

    <div class="call-to-action--inner uk-container uk-flex uk-padding-medium">

        <div class="uk-width-1-1 uk-width-4-5@m uk-margin-auto-left uk-margin-auto-right">
            <?php echo wp_kses_post($content); ?>

        </div>

        <div class="uk-width-1-1 uk-width-1-5@m uk-flex uk-flex-left uk-flex-middle">
            <?php if( is_array($button) ): ?>
                <?php if( array_key_exists('url', $button) ): ?>
                    <a href="<?php echo esc_url( $button['url'] ); ?>" class="uk-button uk-button-secondary uk-margin-remove" <?php if( $button['target'] ): ?> target="<?php echo esc_attr( $button['target'] ); ?>" <?php endif; ?>>
                        <?php echo esc_html( $button['title'] ); ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>

</div>
