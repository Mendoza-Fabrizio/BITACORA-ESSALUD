<?php

require_once "database.php";

	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$cas = $_POST['cas'];
	$essi = $_POST['checkbox'];
	$modulos = $_POST['modulos'];
    $detalle = $_POST['detalle'];
    $responsable = $_POST['responsable'];
    $UsuarioR = $_POST['UsuarioR'];
    $fechasoporteessi = $_POST['fechasoporteessi'];
    $fechasoportemesa = $_POST['fechasoportemesa'];
    $nroCasoMesa = $_POST['nroCasoMesa'];
    $fechaTelef = $_POST['fechaTelef'];
    $destinoTelef = $_POST['destinoTelef'];
    $fechaEmail = $_POST['fechaEmail'];
    $destinoEmail = $_POST['destinoEmail'];
    $fechaWspp = $_POST['fechaWspp'];
    $destinoWspp = $_POST['destinoWspp'];
    $fechaFormal = $_POST['fechaFormal'];
    $destinoFormal = $_POST['destinoFormal'];

	$consulta = $pdo->prepare("INSERT INTO bitacora(Fecha,Hora, CAS,essi_explota,modulo,detalle,responsable,usuario_reporte,fecha_essi_soporte,fecha_mesa_soporte,num_caso_mesa_ayuda,fecha_reporte_telefono,
    destino_reporte_telefono,fecha_reporte_email,destino_reporte_email,fecha_reporte_whatsapp,destino_reporte_whatsapp,fecha_reporte_formal,destino_reporte_formal) 
	VALUES (:fecha,:hora,:cas,:checkbox,:modulos,:detalle,:responsable,:UsuarioR,:fechasoporteessi,:fechasoportemesa,:nroCasoMesa,:fechaTelef,:destinoTelef,
	:fechaEmail,:destinoEmail,:fechaWspp, :destinoWspp,:fechaFormal,:destinoFormal)");

	$consulta ->bindParam(':fecha',$fecha);
	$consulta ->bindParam(':hora',$hora);
	$consulta ->bindParam(':cas',$cas);
	$consulta ->bindParam(':checkbox',$checkbox);
	$consulta ->bindParam(':modulos',$modulos);
	$consulta ->bindParam(':detalle',$detalle);
	$consulta ->bindParam(':responsable',$responsable);
	$consulta ->bindParam(':UsuarioR',$UsuarioR);
	$consulta ->bindParam(':fechasoporteessi',$fechasoporteessi);
	$consulta ->bindParam(':fechasoportemesa',$fechasoportemesa);
	$consulta ->bindParam(':nroCasoMesa',$nroCasoMesa);
	$consulta ->bindParam(':fechaTelef',$fechaTelef);
	$consulta ->bindParam(':destinoTelef',$destinoTelef);
	$consulta ->bindParam(':fechaEmail',$fechaEmail);
	$consulta ->bindParam(':destinoEmail',$destinoEmail);
	$consulta ->bindParam(':fechaWspp',$fechaWspp);
	$consulta ->bindParam(':destinoWspp',$destinoWspp);
	$consulta ->bindParam(':fechaFormal',$fechaFormal);
	$consulta ->bindParam(':destinoFormal',$destinoFormal);

	if($consulta -> execute()){
		echo "Se guardo correctamente";
	}else{
		echo "No se guardo";
	}


?>