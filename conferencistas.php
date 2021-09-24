<?php
include_once "header.php";
?>
<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php echo "Bienvenido "   .get_name($_SESSION['email']); ?>
	</div>
	<h1 class="text-center"> Conferencistas </h1>
</div>


<?php  

    $connect = mysqli_connect("localhost", "root", "", "segparcial");  

if(isset($_POST["submit"])){
error_reporting(0);

      
$correo = $_POST["correo"]; 
$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"]; 
$profesion = $_POST["profesion"]; 
$biografia = $_POST["biografia"]; 
//date_default_timezone_set('America/Guatemala');
//$dat = date("Y-m-d H:i:s");

$insertar = ("INSERT INTO segparcial.conferencistas (correo, nombre, apellido, profesion, biografia) values ('$correo','$nombre','$apellido','$profesion','$biografia')");
$re = mysqli_query($connect, $insertar);

if($re){
echo"
Se registraron los datos correctamente
  ";
        }
 
 else

{
  echo"
Fallo el registro
  ";
}
           
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   





   <form class="form-signin" method="POST" enctype="multipart/form-data">
    <span><h2><b><center>Registro de Conferencistas</center></b></h2></span>
      <div class="form-label-group">
        <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo" required autofocus>
      </div>

      <div class="form-label-group">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
      </div>

      <div class="form-label-group">
        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required autofocus>
      </div>
      
      <div class="form-label-group">
        <input type="text" id="profesion" name="profesion" class="form-control" placeholder="Profesión" required autofocus>
      </div>
      
      <div class="form-label-group">
        <input type="text" id="biografia" name="biografia" class="form-control" placeholder="Biografía" required autofocus>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Registrar</button>
     
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>


