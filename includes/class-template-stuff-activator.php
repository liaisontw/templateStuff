<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/liaisontw
 * @since      1.0.0
 *
 * @package    template_Stuff
 * @subpackage template_Stuff/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    template_Stuff
 * @subpackage template_Stuff/includes
 * @author     liason <liaison.tw@gmail.com>
 */
class template_Stuff_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option( 'template_stuff_active', 'yes' );
		add_option( 'template_stuff_template_text', 'Read More' );
		add_option( 'template_stuff_template_padding', '..' );
	}

}
