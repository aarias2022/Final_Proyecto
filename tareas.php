<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estilos2.css">
  </head>
  <body>
    <h2 th:text="'Listado de tareas de ' + ${usuario.nombre}"></h2>
    <h1 class="text-center py-4 my-4">Lista de Tareas</h1>

    <div class="w-50 m-auto">
    <form action="insertar.php" method="post">
        <div class="form-group">
            <label for="title">Ingrese una tarea nueva</label>
            <input class="form-control"  type="text" name="tarea" id="tarea" placeholder="Ingrese tarea" Required>

        </div><br>
        <button class="btn btn-success">Agregar Tarea</button>
    </form>

    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Tu lista de tareas</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="ID_Tarea">Nro Tarea</th>
      <th scope="col">Lista de tareas</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
            include 'bd.php';
           
            $sql = "SELECT * FROM t_tarea WHERE usuarios_id=".$_SESSION['ID'];
            $result = mysqli_query($conexion,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $ID_tarea = $row['ID_tarea'];
                    $tarea = $row['tarea'];
                
                 ?>
                <tr>
                <td><?php echo $ID_tarea ?></td>
                <td><?php echo $tarea ?></td>
                <td>
                <a href = "eliminar.php?ID_tarea=<?php echo $ID_tarea ?>" class="btn btn-danger btn-sm">Eliminar</a>
                <a href = "editartarea.php?ID_tarea=<?php echo $ID_tarea ?>" class=" btn btn-warning btn-sm">Editar</a>
                </tr>
                </tr>
                <?php
              }
        }
    
    ?>
   
  </tbody>
</table>
        </div>
    </div>
  </body>
</html>
