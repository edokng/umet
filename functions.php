<?php

function umet_styles(){
  //Estilos
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('desktop', get_stylesheet_directory_uri(). '/assets/css/desktop.css');
  wp_enqueue_style('tablet', get_stylesheet_directory_uri(). '/assets/css/tablet.css');
  wp_enqueue_style('mobile', get_stylesheet_directory_uri(). '/assets/css/mobile.css');

  //Scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('fontawesomejs', "https://use.fontawesome.com/releases/v5.0.8/js/all.js");
  wp_enqueue_script('headroom', get_stylesheet_directory_uri(). 'assets/js/headroom.min.js', array('jquery', true));
  wp_enqueue_script('menuJS', get_stylesheet_directory_uri(). 'assets/js/menu.js', array('headroom', true));
}

add_action('wp_enqueue_scripts', 'umet_styles'); //ejecuta la funcion que llama a los estilos y scripts
add_theme_support('post-thumbnails'); //para que se vean las imágenes destacadas

// Dimensión para imágenes
//add_image_size('entradas', 293, 280);

/* Navegación */

register_nav_menus( array(
  'menu_principal' => __('Menu Principal', 'umet-theme'),
  'servicios_docentes' => __('Servicios al docente', 'umet-theme'),
  'servicios_estudiantes' => __('Servicios al estudiante', 'umet-theme'),
  'enlaces_interes' => __('Enlaces de interés', 'umet-theme')
));

?>
