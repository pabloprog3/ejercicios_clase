
function ingresar() {

	var usuario = $('#usuario').val();
	var password = $('#password').val();
	//alert( usuario );

	// $.ajax({

	// 	url: 'nexo.php',
	// 	type:'post',
	// 	data: {usuario:usuario, password:password},
	// 	success: function(resultado){
	// 		alert(resultado);
	// 	}

	// });

	$.ajax(
		{
			url:'nexo.php',
			type:'post', 
			data:{
				usuario:usuario, 
				password:password
			}
		})
	.then(function(resultado){
		//si funciona ajax
		alert(resultado);
		
	}, 
		function(resul){
			//si falla ajax
			alert(resul);
		});

}

