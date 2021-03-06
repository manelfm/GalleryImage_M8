<html>
	<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<title>Galería de Imágenes</title>
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
								<input name="uploadedfile" type="file" required class="tooltipped" data-position="left" data-delay="50" data-tooltip="Click! para selecionar una foto :) ">
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
		
		<div class="container">
			<div class="row">
				<div class="col s3">
					<button class="btn-large btn-anterior" id="boton_1">Anterior</button>
				</div>
				<div class="col s6">
					<img class="img-diaposi" id="imgDiapo" src="" name="diapositiva" width='100%' height='50%' />
				</div>
				<div class="col s3">
					<button class="btn-large btn-siguiente" id="boton_2">Siguiente</button>
				</div>
			</div>
			
		</div>
		
		<div class="galeria">
			<!--Este codigo php recorre todos los archivos que tenemos dentro de la carpeta upload y las muestra-->
				<?php
					listar_directorio("uploads/");
					$imagenes = array();
					function listar_directorio($ruta){ 
					   // abrir un directorio y listarlo recursivo 
					   if (is_dir($ruta)) { 
							if ($dh = opendir($ruta)) { 
								while (($file = readdir($dh)) !== false) { 
									if (!is_dir($ruta . $file) ){ 
										$imagenes[] = $ruta . $file;
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
				$('.tooltipped').tooltip({delay: 50});
			  });
		</script>
		<script type="text/javascript" src="gallery.js"></script>
	</body>
</html>

