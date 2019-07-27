    <!--inicio footer-->
    <footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">Nosotros</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, repudiandae ad? Culpa quisquam molestiae vero eius? Quis quisquam saepe unde et esse facilis ratione aliquam quod, quibusdam eos molestiae consectetur!</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">horario</h3>
            <p>Lun-Vie: 9 AM - 7PM</p>
            <p>Sábado: 10 AM - 2PM</p>
            <p>Domingo: Cerrado</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">contacto</h3>
            <p>66 East Sunnyslope Avenue</p>
            <p>Lansdowne, PA 19050</p>
            <nav class="redes-sociales text-center">
              <ul>
                <li>
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                    <span class="sr-only">facebook</span></a>
                  </li>
                <li>
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                    <span class="sr-only">twitter</span></a>
                  </li>
                <li>
                  <a href="http://instagram.com">   
                    <i class="fab fa-instagram"></i>               
                    <span class="sr-only">instagram</span></a>
                  </li>
                <li>
                  <a href="http://pinterest.com"> 
                    <i class="fab fa-pinterest-p"></i>                 
                    <span class="sr-only">pinterest</span></a>
                  </li>
                <li>
                  <a href="http://youtube.com"> 
                    <i class="fab fa-youtube"></i>               
                    <span class="sr-only">youtube</span></a>
                  </li>
              </ul>
            </nav>
          </div>
          <hr class="w-100">
          <p class="w-100 text-center copyright">
            Carolina Spa & Salon 2019. Todos los derechos reservados.
          </p>
        </div><!--fin row-->
      </div><!--fin container-->
    </footer>
    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php 
  //Guarda todo el contenido a un archivo
  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);
  //Enviar al navegador
  ob_end_flush();

?>