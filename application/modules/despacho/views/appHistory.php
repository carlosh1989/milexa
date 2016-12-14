<?php $this->load->view("toolsJs") ?>

<div class="col-lg-12">
<div class="row">

<!--HEADER SECTION -->
<div class="col-lg-12">
<h1>Historial de jornadas</h1>
<table class="table table-bordered table-colapse table-responsive">
	<thead>
		<th>Fecha inicio</th>
		<th>Fecha de cierre</th>
		<th>Estatus</th>
	</thead>
	<tbody>
	<?php foreach ($jornadaList->result() as $jornada): ?>
		<tr>
			<td><?php echo $jornada->Fecha ?></td>
			<td><?php echo $jornada->FechaCierre ?></td>
			<td>
				<button class="btn btn-default btn-xs" onclick="loadModule('despacho/getHistory/<?php echo $jornada->IdJornada ?>')">
					<span class="glyphicon glyphicon-folder-open"></span> Ver
				</button>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
			
</div>

<div class='col-lg-4'>
<div id='consola'>
</div>
</div>

</div>
</div>