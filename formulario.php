
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <div class="page-header bg-secondary text-white text-center">
    <span class="h2">BITACORA ESSI</span>
  </div>
  <form action="index.php" method="POST" style=" width: 60%; margin: 0 auto;">
    <legend class="text-center-success">REGISTRO DE DATOS</legend>
    <div class="form-group">
      <label for="fecha">Fecha</label>
      <input type="date" name="fecha">
    </div>
    <p></p>
    <div class="form-group">
      <label for="hora">Hora</label>
      <input type="time" name ="Hora" id="startTime" />
    </div>
    <p></p>
    <div class="form-group">
      <label for="cas">CAS</label>
    </div>
    <p></p>
    <select name="cas" id="lang">
    <option value="seleccionarcas">Seleccionar CAS</option>
          <option value="escobedo">Hospital Nacional Carlos Alberto Seguin Escobedo</option>
          <option value="muñoz">Hospital II Manuel de Torres Muñoz - Mollendo</option>
          <option value="pastor">Hospital I Samuel Pastor - Camaná</option>
          <option value="yanahuara">Hospital III Yanahuara</option>
          <option value="escomel">Hospital I Edmundo Escomel</option>
          <option value="salas">CAP III Melitón Salas</option>
          <option value="aplao">Centro Médico Aplao</option>
          <option value="chicay">CAP I Chivay</option>
          <option value="hunter">CAP II Hunter</option>
          <option value="pedregal">CAP I El Pedregal</option>
          <option value="yura">CAP I Yura</option>
          <option value="paucarpata">CAP III Paucarpata</option>
          <option value="miraflores">CAP III Miraflores</option>
          <option value="cerrocolorado">Centro de Complejidad Creciente Cerro Colorado</option>
          <option value="acari">Posta Médica Acarí</option>
          <option value="atico">Posta Médica Atico</option>
          <option value="caraveli">Posta Médica Caravelí</option>
          <option value="chala">Posta Médica Chala</option>
          <option value="chucarapi">Posta Médica Chucarapi</option>
          <option value="chuquibamba">Posta Médica Chuquibamba</option>
          <option value="corire">Posta Médica Corire</option>
          <option value="cotahuasi">Posta Médica Cotahuasi</option>
          <option value="joya">Posta Medica La Joya</option>
          <option value="matarani">Posta Médica Matarani</option>
          <option value="santarita">Posta Médica Santa Rita</option>
          <option value="vitor">Posta Médica Vitor</option>
          <option value="metropolitano">Policlínico Metropolitano</option>
      </select>
  
    <div class="form-group">
      <label for="essi">ESSI/Explota: </label>
    </div>

    <label><input type="checkbox" id="essi" name="essi" value="Essi"> ESSI</label><br>

    <input type="checkbox" id="explota" name="explota" value="Explota"> <label for="cbox2">EXPLOTA</label>

   
    <p></p>
    <div class="form-group">
      <label for="modulo">Modulo</label>
    </div>
      
      <select name="modulos" id="lang">
        <option value="selecciona">Seleccionar modulo</option>
        <option value="Admisión y Citas">Admisión y Citas</option>
        <option value="Consulta Externa">Consulta Externa</option>
        <option value="Emergencia">Emergencia</option>
        <option value="Hospitalización">Hospitalización</option>
        <option value="Centro Quirúrgico">Centro Quirúrgico</option>
        <option value="Farmacia y Depósitos">Farmacia y Depósitos</option>
        <option value="Ayuda al Dx">Ayuda al Dx</option>
        <option value="Reportes">Reportes</option>
        <option value="Utilitarios">Utilitarios</option>
        <option value="Tablas del Sistema">Tablas del Sistema</option>
        <option value="Liquidaciones">Liquidaciones</option>
        <option value="Seguridad">Seguridad</option>
      </select>


    <div class="form-group">
      <label for="detalle"> <i class="bi bi-chat-right-dots-fill" required></i> Detalle del problema</label>
      <textarea name="detalle" id="detalle" class="form-control" placeholder="ej."></textarea>
      <div class="detalle text-danger"></div>

    </div>
    <p></p>
    <div class="form-group">
      <label for="responsable">Responsable que registra: </label>
      <input type="text" class="form-control" name="responsable">
    </div>
    <p></p>
    <div class="form-group">
      <label for="UsuarioR">Usuario que reporta:</label>
      <input type="text" class="form-control" name="UsuarioR">
    </div>
    <p></p>
    <div class="form-group">
      <label for="fechaSoporte">Fecha a soporte ESSI</label>
      <input type="date" name="fechasoporteessi">
    </div>
    <p></p>
    <div class="form-group">
      <label for="fechaSoporteMesa">Fecha Soporte Mesa de Ayuda</label>
      <input type="date" name="fechasoportemesa">

    </div>
    <p></p>
    <div class="form-group">
      <label for="nroCasoMesa">Numero de Caso Mesa de Ayuda</label>
      <input type="text" class="form-control" name="nroCasoMesa">

    </div>
    <div class="form-group">
      <label for="reporteTelef">Reporte Telefonico a:</label>
    </div>
    <div class="form-group">
      <label for="fechaTelef">Fecha:</label>
      <input type="date" name="fechaTelef">
      <label for="destinoTelef">Destino:</label>
      <input type="text" name="destinoTelef">
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteEmail">Reporte por Email a:</label>
    </div>

    <div class="form-group">
      <label for="fechaEmail">Fecha:</label>
      <input type="date" name="fechaEmail">
      <label for="destinoEmail">Destino:</label>
      <input type="text" name="destinoEmail">
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteWspp">Reporte por Whatsapp a: </label>
    </div>
    <div class="form-group">
      <label for="fechaWspp">Fecha:</label>
      <input type="date" name="fechaWspp">
      <label for="destinoWspp">Destino:</label>
      <input type="text" name="destinoWspp">
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteFormal">Reporte Forma a:</label>
      <div class="form-group">
        <label for="fechaFormal">Fecha:</label>
        <input type="date" name="fechaFormal">
        <label for="destinoEmail">Destino:</label>
        <input type="text" name="destinoFormal">
      </div>
    </div>
    <p></p>
    <div class="form-group">
      <input type="submit" class="btn btn-success form-control">
    </div>

    <script> src</script>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

</body>