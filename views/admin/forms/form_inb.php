<div class="col-registera">
<fieldset>
	<legend><h2>Mensaje recibido..</h2></legend>
		<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
			<p>
				<label style="color:#fff;">Asunto: </label><input type="submit" name="btn-read" value="<?php if(isset($_SESSION['asunto'])){ echo $_SESSION['asunto'];} ?>" class="btn-read">
			</p>
			<p>
				<!-- Envio de datos ocultos -->
				<input type="hidden" name="dest_msg" value="<?php if(isset($_SESSION['dest'])){ echo $_SESSION['dest'];} ?>">
				<input type="hidden" name="asunto_msg" value="<?php if(isset($_SESSION['asunto'])){ echo $_SESSION['asunto'];} ?>">
				<input type="hidden" name="msg" value="<?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>">
			</p>
		</form>
</fieldset>
</div>