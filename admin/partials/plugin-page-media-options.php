<?php
/**
 * About page media options output.
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Seq_Pac_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Media and Upload Options', 'seq-pac-plugin' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'seq-pac-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'seq-pac-plugin' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'seq-pac-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'seq-pac-plugin' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'seq-pac-plugin' ); ?></h3>