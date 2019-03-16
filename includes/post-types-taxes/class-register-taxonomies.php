<?php
/**
 * Register listing-locations.
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace Seq_Pac_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register listing-locations.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxes_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom listing-locations.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom listing-locations.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Locations
         */

        $labels = [
            'name'                       => __( 'Locations', 'seq-pac-plugin' ),
            'singular_name'              => __( 'Location', 'seq-pac-plugin' ),
            'menu_name'                  => __( 'Location', 'seq-pac-plugin' ),
            'all_items'                  => __( 'All Locations', 'seq-pac-plugin' ),
            'edit_item'                  => __( 'Edit Location', 'seq-pac-plugin' ),
            'view_item'                  => __( 'View Location', 'seq-pac-plugin' ),
            'update_item'                => __( 'Update Location', 'seq-pac-plugin' ),
            'add_new_item'               => __( 'Add New Location', 'seq-pac-plugin' ),
            'new_item_name'              => __( 'New Location', 'seq-pac-plugin' ),
            'parent_item'                => __( 'Parent Location', 'seq-pac-plugin' ),
            'parent_item_colon'          => __( 'Parent Location', 'seq-pac-plugin' ),
            'popular_items'              => __( 'Popular Locations', 'seq-pac-plugin' ),
            'separate_items_with_commas' => __( 'Separate Locations with commas', 'seq-pac-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Locations', 'seq-pac-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Locations', 'seq-pac-plugin' ),
            'not_found'                  => __( 'No Locations Found', 'seq-pac-plugin' ),
            'no_terms'                   => __( 'No Locations', 'seq-pac-plugin' ),
            'items_list_navigation'      => __( 'Locations List Navigation', 'seq-pac-plugin' ),
            'items_list'                 => __( 'Locations List', 'seq-pac-plugin' )
        ];

        $options = [
            'label'              => __( 'Locations', 'seq-pac-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Locations',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'locations',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'locations',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'location',
            [
                'listing',
                'rental'
            ],
            $options
        );

    }

}

// Run the class.
$spp_taxes = new Taxes_Register;