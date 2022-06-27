<?php
    include 'bd.php';
    $ID_tarea=$_GET['ID_tarea'];

    $sql="DELETE FROM t_tarea WHERE ID_tarea=$ID_tarea";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ./tareas.php");
    }

?>