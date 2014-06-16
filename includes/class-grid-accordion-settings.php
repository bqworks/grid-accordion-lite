<?php
/**
 * Contains the default settings for the accordion, panels, layers etc.
 * 
 * @since 1.0.0
 */
class BQW_Grid_Accordion_Lite_Settings {

	/**
	 * The accordion's settings.
	 * 
	 * The array contains the name, label, type, default value, 
	 * JavaScript name and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $settings = array();

	/**
	 * The groups of settings.
	 *
	 * The settings are grouped for the purpose of generating
	 * the accordion's admin sidebar.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $setting_groups = array();

	/**
	 * Layer settings.
	 *
	 * The array contains the name, label, type, default value
	 * and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $layer_settings = array();

	/**
	 * Panel settings.
	 *
	 * The array contains the name, label, type, default value
	 * and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $panel_settings = array();

	/**
	 * Hold the state (opened or closed) of the sidebar panels.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $panels_state = array(
		'appearance' => '',
		'animations' => 'closed',
		'autoplay' => 'closed',
		'mouse_wheel' => 'closed',
		'keyboard' => 'closed',
	);

	/**
	 * Holds the plugin settings.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $plugin_settings = array();

	/**
	 * Return the accordion settings.
	 *
	 * @since 1.0.0
	 * 
	 * @param  string      $name The name of the setting. Optional.
	 * @return array|mixed       The array of settings or the value of the setting.
	 */
	public static function getSettings( $name = null ) {
		if ( empty( self::$settings ) ) {
			self::$settings = array(
				'width' => array(
					'js_name' => 'width',
					'label' => __( 'Width', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 800,
					'description' => __( 'Sets the width of the accordion. Can be set to a fixed value, like 900 (indicating 900 pixels), or to a percentage value, like 100%. In order to make the accordion responsive, it\'s not necessary to use percentage values. More about this in the description of the Responsive option.', 'grid-accordion' )
				),
				'height' => array(
					'js_name' => 'height',
					'label' => __( 'Height', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 400,
					'description' => __( 'Sets the height of the accordion. Can be set to a fixed value, like 400 (indicating 400 pixels). It\'s not recommended to set this to a percentage value, and it\'s not usually needed, as the accordion will be responsive even with a fixed value set for the height.', 'grid-accordion' )
				),
				'columns' => array(
					'js_name' => 'columns',
					'label' => __( 'Columns', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 4,
					'description' => __( 'Sets the number of columns.', 'grid-accordion' )
				),
				'responsive' => array(
					'js_name' => 'responsive',
					'label' => __( 'Responsive', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Makes the accordion responsive. The accordion can be responsive even if the Width and/or Height options are set to fixed values. In this situation, the Width and Height will act as the maximum width and height of the accordion.', 'grid-accordion' )
				),
				'responsive_mode' => array(
					'js_name' => 'responsiveMode',
					'label' => __( 'Responsive Mode', 'grid-accordion' ),
					'type' => 'select',
					'default_value' => 'auto',
					'available_values' => array(
						'auto' => __( 'Auto', 'grid-accordion' ),
						'custom' => __( 'Custom', 'grid-accordion' )
					),
					'description' => __( 'For the lite version of the plugin, the difference between the two available modes is small. You can leave it to \'Auto\' unless you use percentage values for the \'Width\' and \'Height\', in which case you need to set it to \'Custom\'.', 'grid-accordion' )
				),
				'aspect_ratio' => array(
					'js_name' => 'aspectRatio',
					'label' => __( 'Aspect Ratio', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => -1,
					'description' => __( 'Sets the aspect ratio of the accordion. The accordion will set its height depending on what value its width has, so that this ratio is maintained. For this reason, the set \'Height\' might be overridden. This property can be used only when \'Responsive Mode\' is set to \'Custom\'. When it\'s set to \'Auto\', the \'Aspect Ratio\' needs to remain -1.', 'grid-accordion' )
				),
				'shadow' => array(
					'js_name' => 'shadow',
					'label' => __( 'Shadow', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => false,
					'description' => __( 'Indicates if the panels will have a drop shadow effect.', 'grid-accordion' )
				),
				'panel_distance' => array(
					'js_name' => 'panelDistance',
					'label' => __( 'Panel Distance', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 10,
					'description' => __( 'Sets the distance between consecutive panels. Can be set to a percentage or fixed value.', 'grid-accordion' )
				),
				'start_panel' => array(
					'js_name' => 'startPanel',
					'label' => __( 'Start Panel', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => -1,
					'description' => __( 'Indicates which panel will be opened when the accordion loads (0 for the first panel, 1 for the second panel, etc.). If set to -1, no panel will be opened.', 'grid-accordion' )
				),
				'opened_panel_width' => array(
					'js_name' => 'openedPanelWidth',
					'label' => __( 'Opened Panel Width', 'grid-accordion' ),
					'type' => 'mixed',
					'default_value' => 'max',
					'description' => __( 'Sets the width of the opened panel. Possible values are: \'max\', which will open the panel to its maximum width, so that all the inner content is visible, a percentage value, like \'50%\', which indicates the percentage of the total width of the accordion, a fixed value, or \'auto\'. If it\'s set to \'auto\', all panels opened on the vertical axis will have the same width without any of these panels opening more than their size.', 'grid-accordion' )
				),
				'opened_panel_height' => array(
					'js_name' => 'openedPanelHeight',
					'label' => __( 'Opened Panel Height', 'grid-accordion' ),
					'type' => 'mixed',
					'default_value' => 'max',
					'description' => __( 'Sets the height of the opened panel. Possible values are: \'max\', which will open the panel to its maximum height, so that all the inner content is visible, a percentage value, like \'50%\', which indicates the percentage of the total height of the accordion, a fixed value, or \'auto\'. If it\'s set to \'auto\', all panels opened on the vertical axis will have the same height without any of these panels opening more than their size.', 'grid-accordion' )
				),
				'max_opened_panel_width' => array(
					'js_name' => 'maxOpenedPanelWidth',
					'label' => __( 'Max Opened Panel Width', 'grid-accordion' ),
					'type' => 'mixed',
					'default_value' => '70%',
					'description' => __( 'Sets the maximum allowed width of the opened panel. This should be used when the \'Opened Panel Width\' setting is set to \'max\', because sometimes the maximum width of the panel might be too big and we want to set a limit. The property can be set to a percentage (of the total width of the accordion) or to a fixed value.', 'grid-accordion' )
				),
				'max_opened_panel_height' => array(
					'js_name' => 'maxOpenedPanelHeight',
					'label' => __( 'Max Opened Panel Height', 'grid-accordion' ),
					'type' => 'mixed',
					'default_value' => '70%',
					'description' => __( 'Sets the maximum allowed height of the opened panel. This should be used when the \'Opened Panel Width\' setting is set to \'max\', because sometimes the maximum height of the panel might be too big and we want to set a limit. The property can be set to a percentage (of the total height of the accordion) or to a fixed value.', 'grid-accordion' )
				),
				'open_panel_on' => array(
					'js_name' => 'openPanelOn',
					'label' => __( 'Open Panel On', 'grid-accordion' ),
					'type' => 'select',
					'default_value' => 'hover',
					'available_values' => array(
						'hover' => __( 'Hover', 'grid-accordion' ),
						'click' => __( 'Click', 'grid-accordion' ),
						'never' => __( 'Never', 'grid-accordion' )
					),
					'description' => __( 'If set to \'Hover\', the panels will be opened by moving the mouse pointer over them; if set to \'Click\', the panels will open when clicked. Can also be set to \'never\' to disable the opening of the panels.', 'grid-accordion' )
				),
				'close_panels_on_mouse_out' => array(
					'js_name' => 'closePanelsOnMouseOut',
					'label' => __( 'Close Panels On Mouse Out', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Determines whether the opened panel closes or remains open when the mouse pointer is moved away.', 'grid-accordion' )
				),
				'mouse_delay' => array(
					'js_name' => 'mouseDelay',
					'label' => __( 'Mouse Delay', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 200,
					'description' => __( 'Sets the delay in milliseconds between the movement of the mouse pointer and the opening of the panel. Setting a delay ensures that panels are not opened if the mouse pointer only moves over them without an intent to open the panel.', 'grid-accordion' )
				),
				'open_panel_duration' => array(
					'js_name' => 'openPanelDuration',
					'label' => __( 'Open Panel Duration', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 700,
					'description' => __( 'Determines the duration in milliseconds for the opening animation of the panel.', 'grid-accordion' )
				),
				'close_panel_duration' => array(
					'js_name' => 'closePanelDuration',
					'label' => __( 'Close Panel Duration', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 700,
					'description' => __( 'Determines the duration in milliseconds for the closing animation of the panel.', 'grid-accordion' )
				),

				'autoplay' => array(
					'js_name' => 'autoplay',
					'label' => __( 'Autoplay', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates if the autoplay will be enabled.', 'grid-accordion' )
				),
				'autoplay_delay' => array(
					'js_name' => 'autoplayDelay',
					'label' => __( 'Autoplay Delay', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 5000,
					'description' => __( 'Sets the delay, in milliseconds, of the autoplay cycle.', 'grid-accordion' )
				),
				'autoplay_direction' => array(
					'js_name' => 'autoplayDirection',
					'label' => __( 'Autoplay Direction', 'grid-accordion' ),
					'type' => 'select',
					'default_value' => 'normal',
					'available_values' => array(
						'normal' =>  __( 'Normal', 'grid-accordion' ),
						'backwards' =>  __( 'Backwards', 'grid-accordion' )
					),
					'description' => __( 'Sets the direction in which the panels will be opened. Can be set to \'Normal\' (ascending order) or \'Backwards\' (descending order).', 'grid-accordion' )
				),
				'autoplay_on_hover' => array(
					'js_name' => 'autoplayOnHover',
					'label' => __( 'Autoplay On Hover', 'grid-accordion' ),
					'type' => 'select',
					'default_value' => 'pause',
					'available_values' => array(
						'pause' => __( 'Pause', 'grid-accordion' ),
						'stop' => __( 'Stop', 'grid-accordion' ),
						'none' => __( 'None', 'grid-accordion' )
					),
					'description' => __( 'Indicates if the autoplay will be paused when the accordion is hovered.', 'grid-accordion' )
				),

				'mouse_wheel' => array(
					'js_name' => 'mouseWheel',
					'label' => __( 'Mouse Wheel', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates if the accordion will respond to mouse wheel input.', 'grid-accordion' )
				),
				'mouse_wheel_sensitivity' => array(
					'js_name' => 'mouseWheelSensitivity',
					'label' => __( 'Mouse Wheel Sensitivity', 'grid-accordion' ),
					'type' => 'number',
					'default_value' => 50,
					'description' => __( 'Sets how sensitive the accordion will be to mouse wheel input. Lower values indicate stronger sensitivity.', 'grid-accordion' )
				),

				'keyboard' => array(
					'js_name' => 'keyboard',
					'label' => __( 'Keyboard', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates if the accordion will respond to keyboard input.', 'grid-accordion' )
				),
				'keyboard_only_on_focus' => array(
					'js_name' => 'keyboardOnlyOnFocus',
					'label' => __( 'Keyboard Only On Focus', 'grid-accordion' ),
					'type' => 'boolean',
					'default_value' => false,
					'description' => __( 'Indicates if the accordion will respond to keyboard input only if the accordion has focus.', 'grid-accordion' )
				)
			);
		}

		if ( ! is_null( $name ) ) {
			return self::$settings[ $name ];
		}

		return self::$settings;
	}

	/**
	 * Return the setting groups.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of setting groups.
	 */
	public static function getSettingGroups() {
		if ( empty( self::$setting_groups ) ) {
			self::$setting_groups = array(
				'appearance' => array(
					'label' => __( 'Appearance', 'grid-accordion' ),
					'list' => array(
						'width',
						'height',
						'columns',
						'responsive',
						'responsive_mode',
						'aspect_ratio',
						'shadow',
						'panel_distance',
						'start_panel'
					)
				),

				'animations' => array(
					'label' => __( 'Animations', 'grid-accordion' ),
					'list' => array(
						'opened_panel_width',
						'opened_panel_height',
						'max_opened_panel_width',
						'max_opened_panel_height',
						'open_panel_on',
						'close_panels_on_mouse_out',
						'mouse_delay',
						'open_panel_duration',
						'close_panel_duration'
					)
				),

				'autoplay' => array(
					'label' => __( 'Autoplay', 'grid-accordion' ),
					'list' => array(
						'autoplay',
						'autoplay_delay',
						'autoplay_direction',
						'autoplay_on_hover'
					)
				),

				'mouse_wheel' => array(
					'label' => __( 'Mouse Wheel', 'grid-accordion' ),
					'list' => array(
						'mouse_wheel',
						'mouse_wheel_sensitivity'
					)
				),

				'keyboard' => array(
					'label' => __( 'Keyboard', 'grid-accordion' ),
					'list' => array(
						'keyboard',
						'keyboard_only_on_focus'
					)
				)
			);
		}

		return self::$setting_groups;
	}

	/**
	 * Return the default panels state.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of panels state.
	 */
	public static function getPanelsState() {
		return self::$panels_state;
	}

	/**
	 * Return the plugin settings.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of plugin settings.
	 */
	public static function getPluginSettings() {
		if ( empty( self::$plugin_settings ) ) {
			self::$plugin_settings = array(
				'load_stylesheets' => array(
					'label' => __( 'Load stylesheets', 'grid-accordion' ),
					'default_value' => 'automatically',
					'available_values' => array(
						'automatically' => __( 'Automatically', 'grid-accordion' ),
						'homepage' => __( 'On homepage', 'grid-accordion' ),
						'all' => __( 'On all pages', 'grid-accordion' )
					),
					'description' => __( 'The plugin can detect the presence of the accordion in a post, page or widget, and will automatically load the necessary stylesheets. However, when the accordion is loaded in PHP code, like in the theme\'s header or another template file, you need to manually specify where the stylesheets should load. If you load the accordion only on the homepage, select <i>On homepage</i>, or if you load it in the header or another section that is visible on multiple pages, select <i>On all pages</i>.' , 'grid-accordion' )
				),
				'cache_expiry_interval' => array(
					'label' => __( 'Cache expiry interval', 'grid-accordion' ),
					'default_value' => 24,
					'description' => __( 'Indicates the time interval after which a grid\'s cache will expire. If the cache of a grid has expired, the grid will be rendered again and cached the next time it is viewed.', 'grid-accordion' )
				),
				'hide_inline_info' => array(
					'label' => __( 'Hide inline info', 'grid-accordion' ),
					'default_value' => false,
					'description' => __( 'Indicates whether the inline information will be displayed in admin panels and wherever it\'s available.', 'grid-accordion' )
				),
				'hide_getting_started_info' => array(
					'label' => __( 'Hide <i>Getting Started</i> info', 'grid-accordion' ),
					'default_value' => false,
					'description' => __( 'Indicates whether the <i>Getting Started</i> information will be displayed in the <i>All Accordions</i> page, above the list of accordions. This setting will be disabled if the <i>Close</i> button is clicked in the information box.', 'grid-accordion' )
				),
				'access' => array(
					'label' => __( 'Access', 'grid-accordion' ),
					'default_value' => 'manage_options',
					'available_values' => array(
						'manage_options' => __( 'Administrator', 'grid-accordion' ),
						'publish_pages' => __( 'Editor', 'grid-accordion '),
						'publish_posts' => __( 'Author', 'grid-accordion' ),
						'edit_posts' => __( 'Contributor', 'grid-accordion' )
					),
					'description' => __( 'Sets what category of users will have access to the plugin\'s admin area.', 'grid-accordion' )
				)
			);
		}

		return self::$plugin_settings;
	}
}