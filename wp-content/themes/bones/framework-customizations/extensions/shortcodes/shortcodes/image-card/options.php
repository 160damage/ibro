<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image' => array(
    'type'  => 'upload',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Изображение', '{domain}'),
    'desc'  => __('Добавляет изображение на задний фон элемента', '{domain}'),
    /**
     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
     * If set to `false`, the option will allow to upload any file from the media library.
     */
    'images_only' => true
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
	),
	'color'  => array(
		'label'   => __( 'image-card Color', 'fw' ),
		'desc'    => __( 'Choose a color for your image-card', 'fw' ),
		'type'    => 'select',
		'choices' => array(
			''      => __('Default', 'fw'),
			'black' => __( 'Black', 'fw' ),
			'blue'  => __( 'Blue', 'fw' ),
			'green' => __( 'Green', 'fw' ),
			'red'   => __( 'Red', 'fw' ),
		)
	),
);
