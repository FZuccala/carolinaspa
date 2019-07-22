<?php
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/contacto.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">contacto</h2>
        </div>
      </div>
    </div>
    <div class="container pt-4">
        <div class="row justify-content-center">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-center text-uppercase">
              contacto
            </h2>
            <form class="p-5 mt-5 formulario-contacto needs-validation" novalidate>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Tu Nombre" required>
                    <div class="invalid-feedback">El nombre es obligatorio</div>
                    <div class="valid-feedback"><i class="far fa-check-circle"></i></div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Tu Correo" required>
                    <div class="invalid-feedback">Ingresa un correo válido</div>
                    <div class="valid-feedback"><i class="far fa-check-circle"></i></div>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" class="form-control" cols="20" rows="5" placeholder="Tu mensaje" required></textarea>
                    <div class="invalid-feedback">Escribe tu mensaje</div>
                    <div class="valid-feedback"><i class="far fa-check-circle"></i></div>
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary text-uppercase">
            </form>
          </main>
        </div>
    </div>


    <?php
  include 'templates/footer.php';
?>