<?php if (!defined('FW')) die( 'Forbidden' );
$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}
?>

<div class="image-items__wrap image-items__item1" style="<?php echo $bg_image ?>">
         <h3 class="image-items__title"><?php echo $atts['label']; ?></h3>
         <a href="<?php echo esc_attr($atts['link']) ?>" class="image-items__button"  target="<?php echo esc_attr($atts['target']) ?>"><?php echo $atts['button']; ?></a>
</div>
