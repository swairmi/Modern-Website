<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores_modern_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores_modern_theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$underscores_modern_theme_description = get_bloginfo( 'description', 'display' );
			if ( $underscores_modern_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $underscores_modern_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores_modern_theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">




		<!------------------SECTION ONE - "THE NAV BAR"--------------------->
<section class="main_nav_bar">
	<nav>
		<a href=""><li class="nav_itemone" id="navitems">HOME</li></a>
		<a href=""><li class="nav_itemtwo" id="navitems">FEATURES</li></a>
		<a href=""><li class="nav_itemthree" id="navitems">ABOUT</li></a>

		<a href=""><li class="nav_itemfour" id="navitems">SERVICES</li></a>
		<a href=""><li class="nav_itemfive" id="navitems">PORTFOLIO</li></a>

		<a href=""><li class="nav_itemseven" id="navitems">BLOG</li></a>
		<a href=""><li class="nav_itemeight" id="navitems">CONTACTS</li></a>
	</nav>
</section>

<!-------------------------------------------------->




<!------------------SECTION TWO - "TOP BANNER"--------------------->
<section class="top_and_first_section">
	<div class="top_banner_three">
		<div class="page_swipe_three">
			<div class="decor_backing_one"></div>

				<div class="three_title_group">
					<h2 class="sliderthree_title" id="three_title">theFUTURE</h2>
					<h2 class="sliderthree_desc" id="three_desc">NEW HTML TEMPLATES GENERATION</h2>	

						<div class="row" id="banner_three_buttons_row">
							<div class="col-md-6">
								<button class="three_button" id="slide_button">SEE FEATURES</button>  
							</div>
							<div class="col-md-6">
								<button class="three_button" id="slide_button">BUY TEMPLATE</button>
							</div>
						</div>
				</div>
		</div>
	</div>
</section>
<!------------------SECTION TWO - "TOP BANNER"--------------------->
