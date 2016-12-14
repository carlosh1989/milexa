<?php $this->load->view("toolsJs") ?>

<div class="col-lg-12">
<div class="row">



<div class="col-lg-12">
	<?php if ($IdJornada): ?>
		<h1>Historial de la jornada <?php echo $IdJornada ?></h1>
	<?php endif ?>

	<?php if (!$IdJornada): ?>
		<h1>Historial de la jornada activa</h1>
	<?php endif ?>

</div>



<?php if ($jornadaAbierta->Fecha): ?>
<div class="col-lg-12">
<table class="table table-bordered table-colapse table-responsive table-dashed table-hover">
	<thead>
		<th>Jornada</th>
		<th>Nombre</th>
		<th>Cedula</th>
		<th>Estatus</th>
	</thead>
	<tbody>
	<?php foreach ($jornadaList->result() as $jornada): ?>
		<tr>
			<td><?php echo $jornada->Fecha ?></td>
			<td><?php echo "$jornada->Nombre $jornada->Apellido" ?></td>
			<td><?php echo $jornada->Cedula ?></td>
			<td style="background-color: <?php echo ($jornada->IdJornada) ? 'green':'grey' ; ?>"></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
</div>
<?php endif ?>

<?php if ($IdJornada): ?>
<div class="col-lg-12">
<table class="table table-bordered table-colapse table-responsive table-dashed table-hover">
	<thead>
		<th>Jornada</th>
		<th>Nombre</th>
		<th>Cedula</th>
		<th>Estatus</th>
	</thead>
	<tbody>
	<?php foreach ($jornadaList->result() as $jornada): ?>
		<tr>
			<td><?php echo $jornada->Fecha ?></td>
			<td><?php echo "$jornada->Nombre $jornada->Apellido" ?></td>
			<td><?php echo $jornada->Cedula ?></td>
			<td style="background-color: <?php echo ($jornada->IdJornada) ? 'green':'grey' ; ?>"></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
</div>
<?php endif ?>



<?php if (!$jornadaAbierta->Fecha): ?>
<?php  	$mensaje['tipo'] 	= 'danger';
		$mensaje['error'] 	= 'No hay jornadas abiertas';
		$this->load->view("template/error",$mensaje);
?>
<?php endif?>




<div class='col-lg-4'>
<div id='consola'>
</div>
</div>

</div>
</div>