<?php
include_once "header.php";
?>

<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if(logged_in()) {
			echo "Bienvenido  " . get_name($_SESSION['email']);
		}else{
			echo "Bienvenido";
		}
		?>
	</div>
	<h1 class="text-center"> Segundo Parcial </h1>
</div>

<?php
include_once "footer.php";
?>