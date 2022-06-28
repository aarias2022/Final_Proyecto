<?php 
session_start();

$conexion = mysqli_connect("localhost","root","","bd_todo");
include('bd.php');

if (isset($_SESSION['ID']) && isset($_SESSION['valid'])) {
    
	$op = $_POST['contraseñaActual'];
	$np = $_POST['contraseña'];
	$c_np = $_POST['ccontraseña'];

        $ID = $_SESSION['ID'];

        $sql = "SELECT *
                FROM t_usuarios WHERE 
                ID='$ID' AND contraseña='$op'";
        $result = mysqli_query($conexion, $sql);
		
	
        if(mysqli_num_rows($result) == 1){
        	
        	$sql_2 = "UPDATE t_usuarios
        	          SET contraseña='$np'
        	          WHERE ID='$ID'";
        	mysqli_query($conexion, $sql_2);
			?>
        <h1 class="bad">Se cambio correctamente la contraseña</h1>
        <?php
        	header("Location: tareas.php");
    }
}
else{
	?>
        <h1 class="bad">El usuario Incoreccto</h1>
        <?php
     header("Location: cambiarcontraseña.php");
     exit();
}