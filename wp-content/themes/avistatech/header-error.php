<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
    <html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
     	<head>
	        <!-- Required meta tags -->
	        <meta charset="<?php bloginfo( 'charset' ); ?>" />
	        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
	        <script>
		    	var wp_ajax_url='<?php echo get_bloginfo("home") ?>/wp-admin/admin-ajax.php';
		  	</script>
		  	<!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228491214-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
             
              gtag('config', 'UA-228491214-1');
            </script>
	        <!-- Bootstrap CSS -->
	        <?php wp_head(); ?>
      	</head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header class="main_banner">
            <nav class="navbar navbar-expand-sm navbar-dark fixed-top contact_menu" id="mainNav">
                <div class="container">

                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                      <img src="<?php echo the_field('header_logo','option'); ?>" class="img-fluid d_hide">
                      <img src="<?php echo the_field('header_sticky_logo','option'); ?>" class="img-fluid d_hide1 ">
                    </a>

                    <a href="<?php echo the_field('header_button_link','option'); ?>" class="btn get_touch r_block" type="button"><?php echo the_field('header_button_name','option'); ?></a>

                    <a href="#offcanvasRight" class="btn main-menu-tb d-block d-lg-none d-md-none d-xl-none" type="button" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Menu_blue.svg" />
                    </a>

                    <div class="collapse navbar-collapse align-items-center justify-content-end" id="mynavbar">
                        <a href="<?php echo the_field('social_linkedin','option'); ?>" target="_blank" class="linkdn"><i class="fa fa-linkedin link"></i></a>
                        <a href="<?php echo the_field('header_button_link','option'); ?>" class="btn get_touch" type="button"><?php echo the_field('header_button_name','option'); ?></a>
                        <a href="#offcanvasRight" class="btn main-menu-tb d-none d-lg-block d-md-block d-xl-block d_hide" type="button" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Menu_blue.svg" class="blue_menu"/>
                        </a>
                    </div>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                          <?php
            								wp_nav_menu( array(
            									 'theme_location' => 'header-menu',
            									 //'menu_id'        => 'header-menu',
            									 //'menu_class' => 'sidenav',
            									 'container' =>'ul'
            								) );
            							?>
                        </div>
                    </div>

                </div>
            </nav>
        </header>
