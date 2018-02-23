<?php


function hdaa_add_google_fonts() {
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Rubik:400,700i', false );
}
add_action( 'wp_enqueue_scripts', 'hdaa_add_google_fonts' );


function hdaa_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'hdaa_enqueue_styles' );


function hdaa_widgets_init() {

	register_sidebar( array(
		'name'          => 'H&DAA Header Widget Area',
		'id'            => 'hdaa-header-widget',
		'before_widget' => '<div class="hdaa-header-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hdaa-header-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'H&DAA Header Social Icons Area',
		'id'            => 'hdaa-header-social-widget',
		'before_widget' => '<div class="hdaa-header-social-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hdaa-header-social-widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'hdaa_widgets_init' );