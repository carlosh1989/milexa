	<div class="col-lg-12">
	<h1>Ficha Personal</h1>
	<p class="lead">Explore la ficha del contacto</p>
	



	</div>

	<form id="fichaForm" onsubmit='return sendForm({
			reset:false,
			action:"<?php echo base_url('personas/updateFicha') ?>",
			serialize:"fichaForm",
			"success":function(response)
			{
				document.getElementById("consola").innerHTML = response;
				ajaxComplete();
			}
		})'>
		
	<div class="row">
		
		<div class="col-lg-3">
			<img src="" id="fotoFicha" width="100%">
		</div>

		<div class="col-lg-9">
		<button class="btn btn-xs btn-default" onclick="enableContactEdit()">
		<span class="glyphicon glyphicon-pencil"></span> Editar
	</button>
		<hr>	

			<div class="col-lg-3"><label>Cedula</label>
	<input id="fichaCedula" class='form-control ficha' type="number" name="Cedula" placeholder="Ej:123456"
			disabled>
	</div>

			<div class="col-lg-3"><label>Nombre</label>
			<input 
			id="fichaNombre" 
			class='form-control ficha' type="text" disabled name="Nombre" placeholder="Ej:Jhon">
			</div>

			<div class="col-lg-3"><label>Apellido</label>
			<input 
			id="fichaApellido" 
			class='form-control ficha' disabled type="text" name="Apellido" placeholder="Ej: Doe">
			</div>
		
			<div class="col-lg-3"><label>Correo</label>
			<input 
			id="fichaCorreo" 
			class='form-control ficha' disabled name="Correo" placeholder="Correo del activista">
			</div>
		
			<div class="col-lg-3"><label>Telefono celular</label>
			<input 
			id="fichaTelefono" 
			class='form-control ficha' disabled name="Telefono" placeholder="Ej: 0414...">
			</div>
		
			<div class="col-lg-3"><label>Telefono fijo</label>
			<input 
			id="fichaTlfFijo"
			class='form-control ficha' disabled name="TlfFijo" placeholder="Ej: 0273...">
			</div>
			
			<div class="col-lg-12"><label>Direccion de vivienda</label>
			<textarea 
			id="fichaDireccionHav" 
			class='form-control ficha' disabled name="Direccion" placeholder="Donde vive"></textarea>
			</div>

				<div class="col-lg-12" id="fichaApplyControl" style="display:none">

				<button class="btn btn-success btn-md" type="submit">
					Aplicar <i class="glyphicon glyphicon-ok-sign"></i>
				</button>
				<button class="btn btn-danger btn-md" type="button" onclick="disableContactEdit()">
					Cancelar <i class="glyphicon glyphicon-remove-sign"></i>
				</button>
			<hr>
		</div>
		</div>

	</div>
	
	</form>
