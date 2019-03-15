<?php
/**
 * Example module frontend
 *
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
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
} ?>
<div class="fl-example-text">
    <?php echo $settings->textarea_field; ?>
    <?php $module->example_method(); ?>
</div>