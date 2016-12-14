<script>

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
        
				
        custom.success( response );  
        console.log( response ); 
      }
    });

    return false;
}


function loadModule(uri)
{
	$( "#modContainer" ).load('<?php echo base_url() ?>' + uri);
}

</script>
