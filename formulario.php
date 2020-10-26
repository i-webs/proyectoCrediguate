<?php
$errores = '';
$enviado = '';


//comprobación que utilizo el boton
if (isset($_POST['eviarDatos'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	/*$texto = $_POST['texto'];*/
	$password = $_POST['password'];

	//comprobación nombre
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	if (!($nombre =="admin")) {
			$errores .='Por favor ingresa el usuario correcto<br/>';
		}	


	}else{
		$errores .='Por favor ingresa un nombre <br/>';
	}

	//comprobación correo
	if (!empty($correo)) {
		$correo = trim($correo);
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .='Por favor ingrese un correo valido <br/>';
		}
		if (!($correo=="admin@gmail.com")) {
			$errores .='Por favor ingresa el correo correcto<br/>';
		}	
	}else{
		$errores .='Por favor ingrese un correo <br/>';
	}


	
	//comprobando contraseña
	if (!empty($password)) {	
		if(strlen($password) < 5){
      	$errores.= "La clave debe tener al menos 6 caracteres";
		}
		if(strlen($password) > 15){
      	$errores.= "La clave no puede tener mas de 15 caracteres";
		}
		if (!($password=="admin")) {
			$errores .='Por favor ingresa la contraseña correcta<br/>';
		}	
	}
   		
	else{
		$errores .='por favor ingresa una contraseña';
	}


	if (!$errores) {
		$enviar_a = 'correo@correo.com';
		$asunto = 'correo enviado desde mi página';
		$mensaje_preparado = "de:  $nombre \n";
		$mensaje_preparado .= "correo  $correo \n";
		$mensaje_preparado .= "mensaje:  $password \n";
		Header( "Location: http://localhost/crediguate3/dashboard.html" );
		/*mail($enviar_a, $asunto, $mensaje_preparado);*/
		$enviado = true;
	}
}


include 'view.php';
?>

<!--<stript>
function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('usuario').value;
  if(usuario.length == 0) {
    alert('No has escrito nada en el usuario');
    return;
  }

</stript>-->	