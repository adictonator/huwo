<?php
namespace Huwo\Controllers\Dash;

defined( 'ABSPATH' ) or die( 'Not allowed!' );

use Huwo\Engine\Support\ServiceProvider;
use Huwo\Engine\Support\Blueprints\Hookable;
use Huwo\Controllers\Dash\Menus\BaseMenuController;

class DashMenusController implements Hookable
{
	protected $menus = [
		Menus\HuwoMenuController::class,
	];

	public function init()
	{
		foreach ( $this->menus as $menu ) :
			if ( is_subclass_of( $menu, BaseMenuController::class ) ) ( new $menu )->load();
		endforeach;	
	}

	public function hook()
	{
		add_action( 'admin_menu', [$this, 'init'] );
	}
}