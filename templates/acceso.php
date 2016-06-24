<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso</title>
	<meta http-equiv="refresh" content="1740">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/estilos-login.css">
<script src="assets/js/script-login.js"></script>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="procesos/login.php" role="login">
          <img src="assets/img/logo192.png" class="img-responsive" alt="" />
          <input type="email" name="user" placeholder="Email" required class="form-control input-lg" value="luis.claudio@overprimegroup.com" />
          
          <input type="password" name="pass" class="form-control input-lg" id="password" placeholder="Contrasena" required="" />
          
          <!--  
          <div class="pwstrength_viewport_progress"></div>
          -->
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Ingresar</button>
          <div>
            <a href="#">Crear Cuenta</a> o <a href="#">Restablecer Contraseña</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">www.cloudperu.tech</a>
        </div>
      </section>  
      </div>
      
    
      

  </div>
      
  
  
</div>

</body>
</html>