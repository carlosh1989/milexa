<div class="row">
<div class="col-lg-12">
	<h1>Buscar persona</h1>
	<p class="lead">Use este modulo para buscar una persona</p>
</div>
	<form id='incorpForm' 
	onsubmit='return sendForm({
			reset:false,
			action:"<?php echo base_url('personas/searchView') ?>",
			serialize:"incorpForm",
			"success":function(response)
			{
				document.getElementById("modContainer").innerHTML = response;
			}
		})'>

		<div class="col-lg-3">
			<label>Cedula</label>
			<input class='form-control' type="number" name="Cedula" placeholder="Ej:123456">
		</div>

		<div class="col-lg-12">
			<button class="btn btn-success btn-md">Aceptar</button>
			<button class="btn btn-danger btn-md">Cancelar</button>
			<hr>
		</div>
	</form>
</div>
