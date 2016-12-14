<div class="row">
<form  id='formAddAct' action="<?php echo base_url('personas/add') ?>" method='POST' enctype="multipart/form-data">

<div class="col-lg-12">
	<h1>Agregar nueva persona</h1>
	<p class="lead">Use este modulo para agregar una nueva persona</p>
</div>

<div class="col-lg-3" style="text-align:center">
	<label>Foto</label>
	<input type="file" name="foto">
</div>

<div class="col-lg-9">
	<div class="row">
	
		<div class="col-lg-5">
			<label>Cedula</label>
			<input class='form-control' type="number" name="Cedula" placeholder="Cedula del activista">
		</div>
		
		<div class="col-lg-5">
			<label>Clave</label>
			<input class='form-control' name="Password" placeholder="Clave">
		</div>

		<div class="col-lg-7">
			<label>Nombre</label>
			<input class='form-control' type="text" name="Nombre">
		</div>

		<div class="col-lg-7">
			<label>Apellido</label>
			<input class='form-control' type="text" name="Apellido" placeholder="Apellido">
		</div>

		<div class="col-lg-5">
			<label>Telefono celular</label>
			<input class='form-control' type="number" name="Telefono" placeholder="Telefono celular">
		</div>

		<div class="col-lg-5">
			<label>Telefono fijo</label>
			<input class='form-control' type="number" name="TlfFijo" placeholder="Telefono fijo">
		</div>

		<div class="col-lg-6">
			<label>Correo</label>
			<input class='form-control' type="mail" name="Correo" placeholder="Correo del activista">
		</div>

		<div class="col-lg-6">
			<label>Hijos menores de 2 años</label>
			<select name="Hijos" class="form-control">
				<option value="">Seleccione una opcion</option>
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
			
		</div>

		<div class="col-lg-12">
			<label>Direccion de vivienda</label>
			<textarea class='form-control' type="mail" name="Direccion" placeholder="Donde vive"></textarea>
		</div>

		<div class="col-lg-12">
			<br>
			<button class="btn btn-success btn-md">Guardar</button>
			<button class="btn btn-danger btn-md" type="reset">Cancelar</button>
		</div>

	</div>
	</div>
	</form>
</div>
