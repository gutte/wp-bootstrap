<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
        
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php if (is_user_logged_in()) {body_class( 'isadmin' );} else {body_class();} ?>>
		
		

        <!-- Fixed navbar -->
        <nav id='topbar' class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/navbar-logo.png" style="height:30px; margin-top:-6px; float:left;" alt="<?php bloginfo('name'); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php
                
                wp_nav_menu(
                    array(
                        'menu' => 'Main Menu',
                        'container' => '',
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new Submenu_Walker_Nav_Menu()
                    )
                );
                ?>
                <?php
                
                wp_nav_menu(
                    array(
                        'menu' => 'Right Menu',
                        'container' => '',
                        'menu_class' => 'nav navbar-nav  navbar-right',
                        'walker' => new Submenu_Walker_Nav_Menu()
                    )
                );
                ?>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div id='maincontainer' class="container">
