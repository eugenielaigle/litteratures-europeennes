<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LEC</title>

  <!-- CSS de Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
  <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/assets/css/header-and-footer.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/assets/css/tablets.css" rel="stylesheet">
   <link href="<?php bloginfo('template_directory');?>/assets/css/agenda.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">

  <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle">Menu</button>
      <?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 'menu_class' => 'nav-menu' ) ); ?>
    </nav> -->
    <div class="header">
      <div class="container up-menu">
        <div class="row">
          <div class="col-md-1 col-md-offset-8 col-sm-4 socialmedia">
            <a href="">
              <div class="social-container">
                <div class="facebook-container"></div>
              </div>
            </a>
            <a href="">
              <div class="social-container">
                <div class="twitter-container"></div>
              </div>
            </a>
            <a href="">
              <div class="social-container">
                <div class="insta-container"></div>
              </div>
            </a>
          </div>
          <div class="col-md-2 col-sm-5 search-form"> <!-- formulaire recherche -->
           <?php get_search_form(); ?>
         </div>

         <div class="col-md-1 col-sm-2"> <!-- translation plugin -->
          <div id="weglot_here"></div>
        </div>
      </div>
    </div> <!-- end up-menu -->

    <div class="container header-menu">
      <div class="row row-header">
        <div class="col-md-2 col-sm-2 logo">
          <a href=""><img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/logo.svg"></a>
        </div>
        <!--  <a href="#" class="header-icon-nav" id="header-icon"></a> -->
        <div id="menu-principal" class="col-md-10 col-sm-10 navigation">
          <nav class="navbar" role="navigation">
           <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
         </nav>
       </div> <!-- end menu-principal -->
     </div>
   </div> <!-- end header menu -->
 </div> <!-- end header -->


