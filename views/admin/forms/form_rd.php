<div class="col-registeraAdmin">
<fieldset>
					<legend>Inbox: 
						<?php
							if(isset($_SESSION['email'])){
								echo $_SESSION['email'];
							}
						?>
							
					</legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" class="form-RIC value="<?php echo $asunto_msg; ?> " readonly>
							</p>
							<p>
								<input type="text"  class="form-RIC value="<?php echo $dest_msg; ?>" readonly>
							</p>
							<p>
								<textarea rows="5" cols="100" class="textarea" readonly><?php echo $msg; ?></textarea>
							</p>
						</form>
					</fieldset>
</div>