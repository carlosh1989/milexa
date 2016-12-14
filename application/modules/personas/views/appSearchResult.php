	
<?php if ($profile->Cedula): ?>
	<div class="row">
		<div class="col-lg-12">
			
		<h1>Resultado</h1>
			<br>
		
	<div class="media">
	<div class="media-left">
	<a href="#">
	<img alt="Imagen" class="media-object" src="<?php echo base_url("upload/profile/$profile->Foto") ?>" style="width: 64px; height: 64px;">
	</a> 
	</div> 
	<div class="media-body">
	<h4 class="media-heading"><b><?php echo $profile->Nombre ?></b></h4>
	
	 <table class="table table-bordered">
	 	<thead>
	 		<th>Cedula</th>
	 		<th>Correo</th>
	 		<th>Telefono</th>
	 		<th>Acciones</th>
	 	</thead>
	 	<tbody>
	 		<tr>
	 			<td><?php echo $profile->Cedula ?></td>
	 			<td><?php echo $profile->Correo ?></td>
	 			<td><?php echo $profile->Telefono ?></td>
	 			<td>
	 				<div class="dropdown">
  <button class="btn btn-default" type="button" 
  	onclick='loadModule("personas/profileView/<?php echo $profile->Cedula ?>")'>
    <span class="glyphicon glyphicon-cog"></span>
  </button>

</div>
	 			</td>
	 		</tr>
	 	</tbody>
	 </table>

	</div>
	</div>
	</div>
	</div>
<?php endif ?>

<?php if (!$profile->Cedula): ?>
	<div class="row">
	<div class="col-lg-12">
	<br>
	<div class="alert alert-warning">
		<h1>No se han encontrado resultados</h1>
	</div>
	</div>
	</div>
<?php endif ?>