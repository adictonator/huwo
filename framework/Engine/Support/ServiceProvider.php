<?php
namespace Huwo\Engine\Support;

defined( 'ABSPATH' ) or die( 'Not allowed!' );

use Huwo\Engine\Support\Blueprints\Hookable;

class ServiceProvider
{
	protected static $providers;

	public static function load()
	{
		self::$providers = [
			\Huwo\Controllers\Dash\DashMenusController::class,
		];

		return new self;
	}

	public static function register()
	{
		foreach ( self::$providers as $provider ) :
			if ( is_subclass_of( $provider, Hookable::class ) ) ( new $provider )->hook();
		endforeach;
	}

	public static function boot()
	{
		self::load()->register();
	}
}