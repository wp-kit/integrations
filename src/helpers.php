<?php
	
	if( ! function_exists( 'config_path' ) ) {
		
		function config_path( $file = '' ) {
			
			if( function_exists('themosis_path') ) {
			    $path = themosis_path('theme.config');
		    } else {
			    $path = get_stylesheet_directory() . DS . 'resources' . DS . 'config';
		    }
		    return $path . ltrim( ( $file ? DS . $file : '' ), DS );
			
		}
		
	}