
<?php

$nombrese="localhost";

$usuariobd="root";

$pass="";

$nombrebd ="melon";


$conn = new mysqli($nombrese, $usuariobd, $pass, $nombrebd);
if ($conn -> connect_error){

    echo "Error en la conexion";

 }else{

    /*
    $correo =$_POST ['Correo'];

    $contraseña =encriptar($_POST ['Contraseña']);

    $regex = "/[^a-zA-Z0-9@._]/";

    $correo = preg_replace($regex, "", $correo);

    $contraseña = preg_replace($regex, "", $contraseña);

     $sql="SELECT * FROM Usuarios WHERE Correo='$correo' AND Contraseña='$contraseña'";

$resultado = $conn -> query($sql);

if($resultado -> num_rows > 0){

    header('Location:index.html');
}else{

    header('Location:registro.html');
   
}
*/
if(isset($_POST['Correo']) && isset($_POST['Contraseña'])){
    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];
  
    // Verificar las credenciales del usuario (puedes reemplazar esta lógica con la que desees)
    if($correo === 'Correo' && $contraseña === 'Contraseña'){
      // Inicio de sesión exitoso
      header('Location:index.html');
    } else {
      // Credenciales inválidas
      header('Location:registro.html');
  }

 }

 $conn -> close();
 }

?>