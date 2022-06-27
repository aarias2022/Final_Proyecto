<?php


  require 'bd.php';


    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $ccontraseña = $_POST['ccontraseña'];

    if($contraseña == $ccontraseña)
    {

    $query = "INSERT INTO t_usuarios(usuario, contraseña)
            VALUES('$usuario', '$contraseña')";
    //verificar que el correo no se duplique en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM t_usuarios WHERE usuario = '$usuario' ");
    
    if(mysqli_num_rows($verificar_correo) >0){
        ?>
        <?php
        include("registrarse.php");
        ?>
        <h1 class="bad">El usuario ya Existe</h1>
        <?php
    }else{
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("Usuario almacenado exitosamente");
        </script>
        ';
        header("location: index.php");
    }


}else{
    ?>
        <?php
        include("registrarse.php");
        ?>
        <h1 class="bad">La contraseña no conincida</h1>
        <?php
}
