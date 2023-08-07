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
    <title>cambiar password</title>
    


    <link rel="stylesheet" href="assets/css/r.css">
</head>
<body>
        <main>
           
        <div class="contenedor__todo">
            <div class="recupera">
                    <form action="" >
                        <h2>Cambiar contraseña </h2>
                        <h4>Nueva contraseña</h4>
                        <input type="password" placeholder="Contraseña" name="clave">
                        <h4>Confirmar contraseña</h4>
                        <input type="password" placeholder="confirmar contraseña" name="clave">

                        <button> Modificar </button>
            
                    </form>
            </div>
        </div>


        </main>
        <!-- <script src="assets/js/script.js"></script> -->

</body>
</html>