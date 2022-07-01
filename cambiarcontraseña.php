<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form action="actualizarcontra.php" method="post">
     	<h2>Cambiar Contraseña</h2>


     	<label>Contraseña Actual</label>
     	<input type="password" 
     	       name="contraseñaActual" 
     	       placeholder="Contraseña actual">
     	       <br>

     	<label>Nueva Contraseña</label>
     	<input type="password" 
     	       name="contraseña" 
     	       placeholder="Nueva Contraseña">
     	       <br>

     	<label>Confirmar Contraseña</label>
     	<input type="password" 
     	       name="ccontraseña" 
     	       placeholder="confirmar contraseña">
     	       <br>

     	<button type="submit">Actualizar Contraseña</button>
          <a href="tareas.php" class="ca">Tareas</a>
     </form>
</body>
</html>

