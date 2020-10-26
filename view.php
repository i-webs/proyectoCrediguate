<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styleFormulario.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="" id="">

			<div>
				<img class="imageLogin" src="images/logoCrediguate.png">
			</div>
			<br>
			<input type="text" name="nombre" placeholder="Usuario:" id="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
			<input type="email" name="correo" placeholder="correo" id="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
			<!--<textarea name="texto" placeholder="texto" id="texto" value=""><?php if(!$enviado && isset($texto)) echo $texto ?></textarea>-->

			<input type="password" name="password" placeholder="contraseña" id="password" value="">



			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif ($enviado): ?>
				<div class="alert succes">
					<p>Enviado correctamente</p>
				</div>
			<?php endif ?>	
			
	
			<input type="submit" name="eviarDatos" value="Ingresar" class="btn btnPrimary">

		</form>
	</div>	

</body>
</html>