<html lang="en">
  <head>
    <title>Admin</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  </head>
<body>
<?php
  session_start();
  $user=$_SESSION['ci'];
  $rol=$_SESSION['rol'];

  if (isset($user) && $rol=='admin') {
    ?>
  
    <?php
    include 'includes/conex.php';
    $id=$_GET['num'];
    $sql="SELECT * FROM usuarios WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>

               <table  class="table table-striped table-dark" >
        <td align="center" bgcolor="#265291" > <h2> Datos oficiales de <?php echo $row['nombres'] ?> <?php echo $row['apellidos'] ?></h2></td>
               </table>
               &nbsp;&nbsp;<a href="admin.php" class="btn btn-primary">volver</a>

        <img src="img/i_<?php echo $row['id'].'.jpg';?>" alt="">

  <h4 align="center">Datos generales</h4>
        <table  class="table table-striped table-dark">
          <tr>
            <td>CI</td>
            <td><?php echo $row['ci'] ?></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td><?php echo $row['nombres'] ?></td>
          </tr>
          <tr>
            <td>Apellido</td>
            <td><?php echo $row['apellidos'] ?></td>
          </tr>
          <tr>
            <td>fecha de nacimiento</td>
            <td><?php echo $row['fecha_Nac'] ?></td>
          </tr>
          <tr>
            <td>trabajo anteriror</td>
            <td><?php echo $row['lugar_trabajo'] ?></td>
          </tr>
          <tr>
            <td>N°Celular:</td>
            <td><?php echo $row['celular'] ?></td>
          </tr>
          <tr>
            <td>Profesion</td>
            <td><?php echo $row['estudios_universitarios'] ?></td>
          </tr>
        </table>

       <?php
      }






         $id=$_GET['num'];
    $sql="SELECT * FROM certificados WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Certificados</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Nombre del Certificado</td>
            <td><?php echo $row['nombre_c'] ?></td>
          </tr>
          <tr>
            <td>Lugar</td>
            <td><?php echo $row['lugar'] ?></td>
          </tr>
          <tr>
            <td>Institucion</td>
            <td><?php echo $row['institucion'] ?></td>
          </tr>
          <tr>
            <td>fecha de emision</td>
            <td><?php echo $row['fecha_emision'] ?></td>
          </tr>
          <tr>
            <td>Horas Academicas</td>
            <td><?php echo $row['hrs_academicas'] ?></td>
          </tr>
           </table>
    
       <?php
      }




               $id=$_GET['num'];
    $sql="SELECT * FROM distinciones WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Distinciones</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Diplomados</td>
            <td><?php echo $row['diplomados'] ?></td>
          </tr>
          <tr>
            <td>Cursos</td>
            <td><?php echo $row['cursos'] ?></td>
          </tr>
          <tr>
            <td>Proyectos</td>
            <td><?php echo $row['proyectos'] ?></td>
          </tr>
        </table>
    
       <?php
      }






                 $id=$_GET['num'];
    $sql="SELECT * FROM experiencia_p WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Experiencia Profesional</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Nombre de la empresa</td>
            <td><?php echo $row['n_empresa'] ?></td>
          </tr>
          <tr>
            <td>Cargo</td>
            <td><?php echo $row['cargo_dese'] ?></td>
          </tr>
          <tr>
            <td>Gestion</td>
            <td><?php echo $row['gestion'] ?></td>
          </tr>

        </table>
    
       <?php
      }



       $id=$_GET['num'];
    $sql="SELECT * FROM ex_docente WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Experiencia como docente</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Nombre de la Intitucion</td>
            <td><?php echo $row['n_institucion'] ?></td>
          </tr>
          <tr>
            <td>Cargo</td>
            <td><?php echo $row['cargo_dese'] ?></td>
          </tr>
          <tr>
            <td>Gestion</td>
            <td><?php echo $row['gestion'] ?></td>
          </tr>

        </table>
    
       <?php
      }





      $id=$_GET['num'];
    $sql="SELECT * FROM formacion WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Formacion Academica</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Nombre del Colegio</td>
            <td><?php echo $row['colegio'] ?></td>
          </tr>
          <tr>
            <td>Nombre del titulo</td>
            <td><?php echo $row['nombre_titulo'] ?></td>
          </tr>
          <tr>
            <td>Fecha</td>
            <td><?php echo $row['fecha'] ?></td>
          </tr>
          <tr>
            <td>Intitucion</td>
            <td><?php echo $row['institucion'] ?></td>
          </tr>
          <tr>
            <td>Nivel</td>
            <td><?php echo $row['nivel'] ?></td>
          </tr>
           </table>
    
       <?php
      }





       $id=$_GET['num'];
    $sql="SELECT * FROM idiomas WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Idiomas</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Nomnre del titulo</td>
            <td><?php echo $row['nombre_titulo'] ?></td>
          </tr>
          <tr>
            <td>Institucion</td>
            <td><?php echo $row['institucion'] ?></td>
          </tr>
          <tr>
            <td>Fecha</td>
            <td><?php echo $row['fecha'] ?></td>
          </tr>

        </table>
    
       <?php
      }





               $id=$_GET['num'];
    $sql="SELECT * FROM investigaciones WHERE id=$id";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
      while ($row = mysqli_fetch_array($consulta)) {
        ?>
       
  <h4 align="center">Investigaciones</h4>
        <table  class="table table-striped table-dark" align="center">
          <tr>
            <td>Areas cientificas</td>
            <td><?php echo $row['areas_cientificas'] ?></td>
          </tr>
          <tr>
            <td>Participacion en Proyectos</td>
            <td><?php echo $row['participacion_proyectos'] ?></td>
          </tr>
          <tr>
            <td>Produccion cientifica</td>
            <td><?php echo $row['produccion_cientifica'] ?></td>
          </tr>
            <tr>
            <td>Produccion tecnologica</td>
            <td><?php echo $row['produccion_tecnologica'] ?></td>
          </tr>

        </table>
    
       <?php
      }





 }else {
      echo "Error vuelva a intentar";
    }
      ?>
    <a href="admin.php">Volver</a>

<?php
}
}
}
}
} //de todas las tablas 
}
}
}
else{
header("location: login.php");
}
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>