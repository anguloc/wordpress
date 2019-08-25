<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if (is_archive() && ($paged > 1)&& ($paged < $wp_query->max_num_pages)) { ?>
<link rel="prefetch" href="<?php echo get_next_posts_page_link(); ?>">
<link rel="prerender" href="<?php echo get_next_posts_page_link(); ?>">
<?php } ?>
<?php wp_head();?>
<!--[if lte IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?> id="olo">
	<header id="oloLogo">
<!--		<h1><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" title="--><?php //bloginfo('name'); ?><!--"><img src="--><?php //header_image(); ?><!--" width="--><?php //echo get_custom_header()->width; ?><!--" height="--><?php //echo get_custom_header()->height; ?><!--" alt="--><?php //bloginfo('name'); ?><!--"></a></h1>-->
		<?php get_search_form(); ?>
		<nav id="oloMenu">
		<?php if(!IsMobile) { ?>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'olo_wp_list_pages', 'container' => false ) ); ?>
		<?php }else{ ?>
		<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'fallback_cb' => 'olo_wp_list_pages', 'container' => false ) ); ?>
		<?php } ?>
		</nav>
	</header>
	<div class="clear"></div>
	