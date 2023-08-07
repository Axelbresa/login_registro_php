<?php
// require 'funcs/conexion.php';
// require 'funcs/funcs.php';

// $errors=array();

// if (!empty(($_POST))
//     {
//         $correo=$mysqli->real_escape_string($_POST['$correo']);
//         if(!isCorreo($correo))
//         {
//             $errors[]="debe ingresar un correo electronico valido";
//         }
       
//     }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar password</title>
    


    <link rel="stylesheet" href="assets/css/r.css">
</head>
<body>
        <main>
           
        <div class="contenedor__todo">
            <div class="recupera">
                    <form action="" >
                        <h2>Recuperar contraseña</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <button type="button" class="btn" >Enviar</button>
                        <br><br>
                        <p>¿ya tienes una cuenta?</p>
                        
                        <a href="./index.php">Registrate aqui</a>
                    </form>
            </div>
        </div>


        </main>
        <script src="assets/js/s.js"></script> 

</body>
</html>