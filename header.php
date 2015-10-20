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
    <body>

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
              <a class="navbar-brand" href="#"><img src="img/navbar-logo.png" style="height:30px; margin-top:-6px; float:left;"><?php bloginfo('name'); ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php
                
                wp_nav_menu(
                    array(
                        'menu' => 'main_menu',
                        'container' => '',
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new Submenu_Walker_Nav_Menu()
                    )
                );
                ?>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Suomi <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Svenska</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div id='maincontainer' class="container">
