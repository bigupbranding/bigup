<?php
/**
 * header.php
 * @package bigup
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bigup' ); ?></a>

<div id="website">
	
	<header id="header" role="banner">
		
		<div class="container">
			
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
			</div>

			<nav id="site-navigation" role="navigation">
				<?php wp_nav_menu(); ?>
			</nav>

			<button id="mobile-toggle"><i class="bigup-menu"></i>Menu</button>

		</div>

	</header><!-- #header-->

	<?php if ( is_front_page() ): ?>
		<?php get_template_part('content/content', 'intro') ?>
	<?php endif ?>

	<div id="content">
		