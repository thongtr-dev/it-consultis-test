<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package it-consultis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'it-consultis'); ?></a>

		<header id="masthead" class="px-4 py-6 site-header bg-itc-light-gray">
			<div class="max-w-[1140px] mx-auto grid grid-cols-3 grid-rows-1">
				<nav class="desktop-navigation hidden md:grid md:place-content-center">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'desktop-primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="site-branding col-start-2 mx-auto">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$it_consultis_description = get_bloginfo('description', 'display');
					if ($it_consultis_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $it_consultis_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>

				</div><!-- .site-branding -->
				<button class="menu-toggle col-start-3" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'it-consultis'); ?></button>
		</header><!-- #masthead -->
		<nav id="site-navigation" class="main-navigation bg-itc-dark-red text-white md:hidden">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>