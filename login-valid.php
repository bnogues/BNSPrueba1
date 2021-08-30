<?php
session_start();

include('db.php'); 
// comprobar las credenciales del usuario
// si las credenciales son corectas

if($_SESSION['login'] === false)
{
    if(isset($_POST['email']) && isset($_POST['password'])) 
    {
        $mail    = $_POST['email'];
        $password = $_POST['password'];       
        // echo "$mail";
        // echo "$password";
        // Buscar el  mail en tabla  "usuario"
        $usuario    = '  ';
        $contrasena = '  ';
    
        // $q = "SELECT id,usuario,contrasena,nombre,direccion,telefono,mail FROM usuario where mail = $mail";
        //$q = "SELECT * FROM usuario where mail=$mail";
        $q = "SELECT * FROM usuario";

        $response = $connection->query($q);
    
        if ($response->num_rows > 0) 
        {
            while($row = $response->fetch_assoc())
            {
                if ($row["mail"] == $mail)
                {                     
                        $usuario    = $row["usuario"];
                        $contrasena = $row["contrasena"];
                        
                    //  Si existe el usuario, entonces validar el mail
                    if ($password == $contrasena)
                    {
                        // -- $_SESSION['username'] = $email;
                        $_SESSION['username'] = $usuario;
                        $_SESSION['login'] = true;
                    }
                    else 
                    {
                        // -- Mensaje de Error: Contrasena digitada incorrecta
                        echo "Error: Contrasena incorrecta";
                        printf('Error: Contrasena incorrecta2.<br />');

                        // <script>
                        //     alert('Error: Contrasena incorrecta2.');
                        // </script>

                        $_SESSION['username'] = 'Invitado';
                        $_SESSION['login']    = false;
                    }
                }
            }
        }
        else 
        { 
                // -- Mensaje de Error: No existe usuario
                $_SESSION['username'] = 'Invitado';
                $_SESSION['login']    = false;
        }

    }
}
else
{
    $_SESSION['username'] = 'Invitado';
    $_SESSION['login']    = false;
 
}

// echo "$password";
// echo "$usuario";
// echo "$contrasena";
// die();

header('Location:index.php');
?>