function logearse () {
	
	var hacer = $("#btnLogin").val();

	$.ajax({
		//beforSend: function(){
			//$("#cargandoLogin").innerHTML("Cargando");
		//}, //se ejecuta antes de enviar la peticion

		url: "nexo.php",
		type: "POST",
		data: {queHacer:hacer},

		success: function(data) // es la funcion que se va a ejecutar cuando se pudo conectar con el
							//php y pudo devolver algo. El parametro resp es lo que devuelve
				  {
				  	//alert("hecho");
				  	$("#formulario").hide(1);
				  	$("#contenedorLogin").html(data);
				  },

		error: function(jqXHR, estado, error){ // es la funcion que se ejecuta cuando falla la
											  //conexion con el archivo php
		//estado es una cadena de texto de timeout, raise error, abort o parse error
		//error devuelve una cadena de not found u otro error de http
		console.log(estado);
		console.log(error);
		},

		complete: function(jqXHR, estado){
			//esta funcion se ejecuta despues de que se haya ejecutado success o error
		},

		//timeout: 10000
	})

}


function registrarse()
{
	var hacer = $("#btnReg").val();

	$.ajax({

		url: "nexo.php",
		type: "POST",
		data: {queHacer:hacer},

		success: function(data) 
							
				  {
				  	$("#formulario").hide(1);
				  	$("#contenedorLogin").html(data);
				  },

		//timeout: 10000


	})
}



function GuardarUsuario()
{
	//alert("apretado");

	var inputFileImage = document.getElementById("foto");
	var file = inputFileImage.files[0];

	console.info(file);

	var hacer = $("#Guardar").val();
	//console.info(hacer); no esta definido hacer. Solucion, cambie en nexo.php
	//el id='registrarse' por id='Guardar'

	var usuario = $("#user").val();
	//console.info(usuario);
	var mail = $("#mail").val();
	//console.info(mail);
	var foto = $("#foto").val();
	//console.info(foto);

	$.ajax({
		url: "nexo.php",
		type: "POST",
		data: {
			   queHacer:hacer,
			   usuario:usuario,
			   mail:mail,
			   foto:foto	
			  },

		success: function(data) 
				  {
					$("#resp").html(data);
				  },

	})

}

















