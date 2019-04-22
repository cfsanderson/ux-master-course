<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Coller
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'coller-before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
<?php if((of_get_option('logo', true) != "") && (of_get_option('logo', true) != 1) ) { ?>
			<h1 class="site-title logo-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <?php
			echo "<img class='main_logo' src='".of_get_option('logo', true)."' title='".esc_attr(get_bloginfo( 'name','display' ) )."'></a></h1>";	
			}
		else { ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> 
		<?php	
		}
		?>
		</div>
        
        <?php get_template_part('social', 'sociocon'); ?>
        
	</header><!-- #masthead -->
    
       <nav id="site-navigation" class="main-navigation" role="navigation">
         <div id="nav-container">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'coller' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'coller' ); ?>"><?php _e( 'Skip to content', 'coller' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </div>  
		</nav><!-- #site-navigation -->
        

	<div id="content" class="site-content">
	
    <?php get_template_part('slider', 'bx'); ?>