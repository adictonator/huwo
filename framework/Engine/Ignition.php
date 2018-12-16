<?php
namespace Huwo\Engine;

defined( 'ABSPATH' ) or die( 'Not allowed!' );

use Huwo\Engine\Support\ServiceProvider;

final class Ignition
{
	private static $_instance;

	private static function __instance()
	{
		if ( null === self::$_instance ) :
			self::$_instance = new self;
		endif;

		return self::$_instance;
	}
	public static function ignite()
	{
		self::__instance();
		ServiceProvider::boot();
	}
}
