<?php
/**
 * Schema meta tags.
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Frontend\Meta_Tags
 * @since      controlled-chaos 1.0.0
 */

namespace Seq_Pac_Plugin\Frontend\Meta_Tags;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<!-- Schema meta -->
<meta itemprop="url" content="<?php do_action( 'spp_meta_url_tag' ); ?>" />
<meta itemprop="name" content="<?php do_action( 'spp_meta_title_tag' ); ?>" />
<?php if ( is_404() ) : ?>
<meta itemprop="description" content="404 <?php esc_attr( _e( 'Not Found' ) ); ?>" />
<?php elseif ( is_archive() ) : ?>
<meta itemprop="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" />
<?php else : ?>
<meta itemprop="description" content="<?php esc_attr( do_action( 'spp_meta_description_tag' ) ); ?>" />
<?php endif; ?>
<meta itemprop="datePublished" content="<?php do_action( 'spp_meta_date_pub_tag' ); ?>" />
<meta itemprop="dateModified" content="<?php do_action( 'spp_meta_date_mod_tag' ); ?>" />
<meta itemprop="image" content="<?php do_action( 'spp_meta_image_tag' ); ?>" />
