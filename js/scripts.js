(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          } else {
            var nombre = document.getElementById('nombre').value;
            var email = document.getElementById('email').value;
            var mensaje = document.getElementById('mensaje').value;

            //Ejecutar Ajax
            var xhr = new XMLHttpRequest();

            //Abrir la conexion
            xhr.open('POST', 'http://localhost/carolinaspa/inc/enviar.php', true );
            
            
            //Siempre que utilices un formulario tenes que poner un header
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            //Revisar el estado
            xhr.onload = function() {
              if(xhr.status === 200){
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                if(respuesta.respuesta === true){
                  var div = document.createElement("div");
                  div.appendChild(document.createTextNode("Mensaje enviado correctamente."));
                  div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                  document.querySelector('form').appendChild(div);
                  setTimeout(function(){
                    document.querySelector('.alert').remove();
                  }, 3000);
                }
              } else{
                
                
              }
            }
            //Enviar los datos
            xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);
            
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
   