<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'popup1' => array(
	    'type' => 'popup',
	    'label' => __('Карточка 1', '{domain}'),
	    'desc'  => __('изменить изображение и название заголовка', '{domain}'),
	    'popup-title' => __('Popup Title', '{domain}'),
	    'button' => __('Изменить', '{domain}'),
	    'popup-title' => null,
	    'size' => 'small', // small, medium, large
	    'popup-options' => array(
					'background_image' => array(
						'label'   => __('Background Image', 'fw'),
						'desc'    => __('Please select the background image', 'fw'),
						'type'    => 'background-image',
						'choices' => array(//	in future may will set predefined images
						)
					),
					'label'  => array(
						'label' => __( 'Загаловок', 'fw' ),
						'desc'  => __( 'Изменить изображение и название заголовка.', 'fw' ),
						'type'  => 'text',
						'value' => 'Submit'
					),
					'link'   => array(
						'label' => __( 'Ссылка', 'fw' ),
						'desc'  => __( 'Ссылка на страницу.', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'button'  => array(
						'label' => __( 'Кнопка', 'fw' ),
						'desc'  => __( 'Название кнопки', 'fw' ),
						'type'  => 'text',
						'value' => 'Купить сейчас'
					),
					)
	),
	'popup2' => array(
	    'type' => 'popup',
	    'label' => __('Карточка 2', '{domain}'),
	    'desc'  => __('изменить изображение и название заголовка', '{domain}'),
	    'popup-title' => __('Popup Title', '{domain}'),
	    'button' => __('Изменить', '{domain}'),
	    'popup-title' => null,
	    'size' => 'small', // small, medium, large
	    'popup-options' => array(
					'background_image' => array(
						'label'   => __('Background Image', 'fw'),
						'desc'    => __('Please select the background image', 'fw'),
						'type'    => 'background-image',
						'choices' => array(//	in future may will set predefined images
						)
					),
					'label'  => array(
						'label' => __( 'Загаловок', 'fw' ),
						'desc'  => __( 'Название заголовка.', 'fw' ),
						'type'  => 'text',
						'value' => 'Submit'
					),
					'link'   => array(
						'label' => __( 'Ссылка', 'fw' ),
						'desc'  => __( 'Ссылка на страницу.', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'button'  => array(
						'label' => __( 'Кнопка', 'fw' ),
						'desc'  => __( 'Название кнопки', 'fw' ),
						'type'  => 'text',
						'value' => 'Купить сейчас'
					),
					)
	),
	'popup3' => array(
	    'type' => 'popup',
	    'label' => __('Изображение 3', '{domain}'),
	    'desc'  => __('изменить изображение и название заголовка.', '{domain}'),
	    'popup-title' => __('Popup Title', '{domain}'),
	    'button' => __('Изменить', '{domain}'),
	    'popup-title' => null,
	    'size' => 'small', // small, medium, large
	    'popup-options' => array(
					'background_image' => array(
						'label'   => __('Background Image', 'fw'),
						'desc'    => __('Please select the background image', 'fw'),
						'type'    => 'background-image',
						'choices' => array(//	in future may will set predefined images
						)
					),
					'label'  => array(
						'label' => __( 'Загаловок', 'fw' ),
						'desc'  => __( 'изменить изображение и название заголовка.', 'fw' ),
						'type'  => 'text',
						'value' => 'Submit'
					),
					'link'   => array(
						'label' => __( 'Ссылка', 'fw' ),
						'desc'  => __( 'Ссылка на страницу.', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'button'  => array(
						'label' => __( 'Кнопка', 'fw' ),
						'desc'  => __( 'Название кнопки', 'fw' ),
						'type'  => 'text',
						'value' => 'Купить сейчас'
					),
					)
	),
	'popup4' => array(
	    'type' => 'popup',
	    'label' => __('Изображение 4', '{domain}'),
	    'desc'  => __('изменить изображение и название заголовка.', '{domain}'),
	    'popup-title' => __('Popup Title', '{domain}'),
	    'button' => __('Изменить', '{domain}'),
	    'popup-title' => null,
	    'size' => 'small', // small, medium, large
	    'popup-options' => array(
					'background_image' => array(
						'label'   => __('Background Image', 'fw'),
						'desc'    => __('Please select the background image', 'fw'),
						'type'    => 'background-image',
						'choices' => array(//	in future may will set predefined images
						)
					),
					'label'  => array(
						'label' => __( 'Загаловок', 'fw' ),
						'desc'  => __( 'изменить изображение и название заголовка.', 'fw' ),
						'type'  => 'text',
						'value' => 'Submit'
					),
					'link'   => array(
						'label' => __( 'Ссылка', 'fw' ),
						'desc'  => __( 'Ссылка на страницу.', 'fw' ),
						'type'  => 'text',
						'value' => '#'
					),
					'button'  => array(
						'label' => __( 'Кнопка', 'fw' ),
						'desc'  => __( 'Название кнопки', 'fw' ),
						'type'  => 'text',
						'value' => 'Купить сейчас'
					),
					)
	)
);
