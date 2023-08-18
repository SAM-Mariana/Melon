<?php
$nombrese="localhost";

$usuariobd="root";

$pass="";

$nombrebd ="melon";


$conn = new mysqli($nombrese, $usuariobd, $pass, $nombrebd);
if ($conn -> connect_error){

    echo "Error en la conexion";

}else{

  #cgi no se podra abrir en la consola
   // if(php_sapi_name()!=='apache2handler'){
   // die("No pudes abrirlo desde la consila");
  //  }
    #"echo "conexion exitosa";

    $user = $_POST ['Usuario'];

    $nombre = $_POST ['Nombre'];

    $correo =$_POST ['Correo'];

    $contraseña =$_POST ['Contraseña'];

    $regex = "/[^a-zA-Z0-9@._]/";

    $nombre = preg_replace($regex, "", $nombre);

    $correo = preg_replace($regex, "", $correo);

    $contraseña = preg_replace($regex, "", $contraseña);

    $user = preg_replace($regex, "", $user);

  $sql = "INSERT INTO usuarios (Nombre, Usuario, Correo, Contraseña) VALUES ('$nombre', '$user', '$correo', '$contraseña')";

  if ($conn -> query ($sql)=== TRUE )  {

    header ("Location: inicio.html");

    echo "registro exitosamente";

    # code...

 }else{

    echo "error en tu registro";

    header ("location: registro.html");

 }

}
?>