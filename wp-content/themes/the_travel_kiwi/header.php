<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Travel_Kiwi
 */

$mobile_class= "";
if ( wp_is_mobile() ) { $mobile_class = "mobile"; }

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the_travel_kiwi' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation <?php echo $mobile_class; ?>" role="navigation">
			<div class="left-container-50p">
				<a href="<?php echo get_site_url(); ?>" class="site-logo-link hvr-wobble-vertical">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_.png" title="The Travel Kiwi" alt="The Travel Kiwi Logo" class="site-logo" />
				</a>
			</div>
			<div class="right-container-50p">				
				<?php 
				if ( !wp_is_mobile() ) {
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
				?>
					<button id="login-form-controller" class="green-bold-button">Login</button>
				<?php 
				} else {
					?>
						<button id="menu-controller" class="fa fa-bars"></button>
						<button id="login-form-controller" class="fa fa-sign-in"></button>
					<?php
				}
				?>
			</div>
		</nav><!-- #site-navigation -->
		<?php 
		if ( wp_is_mobile() ) {
			?>
			
			<div id="mobile-menu-holder" class="animated">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>

			<?php
		}
		?>
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php echo $mobile_class; ?>">
