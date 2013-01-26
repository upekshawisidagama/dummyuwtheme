<?php

function uwtheme_styles(){
wp_enqueue_style( 'uwtheme-style', 
	get_template_directory_uri() . '/stylesheets/app.css');
}
add_action('wp_enqueue_scripts', 'uwtheme_styles')
?>
