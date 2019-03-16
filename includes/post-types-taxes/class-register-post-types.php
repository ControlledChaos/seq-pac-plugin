<?php
/**
 * Register post types.
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace Seq_Pac_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register listing types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register post types.
     *
     * Note for WordPress 5.0 or greater:
     * If you want your post type to adopt the block edit_form_image_editor
     * rather than using the classic editor then set `show_in_rest` to `true`.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Listings
         */

        $labels = [
            'name'                  => __( 'Listings', 'seq-pac-plugin' ),
            'singular_name'         => __( 'Listing', 'seq-pac-plugin' ),
            'menu_name'             => __( 'Listings', 'seq-pac-plugin' ),
            'all_items'             => __( 'All Listings', 'seq-pac-plugin' ),
            'add_new'               => __( 'Add New', 'seq-pac-plugin' ),
            'add_new_item'          => __( 'Add New Listing', 'seq-pac-plugin' ),
            'edit_item'             => __( 'Edit Listing', 'seq-pac-plugin' ),
            'new_item'              => __( 'New Listing', 'seq-pac-plugin' ),
            'view_item'             => __( 'View Listing', 'seq-pac-plugin' ),
            'view_items'            => __( 'View Listings', 'seq-pac-plugin' ),
            'search_items'          => __( 'Search Listings', 'seq-pac-plugin' ),
            'not_found'             => __( 'No Listings Found', 'seq-pac-plugin' ),
            'not_found_in_trash'    => __( 'No Listings Found in Trash', 'seq-pac-plugin' ),
            'parent_item_colon'     => __( 'Parent Listing', 'seq-pac-plugin' ),
            'featured_image'        => __( 'Featured image for this listing', 'seq-pac-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this listing', 'seq-pac-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this listing', 'seq-pac-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this listing', 'seq-pac-plugin' ),
            'archives'              => __( 'Listing archives', 'seq-pac-plugin' ),
            'insert_into_item'      => __( 'Insert into Listing', 'seq-pac-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Listing', 'seq-pac-plugin' ),
            'filter_items_list'     => __( 'Filter Listings', 'seq-pac-plugin' ),
            'items_list_navigation' => __( 'Listings list navigation', 'seq-pac-plugin' ),
            'items_list'            => __( 'Listings List', 'seq-pac-plugin' ),
            'attributes'            => __( 'Listing Attributes', 'seq-pac-plugin' ),
            'parent_item_colon'     => __( 'Parent Listing', 'seq-pac-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'listing_labels', $labels );

        $options = [
            'label'               => __( 'Listings', 'seq-pac-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'seq-pac-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'listing_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'listings',
                'with_front' => true
            ],
            'query_var'           => 'listing',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-exerpt-view',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'listing_location',
                'post_tag'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'listing_args', $options );

        // Register the post type.
        register_post_type(
            'listing',
            $options
        );

        /**
         * Post Type: Rentals
         */

        $labels = [
            'name'                  => __( 'Rentals', 'seq-pac-plugin' ),
            'singular_name'         => __( 'Rental', 'seq-pac-plugin' ),
            'menu_name'             => __( 'Rentals', 'seq-pac-plugin' ),
            'all_items'             => __( 'All Rentals', 'seq-pac-plugin' ),
            'add_new'               => __( 'Add New', 'seq-pac-plugin' ),
            'add_new_item'          => __( 'Add New Rental', 'seq-pac-plugin' ),
            'edit_item'             => __( 'Edit Rental', 'seq-pac-plugin' ),
            'new_item'              => __( 'New Rental', 'seq-pac-plugin' ),
            'view_item'             => __( 'View Rental', 'seq-pac-plugin' ),
            'view_items'            => __( 'View Rentals', 'seq-pac-plugin' ),
            'search_items'          => __( 'Search Rentals', 'seq-pac-plugin' ),
            'not_found'             => __( 'No Rentals Found', 'seq-pac-plugin' ),
            'not_found_in_trash'    => __( 'No Rentals Found in Trash', 'seq-pac-plugin' ),
            'parent_item_colon'     => __( 'Parent Rental', 'seq-pac-plugin' ),
            'featured_image'        => __( 'Featured image for this rental', 'seq-pac-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this rental', 'seq-pac-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this rental', 'seq-pac-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this rental', 'seq-pac-plugin' ),
            'archives'              => __( 'Rental archives', 'seq-pac-plugin' ),
            'insert_into_item'      => __( 'Insert into Rental', 'seq-pac-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Rental', 'seq-pac-plugin' ),
            'filter_items_list'     => __( 'Filter Rentals', 'seq-pac-plugin' ),
            'items_list_navigation' => __( 'Rentals list navigation', 'seq-pac-plugin' ),
            'items_list'            => __( 'Rentals List', 'seq-pac-plugin' ),
            'attributes'            => __( 'Rental Attributes', 'seq-pac-plugin' ),
            'parent_item_colon'     => __( 'Parent Rental', 'seq-pac-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'rental_labels', $labels );

        $options = [
            'label'               => __( 'Rentals', 'seq-pac-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'seq-pac-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'rental_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'rentals',
                'with_front' => true
            ],
            'query_var'           => 'rental',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-list-view',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'rental_location',
                'post_tag'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'rental_args', $options );

        // Register the post type.
        register_post_type(
            'rental',
            $options
        );

    }

}

// Run the class.
$listings = new Post_Types_Register;