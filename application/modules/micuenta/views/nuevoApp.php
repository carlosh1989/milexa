<form  id='formAddAct' onsubmit='return sendForm({
			reset:false,
			action:"<?php echo base_url('micuenta/addAds') ?>",
			serialize:"formAddAct",
			"success":function(response)
			{
				document.getElementById("consola").innerHTML = response;
				ajaxComplete();
			}
		})' action='<?php echo base_url('micuenta/addAds') ?>'>
		
<div class="row" style="display:none" id="newAds">



<div class="col-lg-3" style="text-align:center">
		<label>Foto</label>
		<input type="hidden" name="Foto" id="FotoTemp">
		<iframe id='randomUpload' src="<?php echo base_url('personas/photoUpload') ?>" width='100%' height='200px' frameborder='0'></iframe>
</div>

<div class="col-lg-5">
<div class="row">
	
		<div class="col-lg-12">
			<label>Titulo</label>
			<input class='form-control' type="text" name="Titulo" placeholder="Titulo de su publicacion">
		</div>


		<div class="col-lg-3">
			<label>Precio</label>
			<input class='form-control' type="number" name="Precio" placeholder="$0.00">
		</div>
		
		<div class="col-lg-3">
			<label>Categoria</label>
			<input class='form-control' type="text" name="IdCargo" id='IdCargo'>
		</div>

		<div class="col-lg-12">
			<label>Descripcion</label>
			<textarea class='form-control' type="mail" name="Descripcion" placeholder="Describa su publicacion aqui"></textarea>
		</div>


		<div class="col-lg-12">
			<br>
			<button class="btn btn-success btn-md">Guardar</button>
			<button class="btn btn-danger btn-md" type="reset">Cancelar</button>
		</div>

	</div>
</div>



<div class="col-lg-4">
		<h3>Categoria</h3>
		<?php echo $category ?>
	</div>
	
	
</div>
</form>
	

