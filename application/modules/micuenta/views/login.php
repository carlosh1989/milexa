<style>

.box{
			background-color:#F9F9F9;
			border:solid 1px #E9E9E9;
			padding:15px;
			border-radius:5px;
			margin-top:15px;
		
		}


</style>

<div class='col-lg-12'>
	<div class='row'>

	<div class='col-lg-4'></div>
	

	
	<div class='col-lg-4'>
	 	
	 		<form class='box' method='POST' action='' id='loginForm' autocomplete='off'>
			<h1><b>Inicia sesión</b></h1>
			<p>Autenticate acceder al sistema administrativo </p>	
	 		<div align="center">
	 			<img src="<?php echo base_url("assets/images/logo.jpg") ?>" width="100">
	 		</div>
					
					<label for='Cedula'><i class='<?php echo icon("user") ?>'></i> Cedula</label>
	 				<input class='form-control' type='text' placeholder='Cedula' id='Cedula' autofocus name='Cedula'>
	 			
	 				
	 				<label for="password"><i class='<?php echo icon("lock") ?>'></i> Clave</label>
	 				<input class='form-control' type='password' placeholder='********' name='password' id="password">
	 				
	 			<?php if ($_SESSION['error']):?>
	 				<div class='alert alert-<?php echo $_SESSION['error']['type'] ?>'>
					 	<?php echo $_SESSION['error']['msg'] ?>
					</div>
					<?php unset($_SESSION['error']) ?>
				<?php endif ?>
					 				
	 				<button class='btn btn-success'><i class='<?php echo icon("send") ?>'></i> Entrar</button>
	 				<a href='<?php echo base_url() ?>' class='btn btn-warning'><i class='<?php echo icon("remove-sign") ?>'></i> Salir</a>
	 				<hr>
	 				
	 				
	 				
	 				<!--
	 					<a href='<?php echo base_url("micuenta/register") ?>'>Quiero registrarme</a> | 
	 					<a href=''>No recuerdo mi clave</a>
	 				-->
	 				
					
	 				
	 		</form>
	 		
	</div>
	
	<div class='col-lg-4'>
	 
	</div>
		
	</div>
</div>
