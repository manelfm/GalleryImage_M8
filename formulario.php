<html>
	<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<title>Bisbal</title>
	</head>
	<!--
	enctype="multipart/form-data": es necesario para subir archivos, crea la forma que permite explorar en su búsqueda en el equipo local.
	-->
	<body>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="center-align z-depth-5">Galeria</h1>
				</div>
				
				<form enctype="multipart/form-data" action="uploader.php" method="POST">
					<div class="col s2 offset-s5">
							<div class="file-field input-field">
								<i class="material-icons prefix">perm_media</i>
								<input name="uploadedfile" type="file" required>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" value="                       Click!" >
								</div>
							</div>
					</div>
						 <button class="btn-floating btn-large waves-effect waves-light" type="submit" name="action">
							<i class="material-icons right">send</i>
						  </button>
				</form> 
				
			</div>
		</div>
		<div class="galeria">
			<!--Este codigo php recorre todos los archivos que tenemos dentro de la carpeta upload y las muestra-->
				<?php
					listar_directorio("uploads/");
					function listar_directorio($ruta){ 
					   // abrir un directorio y listarlo recursivo 
					   if (is_dir($ruta)) { 
						  if ($dh = opendir($ruta)) { 
							 while (($file = readdir($dh)) !== false) { 
								if (!is_dir($ruta . $file) ){ 
									echo "<img class='materialboxed' src= 'uploads/$file' width='100' height='100'>";
								} 
							 } 
							closedir($dh); 
						  } 
						}else   echo "<br>No es ruta valida"; 
					}
				?>
		</div>
			
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.js"></script>
		<script>
			$(document).ready(function(){
				$('.materialboxed').materialbox();
			  });
		</script>
	</body>
</html>

