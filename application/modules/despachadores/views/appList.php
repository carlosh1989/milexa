<?php $this->load->view("toolsJs") ?>
<div class="col-lg-12">
<div class="row">


<!--HEADER SECTION -->
<div class="col-lg-12">
<h1>Lista de despachadores</h1>
<table class="table table-bordered table-colapse table-responsive">
	<thead>
		<th>Cedula</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono</th>
		<th>Email</th>
		<th>Estatus</th>
	</thead>
	<tbody>
	
	<?php foreach ($listaDespachadores->result() as $despachador): ?>
		<tr>
			<td>
				<button type="button" onclick="loadModule('despachadores/actions/<?php echo $despachador->Cedula ?>')">
					<?php echo $despachador->Cedula ?>	
				</button>
			</td>
			<td><?php echo $despachador->Nombre ?></td>
			<td><?php echo $despachador->Apellido ?></td>
			<td><?php echo $despachador->Telefono ?></td>
			<td><?php echo $despachador->Correo ?></td>
			<td style="background">
				<?php echo $despachador->Status ?>	
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