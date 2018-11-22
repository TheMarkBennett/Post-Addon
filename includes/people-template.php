<?php


//filter for people template
add_filter( 'single_template', 'load_my_custom_template', 50, 1 );
function load_my_custom_template( $template ) {

	if ( is_singular( 'person' ) ) {
		$template = plugins_url( 'templates/person.php', __FILE__ );
	}
	
	return $template;
}