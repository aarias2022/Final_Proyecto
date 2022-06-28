<?php 
session_start();

$conexion = mysqli_connect("localhost","root","","bd_todo");
include('bd.php');

if (isset($_SESSION['ID']) && isset($_SESSION['usuario'])) {

    
if (isset($_POST['contraseñaActual']) && isset($_POST['contraseña'])
    && isset($_POST['ccontraseña'])) {

	//function validate($data){
      //$data = trim($data);
	   //$data = stripslashes($data);
	   //$data = htmlspecialchars($data);
      //  return $data;
	//}

	//$op = validate($_POST['contraseñaActual']);
	//$np = validate($_POST['contraseña']);
	//$c_np = validate($_POST['ccontraseña']);

	$op = $_POST['contraseñaActual'];
	$np = $_POST['contraseña'];
	$c_np = $_POST['ccontraseña'];

    
    if(empty($op)){
      header("Location: cambiarcontraseña.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: cambiarcontraseña.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: cambiarcontraseña.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $ID = $_SESSION['ID'];

        $sql = "SELECT contraseña
                FROM t_usuarios WHERE 
                ID='$ID' AND contraseña='$op'";
        $result = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($result) == 1){
        	
        	$sql_2 = "UPDATE t_usuarios
        	          SET contraseña='$np'
        	          WHERE ID='$ID'";
        	mysqli_query($conexion, $sql_2);
        	header("Location: cambiarcontraseña.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: cambiarcontraseña.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: tareas.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}