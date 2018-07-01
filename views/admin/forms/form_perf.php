<div class="col-registera">
<fieldset>
					<legend><h2>Mis Datos</h2> </legend>
						<?php

							if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
							if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
							if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}

						?>
							
					
						<form name="" method="" action="">
							<p>
								<label>Nombre: </label>
								<input type="text" class="form-RIC" value="<?php echo $nombre; ?>" readonly>
							</p>
							<p>
								<label>Genero: </label>
								<input type="text" class="form-RIC" value="<?php echo $genero; ?>" readonly>
							</p>
							<p>
								<label>Correo: </label>
								<input type="email" class="form-RIC" value="<?php echo $email; ?>" readonly>
							</p>
						</form>
					</fieldset>
</div>