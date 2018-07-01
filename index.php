<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/webmail/public/images/Imagenes de fondo/ilustra1.gif" style="height:300px; background-attachment: fixed;"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/webmail/public/images/Imagenes de fondo/ilustra2.gif" style="height:300px; background-attachment: fixed;"  height="300px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/webmail/public/images/Imagenes de fondo/ilustra.gif" style="height:300px; background-attachment: fixed;"  height="300px"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="BoxA">
	
	<div class="col-registera">
		
			<fieldset>
					<legend><h2>Formulario de Registro</h2></legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/registroController.php">
							<p>
								<select name="genre" class="select" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." class="form-RIC" required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.."  class="form-RIC" required>
							</p>
							<p>
								<input type="password" name="password" placeholder="Contraseña.." class="form-RIC" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: (Digitos, minúsculas, mayúsculas y simbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required>
							</p>
							<p>
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." class="form-RIC" id="confirm_password"  pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z)])\S{8,16}$" onchange="this.setCustomValidity(this.validity.pattternMismatch ? 'Por favor, ingrese la misma contraseña de arriba' : '');" required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario" class="botonoes">
								<input type="reset" value="Limpiar datos" class="botonoesreset">
							</p>
							<p><a href="http://localhost/webmail/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
						</form>
		</fieldset>
	</div>
	<div class="col-logo">

			<center>
				<h1 class="title-h1">M@IL WEBTester</h1>
				<figure>
					<img src="http://localhost/webmail/public/images/Iconos/logo formulario.png" class="img-email">
				</figure>
			</center>

	</div>
</div>
<div class="BoxB">
	<h2>Lorem amet</h2>
	<div>
		<h3>A</h3>
		<hr></hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div>
		<hr></hr>
		<h3>B</h3>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
	</div>
    <div>
    	<h3>C</h3>
		<hr></hr>
		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
    </div>
</div>

			


<?php include ('views/front/templates/foot.php'); ?>