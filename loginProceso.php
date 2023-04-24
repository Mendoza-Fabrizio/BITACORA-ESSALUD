<?php 
	session_start();
	include_once 'conexionlogin.php';
	$usuario = $_POST['nombre'];
	$contrasena = $_POST['password'];
	$sentencia = $bd->prepare('select * from usuario where 
								nombre = ? and contrasena = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombre;
		header('Location: formulario.php');
	}
?>