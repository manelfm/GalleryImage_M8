<html>
	<head>
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
		<title>Bisbal</title>
	</head>
	<!--
	enctype="multipart/form-data": es necesario para subir archivos, crea la forma que permite explorar en su búsqueda en el equipo local.
	-->
	<body>
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
			<input name="uploadedfile" type="file" />
			<input type="submit" value="Subir archivo" />
		</form> 
		<div>
			<!--Este codigo php recorre todos los archivos que tenemos dentro de la carpeta upload y las muestra-->
			<?php
				listar_directorio("uploads/");
				function listar_directorio($ruta){ 
				   // abrir un directorio y listarlo recursivo 
				   if (is_dir($ruta)) { 
					  if ($dh = opendir($ruta)) { 
						 while (($file = readdir($dh)) !== false) { 
							//esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
							//mostraría tanto archivos como directorios 
							if (!is_dir($ruta . $file) ){ 
								//echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
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

