<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crispy_Div
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'crispydiv' ); ?></a>
	<header id="masthead">
        <div class="inner tiny">
            <div class="site-header">
                <div class="site-branding">
                    <?php $logo_color = get_crispydiv_logo_by_color() ? 'white' : 'color'; ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/crispy-div-logo-<?php echo $logo_color; ?>.svg" alt="<?php echo THEME_NAME; ?>" /></a></p>
                    <p class="description"><?php echo get_bloginfo( 'description' ); ?><span class="highlight-text">.</span></p>
                </div>
		        <?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
				        <?php
				        wp_nav_menu(
					        array(
						        'theme_location' => 'primary-menu',
						        'menu_id'        => 'primary-menu',
					        )
				        );
				        ?>
                    </nav>
		        <?php } ?>
            </div>
        </div>
	</header>
