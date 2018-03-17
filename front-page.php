<?php
/*
Template name: Frontpage
*/
get_header();
//die('hola');
?>
<main>
  <section class="servicios">
    <div class="item-servicio">
      <div class="imagen-cabecera">
        <img src="assets/images/servicios/default.jpg" alt="Servicios al estudiante">
      </div>
      <div class="titular">
        <h2>
          <small>
            Servicios
          </small>
          <br>
            Al estudiante
        </h2>
      </div>
      <div class="menu-servicio">
        <ul>
          <li><a href="#">Consultas académicas</a></li>
          <li><a href="#">Matrícula Online</a></li>
          <li><a href="#">Requisitos para certificados</a></li>
          <li><a href="#">Solicitudes</a></li>
          <li><a href="#">Titulación / Graduación</a></li>
          <li><a href="#">UMET Virtual</a></li>
          <li><a href="#">WebMail</a></li>
        </ul>
      </div>
    </div>
    <div class="item-servicio">
      <div class="imagen-cabecera">
        <img src="assets/images/servicios/default.jpg" alt="Servicios al estudiante">
      </div>
      <div class="titular">
        <h2>
          <small>
            Servicios
          </small>
          <br>
            Al docente
        </h2>
      </div>
      <div class="menu-servicio">
        <ul>
          <li><a href="#">Consultas académicas</a></li>
          <li><a href="#">Notas</a></li>
          <li><a href="#">Pares autoevaluación</a></li>
          <li><a href="#">Plataforma virtual</a></li>
          <li><a href="#">WebMail / Graduación</a></li>
        </ul>
      </div>
    </div>
    <div class="item-servicio">
      <div class="imagen-cabecera">
        <img src="assets/images/servicios/default.jpg" alt="Servicios al estudiante">
      </div>
      <div class="titular">
        <h2>
          <small>
            Oferta académica
          </small>
          <br>
            2018 - 2019
        </h2>
      </div>
      <div class="menu-servicio">
        <form action="">
          <select name="campus" id="campus" class="form-select">
            <option value="">Selecciona tu campus</option>
            <option value="guayaquil">Guayaquil</option>
            <option value="quito">Quito</option>
            <option value="machala">Machala</option>
          </select>
          <select name="carrera" id="carrera" class="form-select">
            <option value="">Selecciona tu carrera</option>
          </select>
          <select name="jornada" id="jornada" class="form-select">
            <option value="">Selecciona la jornada</option>
          </select>
          <button class="form-button" value="consultar">Consultar</button>
        </form>
      </div>
    </div>
    <div class="item-servicio">
      <div class="imagen-cabecera">
        <img src="assets/images/servicios/default.jpg" alt="Servicios al estudiante">
      </div>
      <div class="titular">
        <h2>
          <small>
            Te puede interesar
          </small>
          <br>
            Info. general
        </h2>
      </div>
      <div class="menu-servicio">
        <ul>
          <li><a href="#">Autoridades</a></li>
          <li><a href="#">Becas y descuentos</a></li>
          <li><a href="#">Bolsa de empleo</a></li>
          <li><a href="#">Convalidaciones</a></li>
          <li><a href="#">Consulta MET</a></li>
          <li><a href="#">Profesionalízate</a></li>
        </ul>
      </div>
    </div>
  </section>
  <hr>
  <section class="noticias">
    <div class="titulo-principal-noticias">
      <h2>Últimas noticias</h2>
      <h4><a href="#">Ver todas las noticias</a></h4>
    </div>
    <br>
    <div class="bloque-noticias">
      <div class="noticias-horizontal-vertical">
        <div class="noticias-horizontal">
          <!-- noticia -->
          <?php
            //consulta de noticias a la base
            $args = array(
              'posts_per_page' => 2
            );
            $entradasHorizontal = new WP_Query($args);
            while($entradasHorizontal->have_posts() ): $entradasHorizontal->the_post();
           ?>
          <div class="noticia-horizontal">
            <div class="imagen">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="descripcion-noticia">
              <span class="fecha">Marzo 3, 2018</span>
              <h3>
                <a href="noticias.html"><?php the_title(); ?></a>
              </h3>
              <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius reprehenderit debitis dolore atque porro quam adipisci.</p>
              <a href="noticias.html" class="btn-leer-mas">Leer más</a>
            </div>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
           ?>
        </div>
        <?php
          //consulta de noticias a la base
          $args2 = array(
            'posts_per_page' => 1,
            'offset' => 2
          );
          $entradasV1 = new WP_Query($args2);
          while($entradasV1->have_posts() ): $entradasV1->the_post();
         ?>
        <div class="noticia-vertical-h">
          <div class="imagen">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="descripcion-noticia">
            <span class="fecha">Marzo 3, 2018</span>
            <h3>
              <a href="noticias.html"><?php the_title(); ?></a>
            </h3>
            <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius reprehenderit debitis dolore atque porro quam adipisci.</p>
            <a href="noticias.html" class="btn-leer-mas">Leer más</a>
          </div>
        </div>
        <?php
          endwhile;
          wp_reset_postdata();
         ?>
      </div>
      <?php
        //consulta de noticias a la base
        $args3 = array(
          'posts_per_page' => 1,
          'offset' => 3
        );
        $entradasV2 = new WP_Query($args3);
        while($entradasV2->have_posts() ): $entradasV2->the_post();
       ?>
      <div class="noticia-vertical">
        <div class="noticia-vertical">
          <div class="descripcion-noticia-vertical" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_the_post_thumbnail_url(); ?>');background-repeat:no-repeat;-position:center center;backgroung-size:container; ">
            <span class="fecha">Marzo 3, 2018</span>
            <h3>
              <a href="noticias.html"><?php the_title(); ?></a>
            </h3>
            <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius reprehenderit debitis dolore atque porro quam adipisci.</p>
            <a href="noticias.html" class="btn-leer-mas">Leer más</a>
          </div>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
       ?>
    </div>
  </section>
  <!-- eventos -->
  <section class="eventos">
    <div class="titulo-principal-noticias">
      <h2>Próximos eventos</h2>
      <h4><a href="#">Ver todos los eventos</a></h4>
    </div>
    <br>
    <div class="lista-eventos">
      <!-- evento -->
      <div class="evento">
        <div class="titular-evento">
          <a href="#">
            <h3>Marzo 10</h3>
          </a>
          <h3 class="text-right"><i class="far fa-calendar-alt"></i></h3>
        </div>
        <div class="detalle-evento">
          <div class="item-evento item-1">
            <div class="icono">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="desc">
              <a href="#">Creación del grupo científico estudiantil</a>
            </div>
          </div>
          <div class="item-evento item-2">
            <div class="icono">
              <i class="far fa-compass"></i>
            </div>
            <div class="lugar">Campus Guayaquil</div>
          </div>
          <div class="item-evento item-3">
            <div class="icono">
              <i class="far fa-clock"></i>
            </div>
            <div class="hora">09h00</div>
          </div>
        </div>
      </div>
      <!-- evento -->
      <div class="evento">
        <div class="titular-evento">
          <a href="eventos.html">
            <h3>Marzo 10</h3>
          </a>
          <h3 class="text-right"><i class="far fa-calendar-alt"></i></h3>
        </div>
        <div class="detalle-evento">
          <div class="item-evento item-1">
            <div class="icono">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="desc">
              <a href="eventos.html">Creación del grupo científico estudiantil</a>
            </div>
          </div>
          <div class="item-evento item-2">
            <div class="icono">
              <i class="far fa-compass"></i>
            </div>
            <div class="lugar">Campus Guayaquil</div>
          </div>
          <div class="item-evento item-3">
            <div class="icono">
              <i class="far fa-clock"></i>

            </div>
            <div class="hora">09h00</div>
          </div>
        </div>
      </div>
      <!-- evento -->
      <div class="evento">
        <div class="titular-evento">
          <a href="eventos.html">
            <h3>Marzo 10</h3>
          </a>
          <h3 class="text-right"><i class="far fa-calendar-alt"></i></h3>
        </div>
        <div class="detalle-evento">
          <div class="item-evento item-1">
            <div class="icono">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="desc">
              <a href="eventos.html">Creación del grupo científico estudiantil</a>
            </div>
          </div>
          <div class="item-evento item-2">
            <div class="icono">
              <i class="far fa-compass"></i>
            </div>
            <div class="lugar">Campus Guayaquil</div>
          </div>
          <div class="item-evento item-3">
            <div class="icono">
              <i class="far fa-clock"></i>

            </div>
            <div class="hora">09h00</div>
          </div>
        </div>
      </div>
      <!-- evento -->
      <div class="evento">
        <div class="titular-evento">
          <a href="eventos.html">
            <h3>Marzo 10</h3>
          </a>
          <h3 class="text-right"><i class="far fa-calendar-alt"></i></h3>
        </div>
        <div class="detalle-evento">
          <div class="item-evento item-1">
            <div class="icono">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="desc">
              <a href="eventos.html">Creación del grupo científico estudiantil</a>
            </div>
          </div>
          <div class="item-evento item-2">
            <div class="icono">
              <i class="far fa-compass"></i>
            </div>
            <div class="lugar">Campus Guayaquil</div>
          </div>
          <div class="item-evento item-3">
            <div class="icono">
              <i class="far fa-clock"></i>

            </div>
            <div class="hora">09h00</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
