	$(document).ready(function(){

		$('#bEnviar').click(function(){
			var nombre = $('#itNombre').val();
			var correo = $('#itEmail').val();
			var asunto = $('#itAsunto').val();

			if(nombre==''){
               $('#itNombre').css('border-bottom','2px solid red');
               return false;
			}else{
				$('#itNombre').css('border-bottom','1px solid #90caf9');
			
				if (correo=='') {
				$('#itEmail').css('border-bottom','2px solid red');
				return false;
			}else{
				$('#itEmail').css('border-bottom','2px solid #90caf9');

				 if (asunto=='') {
				$('#itAsunto').css('border-bottom','2px solid red');
				return false;
			}
			

			
		}

		$('#bEnviar').fadeOut();
		$('#mensaje4').fadeIn();
              
			}
		})});