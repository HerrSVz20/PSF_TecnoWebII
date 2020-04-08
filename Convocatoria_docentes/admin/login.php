<!doctype html>
<html lang="en">

  <head>
    <title>Iniciar Sesion</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  </head>

<body>

  <footer id="f1">
        <div class="col-xs-12 col-md-6 text-left">
       <h3 class="t"></h3>
    </div>

<a class="btn btn-outline-primary" href="/docente/index1.php" role="button">Inicio</a>

<div align="center"> 

 
  <h5 align="center">CONVOCATORIA DE DOCENTES ☺</h5>


<hr style="border-color:white;">
</div>
 
</footer>

<style type="text/css">
  #f1 {
  background-color:#024389;
  height: 50%;
  color: white;
  padding: 5px; 
}

a img:hover {
    color: #fff;
}
</style>

<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">   
          <div class="card">
            <div class="loginBox">
                             <img src="images/logo.jpg" class="img-fluid" alt="Responsive image">
              <h2>Iniciar sesion</h2>

              <form action="includes/login.php" method="POST">                             
                <div class="form-group">                  
                  <input type="text" class="form-control input-lg" name="ci" placeholder="CI" required>        
                </div>              
                <div class="form-group">        
                  <input type="password" class="form-control input-lg" name="password" placeholder="Contraseña" required>       
                </div>                    
                  <button type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">Iniciar Sesion</button>
              </form>
              <!-- Collapse a form when user click Lost your password? link-->
              <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Perdiste tu contraseña?</a></p>  
              <div class="collapse" id="showForm">
                <div class='well'>
                  <form action="password-recovery.php" method="post">
                    <div class="form-group">                    
                      <input type="email" class="form-control" name="correo" placeholder="Ingrese el correo electrónico" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Recuperar contraseña</button>
                  </form>               
                </div>
              </div>
                          
              <hr><p>Nuevo inicio de sesión?<a href="registrou.php" title="Create an account">Crea una cuenta</a>.</p>                
            </div><!-- /.loginBox --> 
          </div><!-- /.card -->
        </div><!-- /.col -->
      </div><!--/.row-->
    </div><!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>



