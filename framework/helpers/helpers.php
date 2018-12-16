<?php

if ( ! function_exists('hw_path_resolver') ) {
	function hw_path_resolver( string $path, $fileType = 'view' )
	{
		if ( strpos( $path, '.' ) !== false ) :
			$pathArr = explode( '.', $path );
			$path = str_replace( '.', DS, $path );
		else:
			$pathArr = explode( '/', $path );
		endif;

		$ext = HW_FILE_TYPES[ $fileType ];
		$fileName = end( $pathArr );
		return $fullPath = HW_VIEWS_DIR . $path . $ext;
	}
}