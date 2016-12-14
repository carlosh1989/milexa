<div class="row">
<form  id='formAddAct' action="<?php echo base_url('jornadas/addJornada') ?>" method='POST' enctype="multipart/form-data">

<div class="col-lg-12">
	<h1>Agregar nueva jornada</h1>
	<p class="lead">Use este modulo para agregar una nueva jornada de distribucion de alimentos</p>
</div>


<div class="col-lg-9">
	<div class="row">
	<?php if (!$this->jornadas_model->getAbierta()->row()->IdJornada): ?>
		<div class="col-lg-7">
			<label>Fecha inicio</label>
			<input class='form-control' type="date" name="Fecha">
		</div>

		<div class="col-lg-12">
			<br>
			<button class="btn btn-success btn-md">Guardar</button>
			<button class="btn btn-danger btn-md" type="reset">Cancelar</button>
		</div>
	<?php endif ?>

	<?php if ($this->jornadas_model->getAbierta()->row()->IdJornada): ?>
		
		<div class="col-lg-12">
			<br>
			<div class="aler alert-warning">
				Debe cerrar la jornada abierta para poder abrir una nueva jornada
			</div>
		</div>
	<?php endif ?>


	</div>
	</div>
	</form>
</div>
