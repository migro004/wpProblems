<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function twentyseventeen_body_classes_child( $classes ){
if ( is_active_sidebar( 'sidebar-1' ) &&  is_page() ) {
		$classes[] = 'has-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'twentyseventeen_body_classes_child' );
?>





