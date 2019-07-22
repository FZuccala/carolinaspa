<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">nosotros</h2>
        </div>
      </div>
    </div>
    <div class="container pt-4">
        <div class="row">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-center text-uppercase">
              nosotros
            </h2>
                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, minima. Sit velit facilis accusantium unde et dolores libero eligendi illum beatae est magni, voluptas dolorum eaque porro vel laboriosam amet!
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nulla corrupti quaerat harum ullam perferendis cum esse sint magni eum ab voluptates, nemo quam blanditiis cumque consectetur repellat at eos?
                </p>
                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex dignissimos quos ipsa officia eaque illo laboriosam dolores, delectus error reiciendis rerum, numquam minima, voluptas natus enim dolore. Laboriosam, voluptas aliquam.
                </p>
                <div class="galeria pt-4">
                    <h2 class="text-center mt-4">
                        <span class="text-lowercase d-block">
                          Conoce nuestras
                        </span>
                        instalaciones
                      </h2>
                      <a href="#" data-target="#imagen_1" data-toggle="modal">
                          <img src="img/galeria_mini_01.jpg" class="img-fluid" alt="">
                      </a>
                      <a href="#" data-target="#imagen_2" data-toggle="modal">
                        <img src="img/galeria_mini_02.jpg" class="img-fluid" alt="">
                    </a>
                    <a href="#" data-target="#imagen_3" data-toggle="modal">
                        <img src="img/galeria_mini_03.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="modal fade" id="imagen_1" aria-labelledby="imagen 1" role="dialog" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="img/galeria_grande_01.jpg" class="img-fluid" alt="">
                          </div><!--modal body-->
                        </div><!--modal content-->
                      </div><!--modal dialog-->
                    </div><!--modal fade-->
                    <div class="modal fade" id="imagen_2" aria-labelledby="imagen 2" role="dialog" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="">
                          </div><!--modal body-->
                        </div><!--modal content-->
                      </div><!--modal dialog-->
                    </div><!--modal fade-->
                    <div class="modal fade" id="imagen_3" aria-labelledby="imagen 3" role="dialog" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="">
                          </div><!--modal body-->
                        </div><!--modal content-->
                      </div><!--modal dialog-->
                    </div><!--modal fade-->
                </div>
        </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
              <div class="sidebar horarios">
                <h2 class="text-center mt-4 text-uppercase">
                    Horarios:
                  </h2>
                  <p class="text-center lead mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo rem nisi dolore quisquam corporis, minima quia omnis maiores, ipsum impedit aliquid libero quae dolores aliquam quam voluptas praesentium iusto delectus</p>
                  <table class="table table-hover text-center mt-4">
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
            </aside>
    
        </div>
    </div>


    <?php
  include 'templates/footer.php';
?>