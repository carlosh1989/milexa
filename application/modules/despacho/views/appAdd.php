<div class="row">
<form  id='formAddAct' action="<?php echo base_url('despacho/despachar') ?>" method='POST' enctype="multipart/form-data">

<div class="col-lg-12">
	<h1>Despachar</h1>
	<p class="lead">Use este modulo para registrar el despacho de la mercancia</p>
</div>

<?php if ($jornadaAbierta->Fecha): ?>
<div class="col-lg-9">
	<div class="row">
	
		<div class="col-lg-7">
			<label>Numero de cedula</label>
			<input class='form-control' type="date" name="Cedula">
		</div>

		<div class="col-lg-12">
			<br>
			<button class="btn btn-success btn-md">Guardar</button>
			<button class="btn btn-danger btn-md" type="reset">Cancelar</button>
		</div>

	</div>
	</div>
<?php endif ?>

<?php 

if (!$jornadaAbierta->Fecha)
	{

		$mensaje = array(
			'tipo' 	=> 'danger',
			'error' => 'No hay jornadas abiertas'
		);
	
		$this->load->view("template/error",$mensaje);
	}
?>

	</form>
</div>
