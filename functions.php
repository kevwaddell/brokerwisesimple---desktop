<?php 
	
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery');
			
			wp_register_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', array('admin-bar'), filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'all' );
			wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"), false , '2.1.4', false);
			wp_register_script( 'bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'functions', get_stylesheet_directory_uri() . '/_/js/scripts.js', array('jquery', 'bootstrap-all-min', 'bootstrap-select'), '1.0.0', true );	
			wp_enqueue_style('styles');
			wp_enqueue_script('jquery');
			wp_enqueue_script('bootstrap-select');
			wp_enqueue_script('functions');
		}
	}
	core_mods();
}

/* GRAVITY FORMS FUNCTIONS */
include (STYLESHEETPATH . '/_/functions/gravity-forms-functions.php');


// ADD AFC OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}	
	
	
?>