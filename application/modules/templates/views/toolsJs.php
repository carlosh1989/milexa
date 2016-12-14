<script>

function setTemplateIn(tree)
{
	$( "#treeInContainer" ).load('<?php echo base_url("templates/templateTreeIn") ?>/' +  IdTemplate.value + '/' + tree.IdCargo);
	//alert(IdTemplate.value + '/' + tree.IdCargo);
}


function multiInput(){
 var m;
 var 
 m = {
	"inputsName" : "feature[]",
	"inputsContainer": false,
	"getFrom": false,
	"inputs" : [],
	'trigger' : function(id)
	{
		document.getElementById(id).onclick = function(){
			console.log(m.getFrom);
			if (m.getFrom)
			{
				m.add({"value":document.getElementById(m.getFrom).value});
			}
			else
			{
				m.add({"value":""});
			}
		}
	}
	,
	"add" : function(obj)
	{
		m.inputs.push(obj);
		m.renderInputs();
		console.log(m.inputs);
	},
	
	"del" : function(key)
	{
		delete(m.inputs[key]);
	},
	
	"renderInputs":function()
		{	
			var html = '';
			for(i in m.inputs)
			{ 	
		    v = m.inputs[i].value;
				html += '<input type="text" value="'+ v +'" name="'+ m.inputsName + '">';
			}
				
			document.getElementById(this.inputsContainer).innerHTML = html;
		}
	
	}

	
	return m;
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
	$( "#modContainer" ).load('<?php echo base_url() ?>' + uri);
}

</script>
