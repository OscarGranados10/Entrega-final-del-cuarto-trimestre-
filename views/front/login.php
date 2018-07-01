<?php include ('templates/head.php'); ?>
<div class="box-login">
	<figure>
		<img src="http://localhost/webmail/public/images/Iconos/Partials/ingresar.png" class="img-login">
	</figure>
</div>
<div class="col-registera-ingreso">	
				<fieldset>
					<legend><h2>Formulario de Ingreso</h2></legend>
						<form name="login" method="post" action="http://localhost/webmail/app/Http/Controllers/Auth/AuthController.php">
							<p>
								<input type="email" name="correo_log" placeholder="Correo electronico.." class="form-RIC" required>
							</p>
							<p>
								<input type="password" name="pass_log" placeholder="Contraseña.." class="form-RIC" required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>" class="form-RIC">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>" class="form-RIC">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>" class="form-RIC">
								<input type="hidden" name="password" value="<?php echo $password; ?>" class="form-RIC">

								<input type="submit" name="btn-login" value="Ingresar" value="Registrar usuario" class="botonoes">
								<input type="reset" value="Cancelar" class="botonoesreset">
							</p>
						</form>
					</fieldset>
</div>

<?php include ('templates/foot.php'); ?>

fdfdfdf@dsdsds
Hola1234MN@