<!doctype html>

<html lang="en">
  <head>
    <title>Crea una cuenta o inicia sesión</title>
    
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

  
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>UPDS</h1>
				<p>Profesionales + Humanos</p>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crea una cuenta</h3><hr />
		
		<form method="post" action="create-account.php" method="POST">
			<div class="form-group">				
				<input type="text" class="form-control" name="ci" placeholder="Introduzca su CI" required>			
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="nombre" placeholder="Introduzca su Nombre" required>			
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="apellido" placeholder="Introduzca su Apellido" required>			
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="fecha_Nac" placeholder="Introduzca su fecha Nacimineto" required>			
		  </div>
		    <div class="form-group">				
				<input type="text" class="form-control" name="lugar" placeholder="Lugar donde trabajo anteriormente" required>			
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="celular" placeholder="Introduzca su N° de celular" required>			
		  </div>
		  		  <div class="form-group">				
				<input type="text" class="form-control" name="estudios" placeholder="Introduzca su profesion" required>			
		  </div>
		  <div class="form-group">				
				<input type="text" class="form-control" name="correo" placeholder="Introduzca su Correo Electronico" required>			
		  </div>    
		  <div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Crear contraseña" required>
			</div>
		  
		  <button type="submit" class="btn btn-primary btn-lg btn-block">Crea mi cuenta</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Iniciar sesión</h3><hr />
			<p>Ya tienes una cuenta? <a href="login.php" title="Login Here">Entre aquí!</a></p>
		</div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    	
 
	</body>
</html>