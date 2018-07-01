<?php 
if(isset($_SESSION['email'])){
	
	//Encabezado de la pagina
	include ('templates/head.php');

	//validar errores
	if(isset($_GET['error'])){

		include ('errors/errors.php');
	}

	?>

	<div class="container spacing-top">
		<div>

				<center>
					
					<figure>
						<?php include('partials/genre.php') ?>
					</figure>

				</center>

		
				
				<?php
					if(isset($_SESSION['usuario'])){
						echo '<h2 class="title-h1">Bienvenid@: <i>', $_SESSION['usuario'] . '</i></h2>';
					}
					?>	
			</div>
			<div class="col-registera">

				<?php include('forms/form_rd.php'); ?>
			</div>
	
	</div>

	<?php include ('templates/foot.php'); 

}else{
		header('Location: http://localhost/webmail/index.php');
	} 
?>