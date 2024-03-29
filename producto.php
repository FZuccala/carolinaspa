<?php
  if(isset($_GET['id'])){
    if(filter_var($_GET['id'], FILTER_VALIDATE_INT)){
      $producto_id = $_GET['id'];
    } else{
      header('Location: 404.html');
      exit;
    }
  }
  $titulo = "Productos";
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';
  $resultado = obtenerProducto($producto_id);
  while( $producto = $resultado->fetch_assoc() ){

?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/<?php echo utf8_encode($producto['imagen_completa']); ?>" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">
            <?php echo utf8_encode($producto['nombre']); ?>
          </h2>
        </div>
      </div>
    </div>
    <div class="container pt-4">
        <div class="row no-gutters">
          <main class="col-lg-8 contenido-principal">
            <h2 class="d-block d-md-none text-center text-uppercase">
              <?php echo utf8_encode($producto['nombre']); ?>
            </h2>
            <p>
              <?php echo utf8_encode($producto['descripcion']); ?>
            </p>

          </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
              <div class="sidebar pt-2 descripcion_producto">
                <h2 class="text-center text-uppercase mt-4">descripción</h2>
                <p class="text-center">
                  <?php echo utf8_encode($producto['descripcion_corta']); ?>
                </p>
                <h3 class="text-center text-uppercase mt-5">Precio</h3>
                <p class="display-4 text-center ">$<?php echo utf8_encode($producto['precio']); ?></p>

              </div>
            </aside>

        </div>
    </div>
    <?php  }  //fin del while?>

<?php
  include 'templates/footer.php';
?>