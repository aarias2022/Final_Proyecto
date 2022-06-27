<?php session_start(); ?>
<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$conexion = mysqli_connect("localhost","root","","bd_todo");
include('bd.php');

$consulta = "SELECT * FROM t_usuarios where usuario ='$usuario' and contraseña = '$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_fetch_assoc($resultado);
        
        if(is_array($filas) && !empty($filas)) {
    $validuser = $filas['usuario'];
    $_SESSION['valid'] = $validuser;
    $_SESSION['ID'] = $filas['ID'];
    
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad"> ERROR EN LA AUTENTIFICACION</h1>
    <?php
}

if(isset($_SESSION['valid'])) {
           header("location: tareas.php");      
    }

mysqli_free_result($resultado);
mysqli_close($conexion);