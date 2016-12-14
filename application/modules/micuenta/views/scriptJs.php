<script type="text/javascript">

/*No empty inputs*/
var noEmpty = ['Cedula','Nombre','Apellido','Correo','TlfFijo','Telefono','Password','passwordConfirm','Direccion'];

function validateForm()
{
 var error = false;

	
 
 for(v in noEmpty){
 	if (document.getElementById(noEmpty[v]).value == '')
 	{
 		document.getElementById(noEmpty[v]).style.background = 'black' ;
 		document.getElementById(noEmpty[v]).style.color = 'white' ;
 		error = true
 	}
 	else
 	{
 		document.getElementById(noEmpty[v]).style.background = 'green' ;
 		document.getElementById(noEmpty[v]).style.color = 'white' ;
 	}
 	
 }
	
	if (!error)
	{
	

		return sendForm({
			reset:false,
			action:"<?php echo base_url('micuenta/register/1') ?>",
			serialize:"registerForm",
			"success":function(response)
			{	
				data = JSON.parse(response);
				
					document.getElementById("consola").innerHTML = data.error
				
				document.getElementById("consola").innerHTML = '';
				
				for(e in data.error)
				{
					document.getElementById("consola").innerHTML += data.error[e];
				}
					
				
				for(v in data.validate)
				{
					console.log(data.validate[v]);
					document.getElementById(data.validate[v]).style.background = 'orange';
 					document.getElementById(data.validate[v]).style.color = 'black' ;
				}
				
				if(data.sesion)
				{
					document.location = '<?php echo base_url() ?>'
				}
			}
		})
		
	}
	else
	{
		return false;
	
	}
	
	
	
}


function sendForm(custom){
 
  var f = $('#'+custom.serialize);

  $.ajax({
      type: "POST",
      url: custom.action,
      data: f.serialize(),
      success: function( response ) {
        
        if (custom.reset)
        {
          document.getElementById(custom.serialize).reset();
        }
        
				console.log( response );
        custom.success(response);   
      }
    });

    return false;
}

	function loadModule(uri)
		{	
			console.log(uri)
			$( "#modContainer" ).load('<?php echo base_url() ?>' + uri);
		}


	function AsignCatTo(data)
		{
			IdCargo.value = data.IdCargo;
			$( "#templatesContainer" ).load('<?php echo base_url("templates/templateList") ?>/' + data.IdCargo);

		}
		
		
		function setTemplate(IdTemplate)
		{
			$( "#templatesContainer" ).load('<?php echo base_url("templates/displayFormat") ?>/' + IdTemplate);
		}

function ajaxComplete(){

    // Update trees data modules
    <?php foreach ($callsArray as $key => $call): ?>
      $('#<?php echo $key ?>').load('<?php echo base_url("estructura/display/$call") ?>');
    <?php endforeach ?>

}




</script>
