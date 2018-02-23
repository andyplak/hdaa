<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bezel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site-wrapper site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">

					<div class="site-header-inside row">

						<div class="col-md-8">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding-wrapper -->

						<?php if ( is_active_sidebar( 'hdaa-header-widget' ) ) : ?>
						<div id="header-widget-area" class="col-md-4 hdaa-widget-area widget-area pull-right" role="complementary">
							<?php dynamic_sidebar( 'hdaa-header-widget' ); ?>
						</div>

						<?php endif; ?>

						<div class="col-md-12 toggle-menu-wrapper">
							<a href="#main-navigation-responsive" title="<?php esc_attr_e( 'Menu', 'bezel' ); ?>" class="toggle-menu-control">
								<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'bezel' ); ?></span>
							</a>
						</div>

					</div><!-- .site-header-inside -->

				</div><!-- .col-xxl-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12">

					<div class="main-navigation-inside">

						<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bezel' ); ?></a>

						<?php
						wp_nav_menu( apply_filters( 'bezel_primary_menu_args', array(
							'container'       => 'div',
							'container_class' => 'site-primary-menu',
							'theme_location'  => 'primary',
							'menu_class'      => 'primary-menu sf-menu',
							'depth'           => 3,
						) ) );
						?>

					</div><!-- .main-navigation-inside -->

				</div><!-- .col-xxl-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</nav><!-- .main-navigation -->

	<div id="content" class="site-content">
