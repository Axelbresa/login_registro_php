<?php

session_start();

include 'conexion_be.php';

$correo=$_POST["correo"];
$clave=$_POST["clave"];

//encriptamiento de contraseña
$clave=hash('sha512', $clave);

//verificar que el correo y la contraseña que se ha registrado en la base de datos sea igual en el login
$validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE
correo='$correo' and clave='$clave'" );

if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$correo;
    echo '
    <script>
    alert("cuenta correcta");
    window.location="../bienvenida.php"
    </script>
    ';
    
    exit();
}else{
    echo '
    <script>
    alert("usuario no exite");
    window.location="../index.php";
    </script>
    ';
    exit();
}

?>