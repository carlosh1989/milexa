<div class="col-lg-8">
			<div class='row'>
			
			<form action="<?php echo base_url('templates/add') ?>" id="templateForm"
				onsubmit='return sendForm(
				{
					reset:false,
					action:"<?php echo base_url('templates/add') ?>",
					serialize:"templateForm",
					"success":function(response)
					{
						document.getElementById("consola").innerHTML = response;
						console.log("response");
					}
				})'>
			
			 <div class='col-lg-12'>
		
			<h1>Nuevo template</h1>
			<p class="lead">Use este modulo para agregar y configurar un nuevo template</p>
			
		

		
			<label for="NombreTemplate">Nombre del template</label>
			<input id="NombreTemplate" class='form-control' type="text" name="NombreTemplate" placeholder="Escriba aqui el nombre" requried >
		

			<!-- FEATURES CONTROL-->
				<h3>Caracteristicas</h3>
				<button id='btnAddFeature' class="btn btn-default btn-xs" type='button'>Agregar nueva caracteristica</button>
				
			<hr>

			<!-- FEATURES TEMP CONTAINER-->
			<div id='featuresContainer'>
			</div>
			
			<br>
				<button class="btn btn-success btn-md">Aplicar</button>
				<button class="btn btn-danger btn-md">Cancelar</button>
				<!--END FEATURES SECTION -->

	</div>
	
</form>
</div><!-- END ROW -->
</div>

<!--Module javascript logic-->
<?php $this->load->view('addJs') ?>

