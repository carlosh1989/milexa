<h1>Anuncios</h1>
	<table class='table table-dashed table-bordered table-colapse'>
		<thead>
			<th>Titulo</th>
			<th>Fecha</th>
			<th>Precio</th>
			<th>Estatus</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<?php foreach ($ads->result() as $ad ) : ?>
				<tr>
					<td><?php echo $ad->Titulo ?></td>
					<td><?php echo $ad->Fecha ?></td>
					<td><?php echo $ad->Precio ?></td>
					<td><?php echo $ad->Estatus ?></td>
					<td><button class="btn btn-xs btn-default"><i class="<?php echo icon('cog') ?>"></i></button></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
