<div class="row">

<?php if (!$jornadaAbierta->Fecha): ?>
<?php  	$mensaje['tipo'] 	= 'danger';
		$mensaje['error'] 	= 'No hay jornadas abiertas';
		$this->load->view("template/error",$mensaje);
?>

<?php endif?>

<form  id='formAddAct' action="<?php echo base_url('jornadas/closeJornada') ?>" method='POST' enctype="multipart/form-data">

<?php if ($jornadaAbierta->Fecha): ?>
<div class="col-lg-12">
	<h1>Cerrar jornada</h1>
	<p class="lead">Introduzca la fecha de cierre de la jornada</p>
</div>

	
<div class="col-lg-9">
	<div class="row">
	
		<div class="col-lg-7">
			<label>Jornada abierta</label>
			<input class='form-control' disabled type="date" value="<?php echo $jornadaAbierta->Fecha ?>">
			<label>Fecha de cierre</label>
			<input class='form-control' type="date" name="FechaCierre" min="<?php echo $jornadaAbierta->Fecha ?>" required>
		</div>

		<div class="col-lg-12">
			<br>
			<button class="btn btn-success btn-md">Guardar</button>
			<button class="btn btn-danger btn-md" type="reset">Cancelar</button>
		</div>

	</div>
	</div>
<?php endif ?>
	</form>
</div>


<script type="text/javascript">
	var datemin = '<?php echo $jornadartaAbie->Fecha ?>';




</script>