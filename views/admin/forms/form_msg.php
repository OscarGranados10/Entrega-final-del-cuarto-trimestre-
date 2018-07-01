<div class="col-registeraAdmin">
<fieldset>
					<legend><h2>Redactar nuevo mensaje</h2></legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" name="dest_msg" placeholder="Para: " class="form-RIC" required>
							</p>
							<p>
								<input type="text" name="asunto_msg" placeholder="Asunto: " class="form-RIC" required>
							</p>
							<p>
								<textarea name="msg" rows="5" cols="100" class="textarea" required></textarea>
							</p>
							<p>
								<input type="submit" name="btn-msg" value="Enviar mensaje" class="botonoes">
								<input type="reset" value="Limpiar datos" class="botonoesreset">
							</p>
						</form>
					</fieldset>
</div>