<?php
  session_start();
  $user=$_SESSION['ci'];
  $rol=$_SESSION['rol'];
  if (isset($user) && $rol=='admin') {
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>




    <?php
    include 'includes/conex.php';
    $id=$_GET['num'];
    $sql="SELECT ci, nombres, apellidos, fecha_Nac, lugar_trabajo, celular, estudios_universitarios, correo, rol  FROM usuarios WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    while ($row = mysqli_fetch_array($consulta)) {
      ?>

            <table  class="table table-striped table-dark" >
        <td align="center" bgcolor="#265291" > <h2> Editar datos de <?php echo $row['nombres'] ?> <?php echo $row['apellidos'] ?></h2></td>
               </table>
               &nbsp;&nbsp;<a href="admin.php" class="btn btn-primary">volver</a>

        <h4 align="center">Datos generales</h4>
        <table  class="table table-striped table-dark">

   <div class="form-group" align="center">
    <form class="" action="editarp.php" method="post">
      CI<input type="text" name="ci" value="<?php echo $row['ci']; ?>"  required class="form-control" style="width : 150px; heigth : 10px"></br>
      Nombre:<input type="text" name="nombre" value="<?php echo $row['nombres']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Apellidos:<input type="text" name="apellido" value="<?php echo $row['apellidos']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Fecha de nacimiento:<input type="text" name="fecha" value="<?php echo $row['fecha_Nac']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Lugar de trabajo:<input type="text" name="lugar" value="<?php echo $row['lugar_trabajo']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Celular:<input type="text" name="celular" value="<?php echo $row['celular']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Carrera:<input type="text" name="carrera" value="<?php echo $row['estudios_universitarios']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Correo:<input type="text" name="correo" value="<?php echo $row['correo']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      Rol:<input type="text" name="rol" value="<?php echo $row['rol']; ?>" required class="form-control" style="width : 150px; heigth : 10px"></br>
      <button type="submit" name="" value="Guardar" class="btn btn-primary" > Guardar</button> 
    </form>
   </div>

  </body>
</html>
<?php
}
?>
<?php
}
else{
header("location: login.php");
}
?>
