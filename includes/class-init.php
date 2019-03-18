<?php
/**
 * The core plugin class
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Seq_Pac_Plugin\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugins path to check for active plugins.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Define the core functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
final class Init {

	/**
	 * Instance of the class
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Get class dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access private
	 * @return self
	 */
	private function __construct() {

		// Remove the Draconian capital P filter.
		remove_filter( 'the_title', 'capital_P_dangit', 11 );
		remove_filter( 'the_content', 'capital_P_dangit', 11 );
		remove_filter( 'comment_text', 'capital_P_dangit', 31 );

		// Add Google Maps API key to ACF.
		if ( spp_acf_pro() ) {
			add_action( 'acf/init', [ $this, 'my_acf_init' ] );
		}

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Translation functionality.
		require_once SPP_PATH . 'includes/class-i18n.php';

		// Admin/backend functionality, scripts and styles.
		require_once SPP_PATH . 'admin/class-admin.php';

		// Frontend functionality, scripts and styles.
		require_once SPP_PATH . 'frontend/class-frontend.php';

		// Various media and media library functionality.
		require_once SPP_PATH . 'includes/media/class-media.php';

		// Post types and taxonomies.
		require_once SPP_PATH . 'includes/post-types-taxes/class-post-type-tax.php';

		// User funtionality.
		require_once SPP_PATH . 'includes/users/class-users.php';

		// Dev and maintenance tools.
		require_once SPP_PATH . 'includes/tools/class-tools.php';

	}

	/**
	 * Add Google Maps API key to ACF
	 *
	 * Gets the key from the Site Settings page & field group.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function my_acf_init() {

		// Get the API key field.
		$google_api_key = get_field( 'sp_map_api_key', 'option' );

		// Update the API key setting.
		acf_update_setting( 'google_api_key', esc_html( $google_api_key ) );

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function spp_init() {

	return Init::instance();

}

// Run an instance of the class.
spp_init();