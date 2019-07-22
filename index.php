<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';

?>

    <div class="container">
      <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
          <li data-target="#slider-principal" data-slide-to="1"></li>
          <li data-target="#slider-principal" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Nuevas instalaciones</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Conoce nuestros servicios</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide_03.jpg" alt="Promocion">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Promoción 2X1</h3>
            </div><!--Carousel-caption-->
          </div><!--Carousel item-->
        </div><!--Carousel inner-->
        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
      </div><!--#slider-principal-->
      <section class="nuevo-sitio py-5">
        <h2 class="text-center mt-4">
          <span class="text-lowercase d-block">
            Bienvenido a nuestro 
          </span>
          Sitio Web
        </h2>
        <p class="text-center mt-4">Te sentirás como nueva con nuestros <br> masajistas profesionales</p>
      </section>
    </div><!--container-->
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="imagen-servicio">
            <img src="img/servicio_01.jpg" class="img-fluid" alt="">
            <div class="row justify-content-center no-gutters">
              <div class="col-md-10 servicio-info pt-4">
                <h2 class="text-center text-uppercase">
                  <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                </h2>
                <a href="#" class="btn btn-primary btn-block mt-4 py-3 text-uppercase">Leer más</a>
              </div>
            </div>
          </div>
        </div><!--fin card-->
        <div class="col-md-4 text-center">
          <div class="imagen-servicio">
            <img src="img/servicio_02.jpg" class="img-fluid" alt="">
            <div class="row justify-content-center no-gutters">
              <div class="col-md-10 servicio-info pt-4">
                <h2 class="text-center text-uppercase">
                  <span class="text-lowercase d-block">Nuestros</span> servicios
                </h2>
                <a href="#" class="btn btn-primary btn-block mt-4 py-3 text-uppercase">Leer más</a>
              </div>
            </div>
          </div>
        </div><!--fin card-->
        <div class="col-md-4 text-center">
          <div class="imagen-servicio">
            <img src="img/servicio_03.jpg" class="img-fluid" alt="">
            <div class="row justify-content-center no-gutters">
              <div class="col-md-10 servicio-info pt-4">
                <h2 class="text-center text-uppercase">
                  <span class="text-lowercase d-block">Visita nuestra</span> tienda
                </h2>
                <a href="#" class="btn btn-primary btn-block mt-4 py-3 text-uppercase">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div><!--fin row-->
    </div><!--fin container-->
    <div class="horarios mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-md-4 mb-4">
            <h2 class="text-center mt-5 text-uppercase">
              Horarios:
            </h2>
            <p class="text-center lead mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo rem nisi dolore quisquam corporis, minima quia omnis maiores, ipsum impedit aliquid libero quae dolores aliquam quam voluptas praesentium iusto delectus</p>
            <table class="table table-hover text-center my-5">
              <thead>
                  <tr>
                      <th class="text-center">Día</th>
                      <th class="text-center">De</th>
                      <th class="text-center">Hasta</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td>Lunes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Martes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Miércoles</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Jueves</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Viernes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Sábado</td>
                      <td>10:00</td>
                      <td>14:00</td>
                  </tr>
                  <tr>
                      <td>Domingo</td>
                      <td>Cerrado</td>
                      <td>Cerrado</td>
                  </tr>
              </tbody>
         </table>
          </div>
          <div class="col-md-6 bg-horario"></div>
        </div>
      </div>
    </div>
    <section class="productos container py-5">
      <h2 class="text-center encabezado text-uppercase my-4">
        <span class="text-lowercase d-block">nuestros</span> productos</h2>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <a href="#">
                <img src="img/producto_mini_01.jpg" alt="" class="card-img-top">
              
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">Producto 1</h3>
                <p class="text-uppercase card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Rerum asperiores.</p>
                <p class="text-center lead precio">$25</p>
              </a>
              </div>
            </div>
          </div><!--col-md-3-->
          <div class="col-md-3">
              <div class="card">
                <a href="#">
                  <img src="img/producto_mini_02.jpg" alt="" class="card-img-top">
                
                <div class="card-body">
                  <h3 class="card-title text-center text-uppercase">Producto 2</h3>
                  <p class="text-uppercase card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Rerum asperiores.</p>
                  <p class="text-center lead precio">$25</p>
                </a>
                </div>
              </div>
            </div><!--col-md-3-->
            <div class="col-md-3">
                <div class="card">
                  <a href="#">
                    <img src="img/producto_mini_03.jpg" alt="" class="card-img-top">
                  
                  <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">Producto 3</h3>
                    <p class="text-uppercase card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Rerum asperiores.</p>
                    <p class="text-center lead precio">$25</p>
                  </a>
                  </div>
                </div>
              </div><!--col-md-3-->
              <div class="col-md-3">
                  <div class="card">
                    <a href="#">
                      <img src="img/producto_mini_04.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                      <h3 class="card-title text-center text-uppercase">Producto 4</h3>
                      <p class="text-uppercase card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit, Rerum asperiores.</p>
                      <p class="text-center lead precio">$25</p>
                    </a>
                    </div>
                  </div>
                </div><!--col-md-3-->
        </div><!--row-->
    </section>
    <div class="container-fluid citas py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center">
          <h3 class="text-uppercase">Realiza una cita</h3>
          <p class="mt-5">Maecenas rhoncus, augue sed volutpat suscipit, augue felis laoreet lectus, vel convallis diam est eu lectus. Mauris metus orci, tempus nec bibendum eget, pulvinar at metus. Etiam egestas sodales auctor.</p>
          <a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
        </div>
      </div>
    </div>
    <?php
  include 'templates/footer.php';
?>