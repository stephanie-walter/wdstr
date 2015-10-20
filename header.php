<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6 no-js"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );
	echo ' ';
	// Add the blog name. ou pas (gc)
	//bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

	?></title>
	<meta name="author" content="">
	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Place favicon.ico and apple-touch-icon.png in the images folder -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png"><!--60X60-->
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen, projection" />
	
	<?php // Use this url to get your personnal build http://www.modernizr.com/download/ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>
	>
	
	<!--End Pattern HTML-->
	<div class="menu-wrapper">
	
	<a href="#menu" class="menu-link">Menu</a>
	<nav id="menu" role="navigation">
	    <div class="assistive-text">
	        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>">
	        <?php _e( 'Skip to content', 'twentyten' ); ?></a>
	    </div>

	    <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #access -->
	</div>


		<!-- <nav id="menu" role="navigation">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav> -->

	<div id="content" class="hfeed container">
		<header role="banner">
			<hgroup>
					<h1 class="site-title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo  get_template_directory_uri();?>/images/logo-wdstr.png" title="<?php bloginfo( 'name' ); ?>">
							<span class="ir"><?php bloginfo( 'name' ); ?></span>
						</a>
					</h1>
				</hgroup>
		</header>

		<div class="line gut">
			<?php 
			if ( !(
					is_page_template('left-sidebar-page.php') ||
					is_page_template('full-width-page.php') ||
					is_single() ||
					is_home() ||
					is_front_page() ||
					is_page() ||
					( 'event' == get_post_type() )
					)
				)
			{
				?>

			<section role="region" class="content mod left w70">
			<?php 
			}
			?>