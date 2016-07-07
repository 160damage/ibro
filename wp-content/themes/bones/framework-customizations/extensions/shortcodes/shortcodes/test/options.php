<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
'addable-popup' => array(
	    'type' => 'addable-popup',
	    'value' => array(
	        array(
	            'option_1' => 'value 1',
	            'option_2' => 'value 2',
	        ),
	        // ...
	    ),
	    'label' => __('Addable Popup', '{domain}'),
	    'desc'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
	    'template' => '{{- demo_text }}',
	    'popup-title' => null,
	    'size' => 'small', // small, medium, large
	    'limit' => 0, // limit the number of popup`s that can be added
	    'add-button-text' => __('Add', '{domain}'),
	    'sortable' => true,
	    'popup-options' => array(
	        'option_1' => array(
	            'label' => __('Text', '{domain}'),
	            'type' => 'text',
	            'value' => 'Demo text value',
	            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
	            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
	                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
	                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
	            ),
	        ),
	        'option_2' => array(
	            'label' => __('Textarea', '{domain}'),
	            'type' => 'textarea',
	            'value' => 'Demo textarea value',
	            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
	            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
	                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
	                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
	            ),
	        ),
	    ),
	),

	'multi' => array(
    'type'  => 'multi',
    'value' => array(
        'option-1' => 'value 1',
        'option-2' => 'value 2',
    ),
    'attr'  => array(
        'class' => 'custom-class',
        'data-foo' => 'bar',
        /*
        // Add this class to display inner options separators
        'class' => 'fw-option-type-multi-show-borders',
        */
    ),
    'label' => __('Label', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
    'inner-options' => array(
        'option_1' => array( 'type' => 'text' ),
        'option_2' => array( 'type' => 'textarea' ),
    )
),
'box' => array(
    'type'  => 'addable-box',
    'value' => array(
        array(
            'option_1' => 'value 1',
            'option_2' => 'value 2',
        ),
        // ...
    ),
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Label', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
    'box-options' => array(
        'option_1' => array( 'type' => 'text' ),
        'option_2' => array( 'type' => 'textarea' ),
    ),
    'template' => 'Hello {{- option_1 }}', // box title
    'box-controls' => array( // buttons next to (x) remove box button
        'control-id' => '<small class="dashicons dashicons-smiley"></small>',
    ),
    'limit' => 0, // limit the number of boxes that can be added
    'add-button-text' => __('Add', '{domain}'),
    'sortable' => true,
),
'popup' => array(
    'type' => 'popup',
    'value' => array(
        'option_1' => 'value 1',
        'option_2' => 'value 2',
    ),
    'label' => __('Popup', '{domain}'),
    'desc'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
    'popup-title' => __('Popup Title', '{domain}'),
    'button' => __('Edit', '{domain}'),
    'popup-title' => null,
    'size' => 'small', // small, medium, large
    'popup-options' => array(
        'option_1' => array(
            'label' => __('Text', '{domain}'),
            'type' => 'text',
            'value' => 'Demo text value',
            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
            ),
        ),
        'option_2' => array(
            'label' => __('Textarea', '{domain}'),
            'type' => 'textarea',
            'value' => 'Demo textarea value',
            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
            ),
        ),
    ),
)
);
