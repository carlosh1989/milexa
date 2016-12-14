<!-- ARBOL DE EXPLORACION-->
<ul class="nav nav-pills nav-stacked box2" style='margin-right:3px'> 
	
		<li><a href='<?php echo base_url("personas") ?>'> Personas </a></li>
	
		<?php if ($_SESSION['admin']): ?>
			<li><a href='<?php echo base_url("despachadores") ?>'> Despachadores </a></li>
		<?php endif ?>
		
		<li><a href='<?php echo base_url("jornadas") ?>'> Jornadas </a></li>

		<li><a href='<?php echo base_url("despacho") ?>'> Despacho </a></li>

		<li><a href='<?php echo base_url("micuenta/logout") ?>'> Cerrar sesion </a></li>
</ul>
