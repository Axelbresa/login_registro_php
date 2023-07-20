<?php
include 'conexion_be.php';

$nombre_completo=$_POST["nombre_completo"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

//encriptamiento de contraseña
$clave=hash('sha512', $clave);


$query ="INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
    values('$nombre_completo', '$correo', '$usuario', '$clave')";

//verificar que el correo no se repita en la base de datos
$verificar_correo=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo)>0){
    echo '
    <script>
    alert("Este correo ya existe, intente otro diferente");
    window.location="../index.php"
    </script>
    ';
    exit();  
}

//verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario=mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("Este usuario ya existe, intente otro diferente");
    window.location="../index.php"
    </script>
    ';
    exit();
}


$ejecutar=mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("usuario almacenado exitosamente");
    window.location="../index.php"
    </script>';
}else{
    echo '
    <script>
    alert("usuario no almacenado intentalo de nuevo");
    window.location="../index.php"
    </script>';
}
myqli_close($conexion);
?>
