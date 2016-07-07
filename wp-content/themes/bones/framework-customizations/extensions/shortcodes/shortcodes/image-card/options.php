<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'label'  => array(
		'label' => __( 'Загаловок', 'fw' ),
		'desc'  => __( 'This is the text that appears on your image-card', 'fw' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'   => array(
		'label' => __( 'Ссылка', 'fw' ),
		'desc'  => __( 'Where should your image-card link to', 'fw' ),
		'type'  => 'text',
		'value' => '#'
	),
	'button'  => array(
		'label' => __( 'Кнопка', 'fw' ),
		'desc'  => __( 'Название кнопки', 'fw' ),
		'type'  => 'text',
		'value' => 'Купить сейчас'
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'fw' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'fw'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'fw'),
		),
	)
);
