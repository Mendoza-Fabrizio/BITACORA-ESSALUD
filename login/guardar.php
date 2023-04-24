<?php

require_once "conexionsignup.php";

$nombre = $_POST['nombre'];
$gmail = $_POST['email'];
$celular = $_POST['celular'];
$pass = $_POST['pass'];


$consulta = $pdo->prepare("INSERT INTO usuario(nombre,email,telefono,contrasena)VALUES(:nombre,:email,:celular,:pass)");

$consulta->bindParam(':nombre',$nombre);
$consulta->bindParam(':email',$gmail);
$consulta->bindParam(':celular',$celular);
$consulta->bindParam(':pass',$pass);

if($consulta -> execute()){
    header("location:login.php");

}else{
    echo "No se ha podido guardar datos ...";
}
?>  
