<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./Estilos2.css">
  <title>Modificar Tarea</title>
</head>
<body>
  <h1 class="text-center py-4 my-4">Modificar Tarea</h1>
  <?php
                include 'bd.php';
                $ID_tarea=$_GET['ID_tarea'];
                $sql="SELECT * FROM t_tarea WHERE ID_tarea=".$ID_tarea;

                $result = mysqli_query($conexion, $sql);

                if($result){   
                    $row=mysqli_fetch_assoc($result);
                    $tarea=$row['tarea'];

                }
            ?>
  <div class="w-50 m-auto">
    <form action="editar.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Tarea</label>
        <input class="form-control" type="text" name="tarea" id="tarea" value="<?php global $tarea; echo $tarea ?>" placeholder="Editar tarea"
          Required>
          <input type="hidden" name="ID_tarea" id="ID_tarea" value="<?php echo $ID_tarea ?>">
      </div><br>
      <button class="btn btn-success">Guardar Edicion</button>
    </form>
  </div>

</body>

</html>