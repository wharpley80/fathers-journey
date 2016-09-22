<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'projects-menu' => __( 'Project Menu' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );

function fj_theme_styles() {

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'foundation_fonts', get_template_directory_uri() . '/css/foundation-icons/foundation-icons.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'fj_theme_styles' );

function fj_theme_js() {

	wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'fj_theme_js' );

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="module-heading">',
		'after_title' => '</h3>'
	));

}

function default_comments_on( $data ) {

    if( $data[ 'post_type' ] == ( 'projects' || 'travels' ) ) {
        $data[ 'comment_status' ] = 'open';
        $data[ 'ping_status' ] = 'open';
    }

    return $data;

}
add_filter( 'wp_insert_post_data', 'default_comments_on' );

create_widget( 'Front Page Left', 'front-left', 'Displays on left of Homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of Homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on right of Homepage' );
create_widget( 'Portfolio Page Bottom', 'port-bottom', 'Displays on bottom of Portfolio Page' );
create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with sidebar' );
create_widget( 'Portfolio Sidebar', 'portfolio', 'Displays on the side of Portfolio Page with sidebar' );
create_widget( 'Projects Sidebar', 'projects', 'Displays on the side of Projects Page with sidebar' );
create_widget( 'Travels Sidebar', 'travels', 'Displays on the side of Travels Page with sidebar' );

?>
