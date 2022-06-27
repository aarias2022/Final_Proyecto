<?php
       $ID_tarea=$_POST['ID_tarea'];
       $tarea=$_POST['tarea'];
       
    include 'bd.php';
    $sql="UPDATE t_tarea SET tarea='$tarea' WHERE ID_tarea=$ID_tarea";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ./tareas.php");

    }

?>