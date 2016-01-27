window.onload = function(){
	//Creamos un array que contenga las imágenes del carrousel y otra que servirá para obtener el src de cada imagen
	var gallery = document.getElementsByClassName('materialboxed');
	var ruta = [];
	//Realizamos un bucle para rellenar la variables con las rutas src
	for(var i = 0; i < gallery.length; i++){
		ruta[i] = gallery[i].src;
	}
	//Creamos variables auxiliares para las funciones que implementaremos
	var aux_2 = 0; 
	V_max = gallery.length; 
	V_max = V_max-1; // Diminuye uno su valor dado que V_max coge un valor a más.
	//Función que permite pasar a la siguiente imagen.
	function siguiente () {
		if (aux_2 == V_max){
			aux_2 = 0;
		}
		else{
			aux_2 = aux_2+1;
		}
		document.getElementById('imgDiapo').src = ruta[aux_2];
	}
	//Función que permite pasar a la anterior imagen.
	function anterior () {	
		if (aux_2 == 0){
			aux_2 = V_max;
		}
		else{
			aux_2 = aux_2-1;
		}
		document.getElementById('imgDiapo').src = ruta[aux_2];
	}
	//Declaración de los elementos que van a utlizar las funciones
	document.getElementById("boton_1").onclick = anterior;
	document.getElementById("boton_2").onclick = siguiente;
}
