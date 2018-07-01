<?php 
if(isset($_SESSION['genero'])){

						$genre = $_SESSION['genero'];

					 	if ($genre == 'hombre') {
						echo "<img src='http://localhost/webmail/public/images/Iconos/Partials/hombre.png' alt='hombre' width='20%' style='border-radius:150px;'>";
						}elseif($genre == 'mujer'){
							echo "<img src='http://localhost/webmail/public/images/Iconos/Partials/mujer.png' alt='hombre' width='20%' style='border-radius:150px;'>";
						}

					}
?>