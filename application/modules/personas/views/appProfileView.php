<div class="row">
	
	<div class="col-lg-12">
		<h1><?php echo "$persona->Nombre $persona->Apellido " ?></h1>
		<hr>
	</div>

	<form action="<?php echo base_url('personas/updateFicha') ?>" method='POST' enctype="multipart/form-data">
	
	<div class="col-lg-12">
	<div class="row">
		
		<div class="col-lg-3">
			<img src="<?php echo base_url("upload/profile/$persona->Foto")?>" width="100%">
			<input type="file" name="foto" style="display:none" id="foto">
		</div>

		<div class="col-lg-9">
			
		<?php if ($_SESSION['admin']): ?>
		<button class="btn btn-xs btn-default" type='button' onclick="enableContactEdit()">
			<span class="glyphicon glyphicon-pencil"></span> Editar
		</button>
		<?php endif ?>
		
		<hr>	

		<div class="col-lg-3">
			<label>Cedula</label>
			<input id="fichaCedula" class='form-control ficha' placeholder="Ej:123456" disabled value="<?php echo $persona->Cedula ?>">
			<input type="hidden" name="Cedula" value="<?php echo $persona->Cedula ?>">
		</div>

			<div class="col-lg-4"><label>Nombre</label>
				<input 
				id="fichaNombre" 
				class='form-control ficha' type="text" disabled name="Nombre" placeholder="Ej:Jhon"
				value="<?php echo $persona->Nombre ?>">
			</div>

			<div class="col-lg-4"><label>Apellido</label>
				<input
				id="fichaApellido" 
				class='form-control ficha' disabled type="text" name="Apellido" placeholder="Ej: Doe"
				value="<?php echo $persona->Apellido ?>">
			</div>
		
			<div class="col-lg-5"><label>Correo</label>
				<input
				id="fichaCorreo" 
				class='form-control ficha' disabled name="Correo" placeholder="Correo del activista"
				value="<?php echo $persona->Correo ?>">
			</div>
		
			<div class="col-lg-4"><label>Telefono celular</label>
				<input
				id="fichaTelefono" 
				class='form-control ficha' disabled name="Telefono" placeholder="Ej: 0414..."
				value="<?php echo $persona->Telefono ?>">
			</div>
		
			<div class="col-lg-4"><label>Telefono fijo</label>
			<input 
				id="fichaTlfFijo"
				class='form-control ficha' disabled name="TlfFijo" placeholder="Ej: 0273..."
				value="<?php echo $persona->TlfFijo ?>">
			</div>

			<div class="col-lg-6">
			<label>Hijos menores de 2 años (<?php echo $persona->Hijos ?>)</label>
			<select name="Hijos" class="form-control" disabled id="fichaHijos">
				<option value="<?php echo $persona->Hijos ?>">Seleccione una opcion</option>
				<option value="0">Ninguno</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			
			
			<div class="col-lg-8"><label>Direccion de vivienda</label>
				<textarea 
				id="fichaDireccionHav" 
				class='form-control ficha' disabled name="Direccion" 
				placeholder="Donde vive"><?php echo $persona->Direccion ?></textarea>
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
 </div>
 </form>
	</div>
