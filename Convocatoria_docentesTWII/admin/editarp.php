<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>
    <?php
    include 'includes/conex.php';
    $ci=$_POST['ci'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];
    $lugar=$_POST['lugar'];
    $celular=$_POST['celular'];
    $carrera=$_POST['carrera'];
    $correo=$_POST['correo'];
    $rol=$_POST['rol'];
    session_start();
    //$usuario_modificador=$_SESSION['id'];
    //$modificado=date('Y-m-d H:i:s');
    $sql="UPDATE usuarios SET ci='$ci', nombres='$nombre', apellidos='$apellido', fecha_Nac='$fecha', lugar_trabajo='$lugar',celular='$celular', estudios_universitarios='$carrera', correo='$correo', rol='$rol' WHERE ci=$ci";

    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {

      echo "<div class='alert alert-success mt-4' role='alert'><h3>Los datos fueron editados correctamente.</h3>
     
    <a class='btn btn-outline-primary' href='admin.php' role='button'>Volver</a></div>";

    }else {
      echo "Error vuelva a intentar.";
    }
     ?>
     </body>
</html>
