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

      function clickHandler(e){
        e.preventDefault();
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!"+ e.target.id,
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes!",
          cancelButtonText: "No",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            let form = document.getElementById('deleteForm'+e.target.id.replace('delete',''));
            form.submit();
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
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

function clickHandler2(e){
       e.preventDefault();
        alert('se ha dado click al boton');   
        if(confirm("Confirma el Envio!")) { 
          var errorcontacto = document.getElementById('errorcontacto');     
            errorcontacto.style.display = 'none'
            let mail = document.getElementById('mail').value;
            let mensaje = document.getElementById('mensaje').value;
             
            if (isValidCorreo(mail) && isValidMensaje(mensaje)) 
            {
                errorcontacto.style.display = 'none';   
                //  mando a la console
                console.log(mail);
                console.log(mensaje);

                swal("Envio", "Su consulta fue enviada", "Ok");

                // contacto-valid.php
                document.forms["contacto-valid.php"].submit()
            }
            else 
            { 
                 errorcontacto.style.display = 'block';
                swal("Su Consulta no es valida !");

            }

            // let form = document.getElementById('deleteForm'+e.target.id.replace('delete',''));
            // form.submit();
            // let form = contacto-valid.php;
            // form.submit();
            // contacto-valid.submit();

            
          } 
          else {
            swal("Cancelado", "Su consulta no fue enviado :)", "error");
          }
        };
       
function clickHandler3(e){
        e.preventDefault();
        alert('se ha dado click al boton PRESTAR LIBRO');   


        if(confirm("Confirma el PRESTAMO ?")) { 

              document.forms["prestamo-valid.php"].submit();


                // swal("Envio", "Su consulta fue enviada", "Ok");
                // swal("Su Consulta no es valida !");
                // swal("Cancelado", "Su consulta no fue enviado :)", "error");
           
          } 
}

      function filtrar_func(event){
        event.preventDefault();
        var selectedValue = document.querySelector('input[name="criterio"]:checked').id  
        alert("Hola");
        document.getElementById('criterioValor').value = selectedValue;
        document.getElementById('filtrarForm').submit();
      }


      function clickHandler5(e){
        e.preventDefault();
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!"+ e.target.id,
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes!",
          cancelButtonText: "No",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            let form = document.getElementById('deleteForm'+e.target.id.replace('delete',''));
            form.submit();
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      }

    </script>


