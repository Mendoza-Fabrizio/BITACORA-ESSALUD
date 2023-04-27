<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resgistro Bitacora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="signup.css">
</head>

<body class=" d-flex justify-content-center align-items-center vh-100" style="background-color: #44bcd8;">
  <form action="guardar.php" method="POST">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <div class="d-flex justify-content-center">
        <img src="login/logo/logo1.png" alt="login-icon" style="height: 7rem" />
      </div>
      <div class="text-center fs-1 fw-bold">Sign Up</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <img src="login/logo/usuario1.png" alt="username-icon" style="height: 1rem" />
        </div>
        <input class="form-control bg-light" type="text" placeholder="Nombre completo" autocomplete="off" id="nombre"
          name="nombre" autocomplete="off"  required />
      </div>
      <div>
        <div class="input-group mt-4">
          <div class="input-group-text bg-info">
            <img src="login/logo/dni.png" alt="email-icon" style="height: 1rem" />
          </div>
          <input class="form-control bg-light" type="tel" placeholder="Documento de Identidad" autocomplete="off"
            id="dni" name="codigo" onchange="validarForm();" pattern="[0-9]" maxlength="8"  required/>

        </div>
        <p id="dni_error" class="error_message"></p>
      </div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <img src="login/logo/email.png" alt="email-icon" style="height: 1rem" />
        </div>
        <input class="form-control bg-light" type="text" placeholder="Correo Electronico" autocomplete="off"
          name="email" required/>
      </div>

      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <img src="login/logo/phone.png" alt="telefono-icon" style="height: 1rem" />
        </div>
        <input class="form-control bg-light" type="tel" placeholder="Telefono " autocomplete="off"  id ="celular" 
        onchange="validarNum();" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" maxlength="9" name="celular" required/>
      </div>
      <p id="celular_error" class="error_message"></p>
      <p></p>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info">
          <img src="login/logo/contrasena1.png" alt="password-icon" style="height: 1rem" />
        </div>
        <input class="form-control bg-light" type="password" placeholder="Contraseña" autocomplete="off" name="pass" required/>
      </div>

      <div name="submit">
        <input id="enviar" type="submit" name="enviar" value="Guardar"
          class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" disabled>
      </div>

    </div>
  </form>
</body>

</html>
<script>

  const validarForm = () => {
    let dni = document.getElementById("dni");
    let enviar = document.getElementById("enviar");
    if (dni.value.length != 8) {
      enviar.setAttribute('disabled', '');
      dni_error.innerHTML = "El dni debe tener 8 digitos";
    }
    else {
      enviar.removeAttribute('disabled', '');
      dni_error.innerHTML = "";
    }
  }

  const validarNum = () =>{
    let celular =document.getElementById("celular");
    let enviar =document.getElementById("enviar");
    if(celular.value.length !=9 || (/^\d{9}$/.test(celular))){
      enviar.setAttribute('disabled', '');
      celular_error.innerHTML = "El telefeno debe tener 9 digitos";
    }else {
      enviar.removeAttribute('disabled', '');
      celular_error.innerHTML = "";
    }
  }

  
</script>
<?php

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['email']) && isset($_POST['celular']) && isset($_POST['pass'])){

  require_once "conexionsignup.php";
}


?>