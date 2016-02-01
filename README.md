# GalleryImage_M8

##Proyecto Galería de Imágenes

El proyecto que hemos creado es a una galería de imágenes. 
En esta aplicación se podrá subir todas las imágenes que el usuario desee ( los formatos permitidos para las imágenes son: png, jpg, jpeg y gif ).
El usuario visualizará las imágenes en un carrousel, además de visualizar individualmente cada imagen en diapositivas clicando en los botones (anterior y siguiente). 

##Carpetas y archivos

.--- Carpeta /materialize: contiene los archivos necesarios para utilizar un framework.
.--- Carpeta /uploads: será el almacén de imágenes.
.--- index.php: iniciará la aplicación mostrando la galería de imágenes.
.--- gallery.js: incluye las funciones necesarias para la galería de imágenes.
.--- mystyle.css: archivo que define el estilo y la apariencia de la aplicación.
.--- uploader.php: conecta con el almacén comprobando los formatos de las fotos y los errores y realiza la subida de imágenes.

##Nota Importante

El usuario no podrá eliminar imágenes desde la aplicación, solo podrá eliminarlas dirigiéndose a la carpeta /uploads y eliminándolas manualmente.

##Nota Instalación

Una vez descargue el proyecto deberá de dar permisos al usuario para poder realizar las tareas de la aplicación para que se permitan subir archivos.

Para ello ejecutamos el comando "chown 'usuario':www-data /var/www/html/GalleryImage_M8/uploads".
==> 'usuario' es el usuario del sistema con que està arrancado el servidor.

De esta forma damos los permisos solo a 'usuario' sobre la carpeta ../uploads.