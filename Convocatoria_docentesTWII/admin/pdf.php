<div align="center">
<?php
 session_start();
  //$user=$_SESSION['ci'];
 // $rol=$_SESSION['rol'];

  //if (isset($user) && $rol=='admin') {
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Subir pdf</title>
  </head>
  <body>
    <?php
    include 'includes/conex.php';
    //$ci=$_GET['num'];
      ?>

    <h2>Subir archivo pdf</h2>
    <form class="" action="includes/upload.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="ci" value="<?php //echo $ci; ?>">
      <input type="file" name="file" value="">
      <input type="submit" name="" value="Guardar">
    </form>
    <a href="admin.php">Volver</a>
  </body>
</html>
<?php
//}
//else{
//header("location: admin.php");
//}
?>
</div>