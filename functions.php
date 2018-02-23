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

	register_sidebar( array(
		'name'          => 'Footer One',
		'id'            => 'hdaa-footer-1',
		'before_widget' => '<div class="col-sm-6 col-md-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Two',
		'id'            => 'hdaa-footer-2',
		'before_widget' => '<div class="col-sm-6 col-md-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Three',
		'id'            => 'hdaa-footer-3',
		'before_widget' => '<div class="col-sm-6 col-md-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Four',
		'id'            => 'hdaa-footer-4',
		'before_widget' => '<div class="col-sm-6 col-md-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'hdaa_widgets_init' );

/**
 * Remove Montserrat font
 */
wp_dequeue_style( 'bezel-fonts' );

// Remove the word 'archives' from archive listing pages
function hdaa_remove_archives_from_title( $title ) {
	$title = str_replace('Archives: ', '', $title);
	return $title;
}
add_filter( 'get_the_archive_title', 'hdaa_remove_archives_from_title' );
