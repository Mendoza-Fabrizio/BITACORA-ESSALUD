<?php

session_start();
if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
} elseif (isset($_SESSION['nombre'])) {
  if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['cas']) && isset($_POST['checkbox']) && isset($_POST['modulos']) && isset($_POST['detalle']) && isset($_POST['responsable']) && isset($_POST['UsuarioR']) && isset($_POST['fechasoporteessi']) && isset($_POST['fechasoportemesa']) && isset($_POST['nroCasoMesa']) && isset($_POST['fechaTelef']) && isset($_POST['destinoTelef']) && isset($_POST['fechaEmail']) && isset($_POST['destinoEmail']) && isset($_POST['fechaWspp']) && isset($_POST['destinoWspp']) && isset($_POST['fechaFormal']) && isset($_POST['destinoFormal']))
    require_once "database.php";
} else {
  echo "Error en el sistema";
}




?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

  <title>Bitacora</title>
</head>

<body >
  <nav class="navbar navbar-dark " style="background-color: #44bcd8;">
    <div class="container-fluid">
      <a class="navbar-brand">EsSalud</a>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">

      </div>
      <a class="btn btn-light" href="cerrar.php"> Cerrar Sesion</a>
    </div>
  </nav>
  <div class="page-header bg-secondary text-white text-center">
    <span class="h2">BITACORA ESSI</span>
  </div>
  <form action="insertar.php" method="POST" style=" width: 60%; margin: 0 auto;">
    <legend class="text-center-success">REGISTRO DE OCURRENCIA</legend>
    <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" name="fecha" id="fecha"required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="hora">Hora:</label>
      <input type="time" name="hora" id="startTime" required/>
    </div>
    <p></p>
    <div class="form-group" >
      <label for="cas">Dependencia:</label>
    </div>
    <p></p>
    <select name="cas" id="lang" required>
      <option value="seleccionarcas">Seleccionar CAS</option>
      <option value="Hospital Nacional Carlos Alberto Seguin Escobedo">Hospital Nacional Carlos Alberto Seguin Escobedo
      </option>
      <option value="Hospital II Manuel de Torres Muñoz - Mollendo">Hospital II Manuel de Torres Muñoz - Mollendo
      </option>
      <option value="Hospital I Samuel Pastor - Camaná">Hospital I Samuel Pastor - Camaná</option>
      <option value="Hospital III Yanahuara">Hospital III Yanahuara</option>
      <option value="Hospital I Edmundo Escomel">Hospital I Edmundo Escomel</option>
      <option value="CAP III Melitón Salas">CAP III Melitón Salas</option>
      <option value="Centro Médico Aplao">Centro Médico Aplao</option>
      <option value="CAP I Chivay">CAP I Chivay</option>
      <option value="CAP II Hunter">CAP II Hunter</option>
      <option value="CAP I El Pedregal">CAP I El Pedregal</option>
      <option value="CAP I Yura">CAP I Yura</option>
      <option value="CAP III Paucarpata">CAP III Paucarpata</option>
      <option value="CAP III Miraflores">CAP III Miraflores</option>
      <option value="Centro de Complejidad Creciente Cerro Colorado">Centro de Complejidad Creciente Cerro Colorado
      </option>
      <option value="Posta Médica Acarí">Posta Médica Acarí</option>
      <option value="Posta Médica Atico">Posta Médica Atico</option>
      <option value="Posta Médica Caravelí">Posta Médica Caravelí</option>
      <option value="Posta Médica Chala">Posta Médica Chala</option>
      <option value="Posta Médica Chucarapi">Posta Médica Chucarapi</option>
      <option value="Posta Médica Chuquibamba">Posta Médica Chuquibamba</option>
      <option value="Posta Médica Corire">Posta Médica Corire</option>
      <option value="Posta Médica Cotahuasi">Posta Médica Cotahuasi</option>
      <option value="Posta Medica La Joya">Posta Medica La Joya</option>
      <option value="Posta Médica Mataran">Posta Médica Matarani</option>
      <option value="Posta Médica Santa Rita">Posta Médica Santa Rita</option>
      <option value="Posta Médica Vitor">Posta Médica Vitor</option>
      <option value="Policlínico Metropolitano">Policlínico Metropolitano</option>
    </select>

    <div class="form-group" required>
      <label for="essi">ESSI/Explota: </label>
    </div>

    <label><input type="checkbox" id="essi" name="checkbox[]" value="Essi"> ESSI</label><br>

    <input type="checkbox" id="explota" name="checkbox[]" value="Explota"> <label for="cbox2">EXPLOTA</label>


    <p></p>
    <div class="form-group">
      <label for="modulo">Modulo:</label>
    </div>

    <select name="modulos" id="lang" required>
      <option value=" ">Seleccionar modulo</option>
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
      <label for="detalle"> <i class="bi bi-chat-right-dots-fill" required></i> Detalle del problema:</label>
      <textarea name="detalle" id="detalle" class="form-control" placeholder="ej." required></textarea>
      <div class="detalle text-danger"></div>

    </div>
    <p></p>
    <div class="form-group">
      <label for="responsable">Responsable que registra: </label>
      <input type="text" class="form-control" name="responsable" value=<?php echo $_SESSION['nombre'] ?> disabled>
    </div>
    <p></p>
    <div class="form-group">
      <label for="UsuarioR">Usuario que reporta:</label>
      <input type="text" class="form-control" name="UsuarioR" required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="fechaSoporte">Fecha a soporte ESSI:</label>
      <input type="date" name="fechasoporteessi" required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="fechaSoporteMesa">Fecha Soporte Mesa de Ayuda:</label>
      <input type="date" name="fechasoportemesa" required>

    </div>
    <p></p>
    <div class="form-group">
      <label for="nroCasoMesa">Numero de Caso Mesa de Ayuda:</label>
      <input type="text" class="form-control" name="nroCasoMesa" required>

    </div>
    <div class="form-group">
      <label for="reporteTelef">Reporte Telefonico a:</label>
    </div>
    <div class="form-group">
      <label for="fechaTelef">Fecha:</label>
      <input type="date" name="fechaTelef" required>
      <label for="destinoTelef">Destino:</label>
      <input type="text" name="destinoTelef"  autocomplete="off" required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteEmail">Reporte por Email a:</label>
    </div>

    <div class="form-group">
      <label for="fechaEmail">Fecha:</label>
      <input type="date" name="fechaEmail" required>
      <label for="destinoEmail">Destino:</label>
      <input type="text" name="destinoEmail"  autocomplete="off" required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteWspp">Reporte por Whatsapp a: </label>
    </div>
    <div class="form-group">
      <label for="fechaWspp">Fecha:</label>
      <input type="date" name="fechaWspp" required>
      <label for="destinoWspp">Destino:</label>
      <input type="text" name="destinoWspp"  autocomplete="off" required>
    </div>
    <p></p>
    <div class="form-group">
      <label for="reporteFormal">Reporte Formal a:</label>
      <div class="form-group">
        <label for="fechaFormal">Fecha:</label>
        <input type="date" name="fechaFormal" required>
        <label for="destinoEmail">Destino:</label>
        <input type="text" name="destinoFormal"  autocomplete="off" required>
      </div>
    </div>
    <p></p>
    <div class="form-group">
      <input type="submit" id="enviarform" class="btn btn-primary form-control" style="background-color: #808080;">
    </div>
    <input type="hidden" name="oculto" value="1">
    <script> src</script>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

</body>
