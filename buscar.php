
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estilos2.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Document</title>
</head>
<body>
<h1 class="text-center py-4 my-4">Buscar Tarea</h1>

<div class="w-50 m-auto">
    <form action="" method="get" autocomplete="off">
      <div class="form-group">
        <label for="title">Tarea</label>
        <input class="form-control" type="text" name="busqueda"  placeholder="Buscar tarea"
          >
          <br>
          <input type="submit" name="enviar" value ="Buscar">
      </div>
      </form>
  </div>
  <?php
    include 'bd.php';
        if(isset($_GET['enviar'])){
            $busqueda = $_GET['busqueda'];
            $consulta = $conexion->query("SELECT * FROM t_tarea WHERE tarea LIKE %$busqueda%");            

            if($consulta){
                while($row = mysqli_fetch_assoc($consulta)){
                $tarea = $row['tarea'];                
                
                
        }
    }
}   
        
    ?>
    
</body>
</html>      