<?php 
	/*Indica la ruta de la carpeta contenedor, en este caso se llamara uploads*/
	$target_path = "uploads/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
	/*move_upload_file mueve un archivo, lo pasas con las variables , lo comprueba y lo sube sino da error. */
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido ";
		echo '<a href="formulario.php"><button type="button">Volver</button></a> <br>';
		$file_name=$_FILES['uploadedfile']['name'];
		echo "<img src='uploads/$file_name' width='70%' height='70%'>";
	} else{
		echo "Ha ocurrido un error, trate de nuevo!";
	} 
	/*estas dos lineas muestrar la imagen al final */
	
?>