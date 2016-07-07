<?php if (!defined('FW')) die( 'Forbidden' );
if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}?>

<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?>">
	<span><?php echo $atts['label']; ?></span>
	<img src="<?php echo esc_attr($image) ?>" alt="" />
</a>
