<?php
namespace Huwo\Controllers\Dash\Menus;

defined( 'ABSPATH' ) or die( 'Not allowed!' );

class HuwoMenuController extends BaseMenuController 
{
	public $title = 'Huwo';

	public function __construct()
	{
		parent::__construct($this->assets(), 'main');
	}

	public function assets()
	{
		return [
			'css' => ['app.css'],
			'js' => [],
		];
	}

	public function view()
	{
		$this->setView('dash.menus.huwo');
	}
}
