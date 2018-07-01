<?php

//seccion de login
if(isset($_POST['btn-register'])){

	$genre = $_POST['genre'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];


    //Validar el genero
    if ($genre == 'genero') {
    	//error 3 = 'Debe seleccionar un genero!'
    	header('Location: http://Localhost/webmail/index.php?error=3');

    }

    if($conf_pass == $password){
        
        include ('../../../views/login.php');


    }
    else{
    	//error 1 = 'Las contraseñas no coinciden!'
    	header('Location: http://Localhost/webmail/index.php?error=1');
    }

 }

 //area de usuarios registrados
 if(isset($_POST['btn-login'])){

 	$genre = $_POST['genre'];
 	$nombre = $_POST['nombre'];
 	$correo = $_POST['correo'];
 	$password = $_POST['password'];
 	$correo_log = $_POST['correo_log'];
 	$pass_log = $_POST['pass_log'];

 	if($correo_log == $correo && $pass_log == $password){

 		if(!isset($_GET['inicio'])){

 			//Creamos sesión
 			session_start();

 			//Almacenamos el nombre de usuario en una variable de sesion usuario
 			$_SESSION['usuario'] = $_POST["nombre"];
 			$_SESSION['genere'] = $_POST["genre"];
 			$_SESSION['email'] = $_POST["correo"];

 			include ('../../../views/admin/index.php');
 		}
 	}
 	else{
 		//error 2 = 'Los datos de acceso no coinden!'
 		header('Location: http://Localhost/webmail/index.php?error=2');
 	}
 }

 //Mensaje enviado
 if(isset($_POST['btn-msg'])){

 	$dest_msg = $_POST['dest_msg'];
 	$asunto_msg = $_POST['asunto_msg'];
 	$msg = $_POST['msg'];

 	if(isset($dest_msg)){

 		//Creamos sesión
 		session_start();

 		include ('../../../views/admin/inbox.php');
 	}
 }

 //Leer mensaje
 if(isset($_POST['btn-read'])){

 	$dest_msg = $_POST['dest_msg'];
 	$asunto_msg = $_POST['asunto_msg'];
 	$msg = $_POST['msg'];

 	if(isset($dest_msg)){

 		//Creamos sesión 
 		session_start();

 		include ('../../../views/admin/read.php');
 	}
 }

 ?>
