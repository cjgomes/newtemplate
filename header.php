<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package elementary OS Brasil
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--<link rel="stylesheet" href="http://basehold.it/24"> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
        		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'eOSbr' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'eOSbr' ); ?>"><?php _e( 'Skip to content', 'eOSbr' ); ?></a></div>
            <div class="container">
            <div class="logo unit alignleft"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(). '/images/logo.png';  ?>"/></a></div>     
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'unit alignleft' ) ); ?>
            <?php get_search_form(); ?>
            <div class="login-box"><div id="avatar" class="show"><?php 
                  if ( is_user_logged_in() ) {
                         global $current_user;
                        get_currentuserinfo();
                        echo get_avatar( $current_user->ID, 40 );
                  } 
                  else {
                        echo '<div class="login"><a href="'.wp_login_url().'" title="Login">Logar/Registrar</a></div>';
                  }
            ?></div></div>
            <div class="login-menu">
              <div>
                <a href="#">Perfil</a>
                <a href="#">Definições</a>
                <a href="#">Sair</a>
              </div>
            </div>
            </div>


            <script type="text/javascript">
              jQuery(document).ready(function ($) {

                $('#avatar').click(function () {

                  if ($(this).hasClass('show')) {
                    $('.login-menu').fadeIn('slow');
                    $(this).addClass('hide');
                    $(this).removeClass('show');
                  } else {
                    $('.login-menu').fadeOut('slow');
                    $(this).addClass('show');
                    $(this).removeClass('hide');
                  }

                });

              });
            </script>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

