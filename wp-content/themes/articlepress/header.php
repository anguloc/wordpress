<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ArticlePress
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

<?php 
    //wp_body_open hook from WordPress 5.2
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
?>
<a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'Skip to content', 'articlepress' ); ?>
</a>

<div id="page" class="site">

    <!--====== Header Start ======-->
    <header class="header">
        <nav class="navbar navbar-expand-lg center-brand static-nav header header--fixed">
            <div class="container">
                <?php
                    if ( has_custom_logo() ) {
                    	the_custom_logo();
                    } else { ?>
    					<a class="articlepress-logo-text navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h3><?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?></h3></a>
    			<?php } ?>

                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#etanav">
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <div class="main-navigation collapse navbar-collapse" id="etanav">
                	<?php
                		wp_nav_menu(array(
                            'theme_location'    => 'main-menu',
                            'menu_class'        => 'navbar-nav ml-auto main-menu'
                		));

                	?>
                </div>
            </div>
            <!--/.CONTAINER-->
        </nav>
        <!--/.main navbar-->
    </header>
    <!--====== Header End ======-->

	<div id="content" class="site-content">
