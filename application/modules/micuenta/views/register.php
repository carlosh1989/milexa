<?php if(!$ajax):?> <!-- if ! ajax-->

<?php $this->load->view("template/topMenu"); ?>

<div class='col-lg-12'>
	<div class='row'>

	<div class='col-lg-2'>
 
	</div>
	
	<style>
		.box{
			background-color:#F9F9F9;
			border:solid 1px #E9E9E9;
			padding:15px;
			border-radius:5px;
			margin-top:15px;
		}
	</style>
	
	<div class='col-lg-8'>
	 	
	 		<form 
	 		class='box' 
	 		method='POST' 
	 		action='' 
	 		autocomplete='off'
	 		id='registerForm' 
	 		onsubmit="return validateForm()"
	 			
	 		>
	 			
	 			<div class='row'>
	 			 
				<div class='col-lg-12 '>
					 <h1><b>Bienvenido</b></h1>
	   	  	 <p>Registrate para publicar, comentar publicaciones y disfrutar de más funcionalidades gratuitas, asegurate de proporcionar los datos correctamente ya que tendras un lapso de 24 horas para actualizar tus datos</p>
	   	  	 <hr>
	   	  	 
				</div>
	 				
	 				<div class='col-lg-4'>
	 				 <label for='Cedula'><i class='<?php echo icon("user") ?>'></i> Cedula, Nif o Pasaporte</label>
	 				<input 
	 				class="form-control" 
	 				type='text' 
	 				placeholder="Cedula, Nif o Pasaporte o email" 
	 				id="Cedula" 
	 				autofocus 
	 				name="Cedula" 
	 				value="<?php echo $_POST['Cedula'] ?>"
	 				>
	 				</div>
	 				
					<div class='col-lg-4'>
						<label for='Nombre'><i class='<?php echo icon("user") ?>'></i> Nombre</label>
		 				<input class='form-control' type='text' placeholder='Su nombre' id='Nombre' name='Nombre'
		 				value="<?php echo $_POST['Nombre'] ?>"> 
					</div>
					
	 				
	 				<div class='col-lg-4'>
	 				 <label for='Apellido'><i class='<?php echo icon("user") ?>'></i> Apellido</label>
	 				<input class='form-control' type='text' placeholder='Su apellido' id='Apellido' name='Apellido'
	 				value="<?php echo $_POST['Apellido'] ?>">
	 				</div>
	 				
	 				
	 				<div class='col-lg-4'>
	 					<label for='Correo'><i class='<?php echo icon("send") ?>'></i> Correo electronico</label>
	 					<input class='form-control' type='text' placeholder='Su correo electronico o email' id='Correo' name='Correo'
	 					value="<?php echo $_POST['Correo'] ?>"> 
	 				</div>
	 				
	 				
	 				<div class='col-lg-4'>
	 					<label for='TlfFijo'><i class='<?php echo icon("phone") ?>'></i> Telefono fijo</label>
	 					<input class='form-control' type='text' placeholder='02...' id='TlfFijo' name='TlfFijo'
	 					value="<?php echo $_POST['TlfFijo'] ?>">
	 				</div>
	 				
	 				<div class='col-lg-4'>
	 				 	<label for='Telefono'><i class='<?php echo icon("phone") ?>'></i> Telefono movil o celular</label>
	 					<input class='form-control' type='text' placeholder='04...' id='Telefono' name='Telefono'
	 					value="<?php echo $_POST['Telefono'] ?>">
	 				</div>
	 				
	 				<div class='col-lg-4'>
	 				 <label for='Password'><i class='<?php echo icon("lock") ?>'></i> Clave</label>
	 				<input class='form-control' type='password' placeholder='********' name='Password' id='Password'
	 				value="<?php echo $_POST['Password'] ?>">
	 				</div>
	 				
	 				<div class='col-lg-4'>
	 				 <label for='passwordConfirm'><i class='<?php echo icon("lock") ?>'></i> Confirme la clave</label>
	 				<input class='form-control' type='password' placeholder='********' name='passwordConfirm' id='passwordConfirm'
	 				value="<?php echo $_POST['Password'] ?>">
	 				</div>
	 				
	 				<div class='col-lg-12'>
	 				<label for='Direccion'><i class='<?php echo icon("lock") ?>'></i> Direccion</label>
	 				<textarea class='form-control' type='password' placeholder="Donde vives" name='Direccion' id='Direccion'><?php echo $_POST['Direccion'] ?></textarea>
	 				</div>
	 				
	 				<div class='col-lg-12' id='consola'>
	 				 <?php if ($_SESSION['error']):?>
	 				<div class='alert alert-<?php echo $_SESSION['error']['type'] ?>'>
					 	<?php echo $_SESSION['error']['msg'] ?>
					</div>
					<?php unset($_SESSION['error']) ?>
				<?php endif ?>
	 				</div>
	 				
	 				
	 				<div class='col-lg-12'>
					  <button class='btn btn-success'><i class='<?php echo icon("send") ?>'></i> Ok</button>
		 				<a href='<?php echo base_url() ?>' class='btn btn-warning'><i class='<?php echo icon("remove-sign") ?>'></i> Salir</a>
		 				<hr>
	 				</div>
	 				

						</div> <!--End row -->
	 				
	 		</form>
	 		
	</div>
	
	<div class='col-lg-2'>
	 
	</div>
		
	</div>
</div>

<?php $this->load->view("scriptJs") ?>
<?php endif ?>




