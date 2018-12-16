<?php

/** General Constants. */
define( 'DS', DIRECTORY_SEPARATOR );
define( 'HW_VER', '1.0' );
define( 'HW_DB_VER', HW_VER );
define( 'HW_ROOT_DIR', plugin_dir_path( HW_ROOT ) );
define( 'HW_ROOT_URL', plugin_dir_url( HW_ROOT ) );
define( 'HW_VIEWS_DIR', HW_ROOT_DIR . 'resources' . DS . 'views' . DS );
define( 'HW_VIEWS_URL', HW_ROOT_URL . 'resources' . DS . 'views' . DS );

/** Files and extensions. */
define( 'HW_VIEWS_EXT', '.view.php' );
define( 'HW_INCLD_EXT', '.inc.php' );
define( 'HW_FILE_TYPES', [
	'view' => HW_VIEWS_EXT,
	'inc'  => HW_INCLD_EXT,
	'css'  => '.css',
	'js'   => '.js',
]);

/** Plugin constants. */
define( 'HW_PLUGIN_NAME', 'Huwo' );
define( 'HW_PLUGIN_SLUG', 'hw' );
define( 'HW_PLUGIN_SHORT_NAME', 'HW' );
define( 'HW_PLUGIN_LONG_NAME', 'Huwo &dash; Who is working?' );

