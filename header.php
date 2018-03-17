<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UMET • Universidad Metropolitana</title>
  <?php wp_head(); ?>
</head>
<body>
  <header id="header">
    <div class="head-bloque-1">
      <div class="logo">
        <a href="index.html">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logotipo-UMET.png" class="logo-img" alt="Universidad Metropolitana">
        </a>
      </div>
      <div class="espacio">
        <a href="#" class="btn-menu" id="btn-menu"><i class="fas fa-bars"></i></a>
      </div>
      <div class="contactos">
        <div class="escribenos">
          <span>
            Da clic para escribirnos:
          </span>
        </div>
        <div class="contactar">
          <a href="http://ow.ly/CL8t100Yfq8" class="boton-contacto" target="_blank"><i class="fab fa-facebook-messenger"></i> Messenger</a>
          <a href="https://api.whatsapp.com/send?phone=593984187505" class="boton-contacto" target="_blank"><i class="fab fa-whatsapp"></i> (+593) 98 418 7505</a>
          <a href="http://ow.ly/CL8t100Yfq8" class="boton-contacto" target="_blank">Inscríbete</a>
        </div>
      </div>
    </div>
    <nav id="menuNav">
      <?php wp_nav_menu(
        array(
          'theme_location' => 'menu_principal', //nombre del menu
          'container_id' => 'menuNav',          //ID del menu
          'menu_class' => 'main-menu'           //clase del menu <ul>
        )); ?>
    </nav>
  </header>
