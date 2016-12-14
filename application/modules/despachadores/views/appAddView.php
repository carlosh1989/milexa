<div class="col-lg-8">
			<div class='row'>
			
			<form action="<?php echo base_url('despachadores/add') ?>" id="appForm"
				onsubmit='return sendForm(
				{
					reset:false,
					action:"<?php echo base_url('despachadores/add') ?>",
					serialize:"appForm",
					"success":function(response)
					{
						document.getElementById("consola").innerHTML = response;
						console.log( response );
					}
				})'>
			
			 <div class='col-lg-12'>
		
			<h1>Agregar despachador</h1>
			<p class="lead">Use este modulo para agregar, habilitar y deshabilitar un despachador</p>
			
		

		
			<label for="Cedula">Cedula</label>
			<input id="Cedula" class='form-control' type="text" name="Cedula" placeholder="Escriba la cedula del despachador" requried >
				<br>
				<button class="btn btn-success btn-md">Agregar</button>
				<a class="btn btn-danger btn-md" href=''>Cancelar</a>

	</div>
	
</form>
</div><!-- END ROW -->
</div>