<?php
include_once('database/database.php');
$fecha = $_POST;
foreach ($_POST as $p) {
  array_push($fecha, $p);
}
$data = [
  'fecha' => $fecha[0],
  'CAS' => $fecha[1],
  'essi_explota' => $fecha[2],
  'Modulo' => $fecha[3],
  'detalle' => $fecha[4],
  'responsable' => $fecha[5],
  'usuario_reporte' => $fecha[6],
  'fecha_essi_soporte' => $fecha[7],
  'fecha_mesa_soporte' => $fecha[8],
  'num_caso_mesa_ayuda' => $fecha[9],
  'fecha_reporte_telefono' => $fecha[10],
  'destino_reporte_telefono' => $fecha[11],
  'fecha_reporte_email' => $fecha[12],
  'destino_reporte_email' => $fecha[13],
  'fecha_reporte_whatsapp' => $fecha[14],
  'destino_reporte_whatsapp' => $fecha[15],
  'fecha_reporte_formal' => $fecha[16],
  'destino_reporte_formal' => $fecha[17]
];
$header = ["ID", "Fecha", "Hora", "CAS", "ESSL/Explota", "Módulo", "Detalle del problema", "Responsable que registra", "Usuario que reporta", "Fecha a soporte_essl", "Fecha soporte mesadeayuda", "N° Caso mesdeayuda", ["Reporte telefonico a..." => "Fecha", "Destino"], ["Reporte por Email a:..." => "Fecha", "Destino"], ["Reporte por Whatsapp a..." => "Fecha", "Destino"], ["Reporte formal a..." => "Fecha", "Destino"]];
$pdo = Database::connect();
try {
  $sql = 'INSERT INTO bitacora(Fecha, CAS,essi_explota,modulo,detalle,responsable,usuario_reporte,fecha_essi_soporte,fecha_mesa_soporte,num_caso_mesa_ayuda,fecha_reporte_telefono,
  destino_reporte_telefono,fecha_reporte_email,destino_reporte_email,fecha_reporte_whatsapp,destino_reporte_whatsapp,fecha_reporte_formal,destino_reporte_formal) VALUES(:fecha,:cas,:essi_explota,:modulo,:detalle,:responsable,:usuario_reporte,:fecha_essi_soporte,:fecha_mesa_soporte,:num_caso_mesa_ayuda,:fecha_reporte_telefono,
  :destino_reporte_telefono,:fecha_reporte_email,:destino_reporte_email,:fecha_reporte_whatsapp,:destino_reporte_whatsapp,:fecha_reporte_formal,:destino_reporte_formal)';
  $pdo->prepare($sql)->execute($data);

} catch (PDOException $e) {
  echo $e->getMessage();
}

$con = $pdo->query('SELECT * FROM bitacora')->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <h1>TABLA DE DATOS - BITACORA</h1>
  <table class="table">
    <tr>
      <?php
      foreach ($header as $valor) {
        $colgroup = '<col>';

        if (is_array($valor)) {
          $colgroup .= '<colgroup span="2"></colgroup>';
        }
        echo $colgroup;
      }

      ?>
    </tr>
    <tr>

      <?php
      foreach ($header as $valor) {
        $tabla = '';
        if (is_array($valor)) {
          $tabla .= '<th class="header" colspan="2" scope="colgroup">' . key($valor) . '</th>';


        } else {
          $tabla = '<th class="header" rowspan="2">' . $valor . '</th>';

        }
        echo $tabla;
      }
      ?>

    </tr>
    <tr>
      <?php
      foreach ($header as $valor) {
        $tabla = '';
        if (is_array($valor)) {
          foreach ($valor as $key => $value) {
            $tabla .= '<th class="header" scope="col">' . $value . '</th>';
          }
        }
        echo $tabla;
      }
      ?>
    </tr>
    <?php foreach ($con as $c) {

      echo '<tr>';
      for ($i = 0; $i < count($c) / 2; $i++) {
        echo '<td>
                <p>' . $c[$i] . '</p>
                </td>';
      }

      echo ' </tr>';
    }
    ?>
  </table>
  <button type="button"><a href="formulario.php">Volver</a></button>
</body>

</html>