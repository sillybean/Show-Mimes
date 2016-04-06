<?php
/*
Plugin Name: Show MIMEs
Description: A tiny plugin to add more file type filters in the media library screens.
Author: Stephanie Leary
Version: 1.2
Author URI: http://sillybean.net/
*/

function scl_show_mime_types( $post_mime_types ) {  
	$new_mime_types = array(
		'application/pdf' => array( 
			__( 'PDFs' ), 
			__( 'Manage PDFs' ), 
			_n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) 
		),
		'application/msword' => array( 
			__( 'Word Docs' ), 
			__( 'Manage Word Docs' ), 
			_n_noop( 'Word Doc <span class="count">(%s)</span>', 'Word Docs <span class="count">(%s)</span>' ) 
		),
		'application/vnd.ms-excel' => array( 
			__( 'Spreadsheets' ), 
			__( 'Manage Spreadsheets' ), 
			_n_noop( 'Spreadsheet <span class="count">(%s)</span>', 'Spreadsheets <span class="count">(%s)</span>' ) 
		),
	);
	
	return array_merge( $post_mime_types, $new_mime_types );  
}  

add_filter( 'post_mime_types', 'scl_show_mime_types' );