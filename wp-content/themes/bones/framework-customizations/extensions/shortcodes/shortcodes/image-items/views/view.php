<?php if (!defined('FW')) die( 'Forbidden' );


$bg_image1 = '';
if ( ! empty( $atts['popup1']['background_image'] ) && ! empty( $atts['popup1']['background_image']['data']['icon'] ) ) {
	$bg_image1 = 'background-image:url(' . $atts['popup1']['background_image']['data']['icon'] . ');';
}
$bg_image2 = '';
if ( ! empty( $atts['popup2']['background_image'] ) && ! empty( $atts['popup2']['background_image']['data']['icon'] ) ) {
	$bg_image2 = 'background-image:url(' . $atts['popup2']['background_image']['data']['icon'] . ');';
}
$bg_image3 = '';
if ( ! empty( $atts['popup3']['background_image'] ) && ! empty( $atts['popup3']['background_image']['data']['icon'] ) ) {
	$bg_image3 = 'background-image:url(' . $atts['popup3']['background_image']['data']['icon'] . ');';
}
$bg_image4 = '';
if ( ! empty( $atts['popup4']['background_image'] ) && ! empty( $atts['popup4']['background_image']['data']['icon'] ) ) {
	$bg_image4 = 'background-image:url(' . $atts['popup4']['background_image']['data']['icon'] . ');';
}
?>


<section class="image-items">
	<div class="image-items__wrap image-items__item1" style="<?php echo $bg_image1 ?>">
	         <h3 class="image-items__title"><?php echo $atts['popup1']['label']; ?></h3>
	         <a href="<?php echo esc_attr($atts['popup1']['link']) ?>" class="image-items__button"?><?php echo $atts['popup1']['button']; ?></a>
	</div>
	<div class="image-items__wrap image-items__item2" style="<?php echo $bg_image2 ?>">
	         <h3 class="image-items__title"><?php echo $atts['popup2']['label']; ?></h3>
	         <a href="<?php echo esc_attr($atts['popup2']['link']) ?>" class="image-items__button"?><?php echo $atts['popup2']['button']; ?></a>
	</div>
	<div class="image-items__wrap image-items__item3" style="<?php echo $bg_image3 ?>">
	         <h3 class="image-items__title"><?php echo $atts['popup3']['label']; ?></h3>
	         <a href="<?php echo esc_attr($atts['popup3']['link']) ?>" class="image-items__button"?><?php echo $atts['popup3']['button']; ?></a>
	</div>
	<div class="image-items__wrap image-items__item4" style="<?php echo $bg_image4 ?>">
	         <h3 class="image-items__title"><?php echo $atts['popup4']['label']; ?></h3>
	         <a href="<?php echo esc_attr($atts['popup4']['link']) ?>" class="image-items__button"?><?php echo $atts['popup4']['button']; ?></a>
	</div>
</section>
