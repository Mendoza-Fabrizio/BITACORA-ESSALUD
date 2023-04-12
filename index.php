<?php
$fecha = $_POST;
$header = ["Fecha", "Hora", "CAS", "ESSL/Explota", "Módulo", "Detalle del problema", "Responsable que registra", "Usuario que reporta", "Fecha a soporte_essl", "Fecha soporte mesadeayuda", "N° Caso mesdeayuda", ["Reporte telefonico a..." => "Fecha", "Destino"], ["Reporte por Email a:..." => "Fecha", "Destino"], ["Reporte por Whatsapp a..." => "Fecha", "Destino"], ["Reporte formal a..." => "Fecha", "Destino"]];

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
    <tr>

      <?php
      foreach ($fecha as $valor) {
        echo '<td>
          <p>' . $valor . '</p>
          </td>';
      }

      ?>

    </tr>
  </table>
  <button type="button"><a href="formulario.php">Volver</a></button>
</body>

</html>