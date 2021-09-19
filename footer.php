  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>

// Funcion invocada desde LIBRO.PHP y desde USUARIO.PHP - Boton ELIMINAR
      function clickHandler(e){
        e.preventDefault();
        swal({
          title: "Confirma eliminar el Registro ?",
          text:  "Si elimina el registro no se podra recuparar !"+ e.target.id,
          type:  "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "SI !",
          cancelButtonText: "No",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            let form = document.getElementById('deleteForm'+e.target.id.replace('delete',''));
            form.submit();
            swal("Borrado!!!", "El registro ha sido eliminado.", "success");
          } else {
            swal("Cancelado", "El registro NO se ha eliminado.", "error");
          }
        });
      }


function isValidCorreo(mail) {
    if (mail.length > 0) {
        return true;
    }
    return false;
}

function isValidMensaje(mensaje) {
    // console.log(mensaje.length);
    if (mensaje.length > 0) {
        return true;
    }
    return false;
}

// Esta funcion se invoca desde CONTACTO.PHP -- Boton CONTACTO
function clickHandler2(e){
        e.preventDefault();
         // if(confirm("Confirma el Envio!")) 
       swal(
          {
            title: "Confirma el Contacto ?",
            text:  "Si confirma se enviara la Consulta",
            type:  "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText:  "Si !",
            cancelButtonText:   "No",
            closeOnConfirm: false,
            closeOnCancel:  false
          },
          function(isConfirm) 
            {
              if (isConfirm)        
              { 
                  var errorcontacto = document.getElementById('errorcontacto');     
                  errorcontacto.style.display = 'none'
                  let mail = document.getElementById('mail').value;
                  let mensaje = document.getElementById('mensaje').value;

                  if (isValidCorreo(mail) && isValidMensaje(mensaje)) 
                  {
                      errorcontacto.style.display = 'none';   

                      //swal("Su consulta fue enviada");      

                      // Enviar a CONTACTO-VALID.PHP
                      document.getElementById("contacform").submit();
                  }
                  else 
                  { 
                      errorcontacto.style.display = 'block';
                      swal("Su Consulta no es valida porque esta incompleta !");
                  }           
              } 
              else 
              {
                  swal("Cancelado", "Su consulta no fue enviado :)", "error");
              }
            }
          );
}  


// Esta funcion se invoca desde PRESTAMO.PHP -- Boton PRESTAR
function clickHandler3(e){
        e.preventDefault();
        swal(
          {
          title: "Confirma el Prestamo?",
          text:  "Si confirma se registrara el Prestamo"+ e.target.id,
          type:  "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText:  "Si !",
          cancelButtonText:   "No",
          closeOnConfirm: false,
          closeOnCancel:  false
        },
        function(isConfirm) 
        {
          if (isConfirm) 
          {
             let id = e.target.id;
             document.getElementById("prestarForm"+id).submit();            
            //  swal("Confirmado", "Prestamo registrado", "success");
          } 
          else 
          {
             swal("No Confirmo", "El Prestamo no se registro", "error");
          }
        });
}

// Funcion que se invoca desde LIBROS.PHP
      function filtrar_func(event){
        event.preventDefault();
        var selectedValue = document.querySelector('input[name="criterio"]:checked').id  
        alert("Hola");
        alert(selectedValue);
        document.getElementById('criterioValor').value = selectedValue;
        document.getElementById('filtrarForm').submit();
      }

// Funcion que se invoca desde PRESTAMO.PHP
      function filtrar_prestamo(event){
        event.preventDefault();
        var selectedValue = document.querySelector('input[name="criterio"]:checked').id 

        // alert(selectedValue);
        document.getElementById('criterioValor').value = selectedValue;
        document.getElementById('filtrarPrestamo').submit();
      }

// Esta funcion se invoca desde DEVOLUCION.PHP -- Boton DEVOLVER
      function clickHandler5(e) 
      {
        e.preventDefault();
        swal(
        {
          title: "Confirma la Devolucion?",
          text:  "Si confirma se registrara la Devolucion"+ e.target.id,
          type:  "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText:  "Si !",
          cancelButtonText:   "No",
          closeOnConfirm: false,
          closeOnCancel:  false
        },
        function(isConfirm) 
        {
          if (isConfirm) 
          {
             let id = e.target.id;
             document.getElementById("devolverForm"+id).submit();               

             swal("Confirmado", "Devolucion registrada", "success");
          } 
          else 
          {
             swal("No Confirmo", "La Devolucion no se registro", "error");
          }
        });

      }
    </script>


