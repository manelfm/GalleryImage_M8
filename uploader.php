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
					
				<?php 
					/*Indica la ruta de la carpeta contenedor, en este caso se llamara uploads*/
					$target_path = "uploads/";
					$target_file = $target_path . basename($_FILES["uploadedfile"]["name"]);
					$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					echo "<p style= 'color: red;text-align: center; font-size:30px'>Lo sentimos, debe de introducir archivos JPG, JPEG, PNG y GIF<p>.";
					echo '<a  href="formulario.php"><button id="volver"class="btn" type="button">Volver</button></a>';
					return;
					} 
					
					$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
					/*move_upload_file mueve un archivo, lo pasas con las variables , lo comprueba y lo sube sino da error. */
					if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
						echo '<h1 class="center-align z-depth-5">Galeria</h1> </div>';
						echo " <p class='center-align'> El archivo <strong>". basename( $_FILES['uploadedfile']['name']). "</strong> ha sido subido </p>";
						echo '<a  href="formulario.php"><button id="volver"class="btn" type="button">Volver</button></a>';
						$file_name=$_FILES['uploadedfile']['name'];
						echo "<div class='foto'><img src='uploads/$file_name' width='70%' height='70%'></div>";
					} else {
						echo '<h1 class="center-align z-depth-5">Galeria</h1> </div>';
						echo "<strong> <p class='center-align' style='color: red'> Ha ocurrido un error, trate de nuevo!</p></strong> ";
						echo '<a  href="formulario.php"><button id="volver"class="btn" type="button">Volver</button></a>';
					} 
					
				?>
			</div>
		</div>
	</body>
</html>