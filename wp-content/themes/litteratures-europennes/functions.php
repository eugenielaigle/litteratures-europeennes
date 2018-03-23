<?php

// Utilisation du module de menu WP

register_nav_menus( array(
  'menu-principal' => 'Menu principal',
  'menu-footer' => 'Menu Pied de Page'
) );


/*** Fichiers CSS*/

    // Style.css
function wpdocs_theme_name_scripts() {
  wp_register_style('main-style', get_template_directory_uri().'/assets/css/header-and-footer.css', array(), true);
  wp_enqueue_style('main-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


// Home.css
function wpdocs_home_scripts() {
  wp_register_style('home-style', get_template_directory_uri().'/assets/css/home.css', array(), true);
  wp_enqueue_style('home-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_home_scripts' );


// Agenda.css
function wpdocs_agenda_scripts() {
  wp_register_style('agenda-style', get_template_directory_uri().'/assets/css/agenda.css', array(), true);
  wp_enqueue_style('agenda-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_agenda_scripts' );



// Tablets.css
function wpdocs_lec_scripts() {
  wp_register_style('tablet-style', get_template_directory_uri().'/assets/css/tablets.css', array(), true);
  wp_enqueue_style('tablet-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_lec_scripts' );

  // Reset.css
// function wpdocs_theme_reset() {
//     wp_register_style('reset-meyer', get_template_directory_uri().'/assets/css/reset.css', array(), true);
//     wp_enqueue_style('reset-meyer');
// }
// add_action( 'wp_enqueue_scripts', 'wpdocs_theme_reset' );


// Fichiers JS

wp_enqueue_script( 'bpc_togglemenu', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20160909', true );

wp_enqueue_script( 'search_menu', get_template_directory_uri() . '/assets/js/search.js', array('jquery'), '20180320', true );


function header_widgets_init() {

 register_sidebar( array(

 'name' => 'widget newsletter footer',
 'id' => 'widget-footer',
 'before_widget' => '<div class="nwa-widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="nwa-title">',
 'after_title' => '</h2>',
 ) );
}

add_action( 'widgets_init', 'header_widgets_init' );


function home_widgets_init() {

 register_sidebar( array(

 'name' => 'widget agenda home',
 'id' => 'widget-agenda-home',
 'before_widget' => '<div class="agenda-home-widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="agenda-home-title">',
 'after_title' => '</h2>',
 ) );
}

add_action( 'widgets_init', 'home_widgets_init' );

function remove_links_tab_menu_pages() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'remove_links_tab_menu_pages' );


