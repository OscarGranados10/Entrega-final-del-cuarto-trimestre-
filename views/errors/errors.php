<?php

$error = $_GET['error'];

	if($error == 1){

		echo " <center>
		<div style='width=100%;background-color:#212;height:300px;'>
		<br>
		  <img src='http://localhost/webmail/public/images/Iconos/Partials/datos.png' width='300px' style='border-radius:150px;border:15px solid #eee;'>
		</div>
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 1
				</span>
				: Las contraseñas no coinciden, prueba a registrarte nuevamente!
				</h3>
				<br>
			</center>
			 ";
	}
	elseif($error == 2){

		echo "<center>
		<div style='width=100%;background-color:#212;height:300px;'>
		<br>
		  <img src='http://localhost/webmail/public/images/Iconos/Partials/contraseñas.png' width='200px' style='border-radius:150px;border:15px solid #eee;'>
		</div>
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 2
				</span>
				: Los datos de acceso no son correctos, intenta nuevamente!
				</h3>
				<br>
			</center>
			 ";
	}
	elseif($error == 3){

		echo "  <center>
		<div style='width=100%;background-color:#212;height:300px;'>
		<br>
		  <img src='http://localhost/webmail/public/images/Iconos/Partials/generona.png' width='300px' style='border-radius:150px;border:15px solid #eee;'>
		</div>
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 3
				</span>
				: Debe seleccionar un genero!
				</h3>
				<br>
		</center>
			 ";
	}

?>