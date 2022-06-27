<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>

<?php
include('bd.php');


    
		$tarea=$_POST['tarea'];
    $usuarios_id = $_SESSION['ID'];


        $sql =  "INSERT INTO t_tarea (tarea, usuarios_id) VALUES('$tarea', '$usuarios_id')";

      $result=mysqli_query($conexion,$sql);
    if($result){
        header("location: ./tareas.php");
    }
        else{
        echo "Error";
    }
      
    


   // 





//$session_id = session_id();
//$_SESSION['ID'] = $loginId;
 //session_start();
//$loginId = $_SESSION['id'];


//if(isset($_POST['tarea'])) {	



//}

?>