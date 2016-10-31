
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

	var data={usuario:usuario, password:password};

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
		alert(resultado);
	}, 
		function(resul){
			alert(resul);
		});

}

