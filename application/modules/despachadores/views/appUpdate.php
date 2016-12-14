<div class="col-lg-8">
		
		<div class='row'>
			
 <div class='col-lg-12'>
		
		<div class='row'>
 <div class='col-lg-12'>
		<h1>Actualizar despachador</h1>
		<p class="lead">Use este modulo para habilitar y deshabilitar un despachador</p>
	</div>

		<div class="col-lg-3">
			<label>Cedula</label>
			<input id="fichaCedula" class='form-control ficha' placeholder="Ej:123456" disabled value="<?php echo $profile->Cedula ?>">
			<input type="hidden" name="Cedula" value="<?php echo $profile->Cedula ?>">
		</div>

		<div class="col-lg-4">
		<label>Nombre</label>
			<input 
			id="fichaNombre" 
			class='form-control ficha' type="text" disabled name="Nombre" placeholder="Ej:Jhon"
			value="<?php echo $profile->Nombre ?>">
		</div>

		<div class="col-lg-4">
		<label>Apellido</label>
			<input
			id="fichaApellido" 
			class='form-control ficha' disabled type="text" name="Apellido" placeholder="Ej: Doe"
			value="<?php echo $profile->Apellido ?>">
		</div>

			<div class="col-lg-12">
				<button class="btn btn-success btn-lg" 
				onclick="loadModule('despachadores/io/<?php echo $profile->Cedula ?>/1')">Habilitar</button>

				<button class="btn btn-danger btn-lg" 
				onclick="loadModule('despachadores/io/<?php echo $profile->Cedula ?>/0')">Deshabilitar</button>

				
			</div>

	</div>
	</div>
</div><!-- END ROW -->
</div>