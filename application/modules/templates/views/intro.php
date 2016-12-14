<!-- TEMPLATES SECTION -->
<div class="col-lg-8" id="intro">
	<h1>Templates caracteristicas para asignar a las categorias</h1>
	<p class="lead">Realizar actualizaciones sobre un template</p>

	<table class="table table-dashed table-bordered table-colapse">
		<thead>
			<th>Nombre del template</th>
			<th>Descripcion</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php foreach ($templates->result() as $t ) : ?>
				<tr>
					<td><?php echo $t->NombreTemplate ?></td>
					<td><?php echo $t->Descripcion ?></td>
					<td><button class="btn btn-xs btn-default" onclick="loadModule('templates/updateView/<?php echo $t->IdTemplate ?>')"><i class="<?php echo icon('cog') ?>"></i></button></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div> 
<!-- END LISTA TEMPLATES -->
