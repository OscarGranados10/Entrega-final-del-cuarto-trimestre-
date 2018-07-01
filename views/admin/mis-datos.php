<?php 

include ('templates/head.php');

?>
<div class="container spacing-top">
 
<div class="col-registera">
			<center>
				
					<?php 
					session_start();

 			//Almacenamos el nombre de usuario en una variable de sesion usuario
 			$_SESSION['usuario'] = $_POST["nombre"];
 			$_SESSION['genere'] = $_POST["genre"];
 			$_SESSION['email'] = $_POST["correo"];

					echo "<span style='color:#fff;'>Nombre:</span> $usuario; . </br> <span style='color:#fff;'>Genero:</span> $genre; . </br> . <span style='color:#fff;'>Correo:</span> $correo; ";


					 ?>
				
			</center>
</div>
</div>

<?php include ('templates/foot.php'); ?>