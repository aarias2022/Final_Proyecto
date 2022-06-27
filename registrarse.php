

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  </head>
  <body>

  <div class="container">
        <div class="container__imagen">
            
            
        </div>
        <div class="container__login">
            <div class="container__subcontainer">

                <h1 class="animate__animated animate__backInLeft">REGISTRARSE</h1>
   
    
    
    <form action="validarR.php" method="POST">
	<p> Usuario <input type="text" placeholder="Nombre de usuario" name = "usuario" ></p>
	<p> Contraseña <input type="password" placeholder="Ingrese Contraseña" name = "contraseña" ></p>
	<p> Confirme Contraseña <input type="password" placeholder="Confirme Contraseña" name = "ccontraseña" ></p>
      <input type="submit" value="Registrarse">
</BR>
      <span> <a href="index.php">Iniciar Sesion</a></span>
    </form>
  </body>
</html>