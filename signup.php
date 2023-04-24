<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <form action="guardar.php" method="POST">
      <div
          class="bg-white p-5 rounded-5 text-secondary shadow"
          style="width: 25rem"
        >
          <div class="d-flex justify-content-center">
            <img
             src="login/logo/logo1.png"
         
              alt="login-icon"
              style="height: 7rem"
            />
          </div>
          <div class="text-center fs-1 fw-bold">Sign Up</div>
          <div class="input-group mt-4">
            <div class="input-group-text bg-info">
              <img
                src="login/logo/usuario1.png"
                alt="username-icon"
                style="height: 1rem"
              />
            </div>
            <input
              class="form-control bg-light"
              type="text"
              placeholder="Full name"
              autocomplete="off"
              name="nombre"
            />
          </div>

          <div class="input-group mt-4">
            <div class="input-group-text bg-info">
              <img
                src="login/logo/email.png"
                alt="email-icon"
                style="height: 1rem"
              />
            </div>
            <input
              class="form-control bg-light"
              type="text"
              placeholder="E-mail"
              autocomplete="off"
              name="email"
            />
          </div>

          <div class="input-group mt-4">
            <div class="input-group-text bg-info">
              <img
                src="login/logo/phone.png"
                alt="telefono-icon"
                style="height: 1rem"
              />
            </div>
            <input
              class="form-control bg-light"
              type="text"
              placeholder="Phone"
              autocomplete="off"
              name="celular"
            />
          </div>
    <p>
    </p>
          <div class="input-group mt-1">
            <div class="input-group-text bg-info">
              <img
                src="login/logo/contrasena1.png"
                alt="password-icon"
                style="height: 1rem"
              />
            </div>
            <input
              class="form-control bg-light"
              type="password"
              placeholder="Password"
              autocomplete="off"
              name="pass"
            />
          </div>
          
          <div name="submit" >
          <input type="submit" name="enviar" value="Guardar">
          </div>
        
        </div>
    </form>
  </body>
</html>
<?php

if(isset($_POST['nombre']) && isset($_POST['email'])&& isset($_POST['celular']) && isset($_POST['pass']))

  require_once "conexionsignup.php";
?>