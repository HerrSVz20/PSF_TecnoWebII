<?php
  session_start();
  $user=$_SESSION['id'];
  $rol=$_SESSION['rol'];

  if (isset($user) && $rol=='admin') {
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
  </head>
  <body>
    <?php
    include 'includes/conex.php';
    $id=$_GET['num'];
    $sql="DELETE FROM usuarios WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      echo "Sus datos fueron eliminados correctamente";
    }else {
      echo "Error vuelva a intentar";
    }
      ?>
    <a href="admin.php">Volver</a>
  </body>
</html>

<?php
}
else{
header("location: login.php");
}
?>
