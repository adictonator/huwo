<?php
namespace Huwo\Engine\Support\Traits;

defined( 'ABSPATH' ) or die( 'Not allowed!' );

use Huwo\Engine\Support\Exceptions\ViewErrorException;

trait ViewsTrait
{
	/**
	 * Assets array for the current class.
	 *
	 * @var array
	 */
	protected $assets = [];

	public function setView( string $path )
	{
		$filePath = $this->resolveViewPath( $path );

		if ( null !== $filePath ) :
			include_once $filePath;
		endif;
	}

	public function resolveViewPath( string $path )
	{
		$filePath = hw_path_resolver( $path, 'view' );
		
		try {
			if ( ! file_exists( $filePath ) ) :
				throw new ViewErrorException( $filePath );
			else:
				return $filePath;
			endif;
		} catch ( ViewErrorException $e ) {
			echo $e->msg();
		}
	}

	public function setAssets($assets)
	{
		$this->assets = $assets;
	}
}