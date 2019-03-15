<?php
/**
 * Example Beaver Builder module
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Includes\Beaver
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Example Beaver Builder module
 *
 * @since  1.0.0
 * @access public
 */
class SPP_Example_Module extends FLBuilderModule {

    /**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        parent::__construct( [
            'name'          => __( 'Example', 'seq-pac-plugin' ),
            'description'   => __( 'An example for coding new modules.', 'seq-pac-plugin' ),
            'category'      => __( 'Example Modules', 'seq-pac-plugin' ),
            'dir'           => SPP_PATH . 'includes/beaver/modules/example/',
            'url'           => SPP_URL . 'includes/beaver/modules/example/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ] );

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         *
         * @since  1.0.0
         */

        // Already registered.
        $this->add_css( 'font-awesome' );
        $this->add_js( 'jquery-bxslider' );

        // Register and enqueue your own.
        $this->add_css('example-lib', $this->url . 'css/example-lib.css');
        $this->add_js('example-lib', $this->url . 'js/example-lib.js', [], '', true);

    }

    /**
     * Use this method to work with settings data before
     * it is saved. You must return the settings object.
     *
     * @since  1.0.0
	 * @access public
     * @param  $settings {object}
     * @return string
     */
    public function update( $settings ) {

        $settings->textarea_field .= __( ' - this text was appended in the update method.', 'seq-pac-plugin' );

        return $settings;

    }

    /**
     * Delete method
     *
     * This method will be called by the builder
     * right before the module is deleted.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function delete() {}

    /**
     * Example method
     *
     * Add additional methods to this class for use in the
     * other module files such as preview.php, frontend.php
     * and frontend.css.php.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function example_method() {}

}

/**
 * Register the module and its form settings.
 *
 * @since  1.0.0
 * @access public
 * @return array Returns the array of module fields.
 */
FLBuilder::register_module( 'SPP_Example_Module', [
    'general' => [ // Tab
        'title'    => __( 'General', 'seq-pac-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'  => __( 'Section Title', 'seq-pac-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'text_field' => [
                        'type'        => 'text',
                        'label'       => __( 'Text Field', 'seq-pac-plugin' ),
                        'default'     => '',
                        'maxlength'   => '2',
                        'size'        => '3',
                        'placeholder' => '10',
                        'class'       => 'my-css-class',
                        'description' => 'px',
                        'help'        =>__( 'Put your help inf here.', 'seq-pac-plugin' ),
                        'preview'     => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'font-size',
                            'unit'     => 'px'
                        ]
                    ],
                    'textarea_field' => [
                        'type'        => 'textarea',
                        'label'       => __( 'Textarea Field', 'seq-pac-plugin' ),
                        'default'     => '',
                        'placeholder' => __( 'Placeholder Text', 'seq-pac-plugin' ),
                        'rows'        => '6',
                        'preview'     => [
                            'type'     => 'text',
                            'selector' => '.fl-example-text'
                        ]
                    ],
                    'select_field' => [
                        'type'    => 'select',
                        'label'   => __( 'Select Field', 'seq-pac-plugin' ),
                        'default' => 'option-2',
                        'options' => [
                            'option-1' => __( 'Option 1', 'seq-pac-plugin' ),
                            'option-2' => __( 'Option 2', 'seq-pac-plugin' ),
                            'option-3' => __( 'Option 3', 'seq-pac-plugin' )
                        ]
                    ],
                    'color_field' => [
                        'type'       => 'color',
                        'label'      => __( 'Color Picker', 'seq-pac-plugin' ),
                        'default'    => '333333',
                        'show_reset' => true,
                        'preview'     => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'color'
                        ]
                    ],
                    'photo_field' => [
                        'type'  => 'photo',
                        'label' => __( 'Photo Field', 'seq-pac-plugin' )
                    ],
                    'photos_field' => [
                        'type'  => 'multiple-photos',
                        'label' => __( 'Multiple Photos Field', 'seq-pac-plugin' )
                    ],
                    'video_field' => [
                        'type'  => 'video',
                        'label' => __( 'Video Field', 'seq-pac-plugin' )
                    ],
                    'icon_field' => [
                        'type'        => 'icon',
                        'label'       => __( 'Icon Field', 'seq-pac-plugin' ),
                        'show_remove' => true
                    ],
                    'link_field' => [
                        'type'  => 'link',
                        'label' => __( 'Link Field', 'seq-pac-plugin' )
                    ],
                    'form_field' => [
                        'type'         => 'form',
                        'label'        => __( 'Form Field', 'seq-pac-plugin' ),
                        'form'         => 'example_settings_form', // ID from registered form below
                        'preview_text' => 'example' // Name of a field to use for the preview text
                    ],
                    'suggest_field' => [
                        'type'   => 'suggest',
                        'label'  => __( 'Suggest Field', 'seq-pac-plugin' ),
                        'action' => 'fl_as_posts',
                        'data'   => 'post'
                    ],
                    'editor_field' => [
                        'type'          => 'editor',
                        'label'         => '',
                        'media_buttons' => true,
                        'rows'          => 10
                    ],
                    'custom_field_example' => [
                        'type'    => 'spp-custom-beaver-field',
                        'label'   => __( 'Custom Field Example', 'seq-pac-plugin' ),
                        'default' => ''
                    ],
                ]
            ]
        ]
    ],
    'toggle' => [ // Tab
        'title'    => __( 'Toggle', 'seq-pac-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'  => __( 'Toggle Example', 'seq-pac-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'toggle_me' => [
                        'type'    => 'select',
                        'label'   => __( 'Toggle Me!', 'seq-pac-plugin' ),
                        'default' => 'option-1',
                        'options' => [
                            'option-1' => __( 'Option 1', 'seq-pac-plugin' ),
                            'option-2' => __( 'Option 2', 'seq-pac-plugin' )
                        ],
                        'toggle' => [
                            'option-1' => [
                                'fields'   => [
                                    'toggle_text',
                                    'toggle_text2'
                                ],
                                'sections' => [
                                    'toggle_section'
                                ]
                            ],
                            'option-2' => []
                        ]
                    ],
                    'toggle_text' => [
                        'type'        => 'text',
                        'label'       => __( 'Hide Me!', 'seq-pac-plugin' ),
                        'default'     => '',
                        'description' => 'I get hidden when you toggle the select above.'
                    ],
                    'toggle_text2' => [
                        'type'    => 'text',
                        'label'   => __( 'Me Too!', 'seq-pac-plugin' ),
                        'default' => ''
                    ]
                ]
            ],
            'toggle_section' => [ // Section
                'title'  => __( 'Hide This Section!', 'seq-pac-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'some_text' => [
                        'type'    => 'text',
                        'label'   => __( 'Text', 'seq-pac-plugin' ),
                        'default' => ''
                    ]
                ]
            ]
        ]
    ],
    'multiple' => [ // Tab
        'title'    => __( 'Multiple', 'seq-pac-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'   => __( 'Multiple Example', 'seq-pac-plugin' ), // Section Title
                'fields'  => [ // Section Fields
                    'test' => [
                        'type'     => 'text',
                        'label'    => __( 'Multiple Test', 'seq-pac-plugin' ),
                        'multiple' => true // Doesn't work with editor or photo fields
                    ]
                ]
            ]
        ]
    ],
    'include' => [ // Tab
        'title' => __( 'Include', 'seq-pac-plugin' ), // Tab title
        'file'  => SPP_PATH . 'includes/beaver/example/includes/settings-example.php'
    ]
] );

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form( 'example_settings_form', [
    'title' => __( 'Example Form Settings', 'seq-pac-plugin' ),
    'tabs'  => [
        'general' => [ // Tab
            'title'    => __( 'General', 'seq-pac-plugin' ), // Tab title
            'sections' => [ // Tab Sections
                'general' => [ // Section
                    'title'  => '', // Section Title
                    'fields' => [ // Section Fields
                        'example' => [
                            'type'    => 'text',
                            'label'   => __( 'Example', 'seq-pac-plugin' ),
                            'default' => __( 'Some example text', 'seq-pac-plugin' )
                        ]
                    ]
                ]
            ]
        ],
        'another' => [ // Tab
            'title'    => __( 'Another Tab', 'seq-pac-plugin' ), // Tab title
            'sections' => [ // Tab Sections
                'general' => [ // Section
                    'title'  => '', // Section Title
                    'fields' => [ // Section Fields
                        'another_example' => [
                            'type'  => 'text',
                            'label' => __( 'Another Example', 'seq-pac-plugin' )
                        ]
                    ]
                ]
            ]
        ]
    ]
] );