<div class="col-lg-8">
			<div class='row'>
			 <div class='col-lg-8'>

			<h1><?php echo $template->NombreTemplate ?></h1>
			<p class="lead">Use este modulo para actualizar y configurar el template</p>
			
		<form id="templateForm"
				onsubmit='return sendForm(
				{
					reset:false,
					action:"<?php echo base_url("templates/update/$template->IdTemplate") ?>",
					serialize:"templateForm",
					"success":function(response)
					{	
						document.getElementById("consola").innerHTML = response;
						console.log("response");
						loadModule("templates/updateView/<?php echo $template->IdTemplate ?>");
					}
				})'>

			
			<label for="NombreTemplate">Nombre del template</label>
			<input id="NombreTemplate" value="<?php echo $template->NombreTemplate ?>" class='form-control' type="text" name="NombreTemplate" placeholder="Escriba aqui el nombre" requried >
		

			<!-- FEATURES CONTROL-->
				<h3>Caracteristicas</h3>
				<button id='btnAddFeature' class="btn btn-default btn-xs" type='button'>Agregar nueva caracteristica</button>
				
			<hr>
			
			<!-- FEATURES DB CONTAINER-->
			<div>
				<?php foreach ($features->result_array() as $f):?>
					<input type="text" value="<?php echo $f['NombreFeature'] ?>" name="update[<?php echo $f['idtemplateFeatures'] ?>]">
				<?php endforeach ?>
			</div>
			
			<!-- FEATURES TEMP CONTAINER-->
			<div id='featuresContainer'>
			</div>
			
			<br>
				<button class="btn btn-success btn-md">Aplicar</button>
				<button class="btn btn-danger btn-md">Cancelar</button>
				<!--END FEATURES SECTION -->

</form>
		</div> 
		
		<div class='col-lg-4'>
			<h3>Mostrar en</h3>
			<input id="IdTemplate" value="<?php echo $template->IdTemplate ?>" type='hidden'>
			<div id='treeInContainer'>
			 	<?php echo $treeIn ?>
			</div>
		</div>
		
</div><!-- END ROW -->
</div>

<!--Module javascript logic-->
<?php $this->load->view('addJs') ?>

