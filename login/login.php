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
    <form action="login.php" method="POST">
      <div
        class="bg-white p-5 rounded-5 text-secondary shadow"
        style="width: 25rem"
      >
        <div class="d-flex justify-content-center">
          <img
            src="/logo.png"
            alt="login-icon"
            style="height: 7rem"
          />
        </div>
        <div class="text-center fs-1 fw-bold">Login</div>
        <div class="input-group mt-4">
          <div class="input-group-text bg-info">
            <img
              src="/usuario.png"
              alt="username-icon"
              style="height: 1rem"
            />
          </div>
          <input
            
            type="text"
           
            name="nombre" required
          />
        </div>
        <div class="input-group mt-1">
          <div class="input-group-text bg-info">
            <img
              src="/login/logo/contrasena.png"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
           
            type="password"
          
            name = "password" required
          />
        </div>
        <div class="d-flex justify-content-around mt-1">
          <div class="d-flex align-items-center gap-1">
            <input class="form-check-input" type="checkbox" />
            <div class="pt-1" style="font-size: 0.9rem">Remember me</div>
          </div>
          <div class="pt-1">
            <a
              href="#"
              class="text-decoration-none text-info fw-semibold fst-italic"
              style="font-size: 0.9rem"
              >Forgot your password?</a
            >
          </div>
        </div>

        
        <div> 
        <input  type = "submit" value = "Ingresar">
          
        </div>
        <div class="d-flex gap-1 justify-content-center mt-1">
          <div>Don't have an account?</div>
          <a href="signup.php" class="text-decoration-none text-info fw-semibold"
            >Register</a
          >
      </div>
    </form>
  </body>
</html>

<?php
if($_POST){
  session_start();
  require('conexion.php');
  $u = $_POST['nombre'];
  $p = $_POST['password'];
  $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  $query = $conexion ->prepare("SELECT * FROM usuario WHERE nombre= :u AND contrasena = :p");
  $usuario = $query->fetch(PDO::FETCH_ASSOC);
  if($usuario){
    $_SESSION['contrasena'] = $usuario["contrasena"];
    header("location:formulario.php");
  }else{
    echo "Usuario o password son invalidos";
  }

}

?>
