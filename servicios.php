<?php
  $titulo = "Servicios";
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">servicios</h2>
        </div>
      </div>
    </div>
    <div class="container pt-4">
        <div class="row">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-center text-uppercase">
              servicios
            </h2>
            <div id="servicios">
                <div class="card">
                    <div class="card-header" id="servicio1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                                Servicio1
                            </button>
                        </h2>
                    </div><!--card-header-->
                    <div id="descripcion1" class="collapse show" aria-labelledby="#servicio1" data-parent="#servicios">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus animi doloribus velit fugit inventore ipsum, mollitia, odit eius beatae tenetur hic. Eaque eum, dolor amet tempore fugit incidunt! Beatae, molestias.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet quo, quam aliquam doloremque atque laborum totam commodi alias? Temporibus qui, veritatis dicta reprehenderit amet ipsum corrupti enim cumque impedit quaerat?
                            </p>
                        </div><!--card-body-->
                    </div><!--#descripcion1-->
                </div><!--card-->
                <div class="card">
                    <div class="card-header" id="servicio1">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                                Servicio2
                            </button>
                        </h2>
                    </div><!--card-header-->
                    <div id="descripcion2" class="collapse" aria-labelledby="#servicio2" data-parent="#servicios">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus animi doloribus velit fugit inventore ipsum, mollitia, odit eius beatae tenetur hic. Eaque eum, dolor amet tempore fugit incidunt! Beatae, molestias.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque perferendis expedita laudantium suscipit recusandae ratione tenetur, placeat error laborum eligendi ducimus saepe sint atque rem eius alias eveniet mollitia excepturi!
                            </p>
                        </div><!--card-body-->
                    </div><!--#descripcion2-->
                </div><!--card-->
                <div class="card">
                    <div class="card-header" id="servicio3">
                        <h2 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                                Servicio3
                            </button>
                        </h2>
                    </div><!--card-header-->
                    <div id="descripcion3" class="collapse" aria-labelledby="#servicio3" data-parent="#servicios">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus animi doloribus velit fugit inventore ipsum, mollitia, odit eius beatae tenetur hic. Eaque eum, dolor amet tempore fugit incidunt! Beatae, molestias.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptates dignissimos laboriosam vero voluptatibus tempore rem, ab inventore cum hic. Amet officia explicabo facere vel sequi quasi ex quod reiciendis!
                            </p>
                        </div><!--card-body-->
                    </div><!--#descripcion1-->
                </div><!--card-->
            </div><!--#servicios-->
        </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 ">
              <div class="sidebar p-3">
                <h2 class="text-center text-uppercase mt-0">Nuevos <br> clientes</h2>
                <p class="lead mt-4 text-center">Recibe 20% de descuento con este cupón</p>
                <div class="cupon px-2 py-5 mt-5">
                    <p class="text-uppercase text-center mb-0"><span class="descuento">20% de descuento</span><br> en todos los servicios</p>
                </div>
              </div>
            </aside>

        </div>
    </div>
    <?php
  include 'templates/citas.php';
?>

      <?php
  include 'templates/footer.php';
?>