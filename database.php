<?php
	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'essalud_essi';
$pdo = new PDO('mysql:host=localhost;dbname=essalud_essi', 'root', '');

<<<<<<< HEAD
try {
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombrebd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Error de conexión ".$e->getMessage();
}
=======
$pdo = new PDO('mysql:host=localhost;dbname=essalud', 'root', '');

>>>>>>> 07afd5cbc4b2752cb64c916cf739085c964bbaf4
?>