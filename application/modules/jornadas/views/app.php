<?php $this->load->view("toolsJs") ?>
<div class="row">


<!--HEADER SECTION -->
<div class="col-lg-12">

	<button class="btn btn-default" onclick="loadModule('jornadas/listView')">
		<span class="<?php echo icon('list-alt')?>"></span> <br/>
		<span class="hidden-xs">Jornadas</span>
	</button>
	<?php if ($_SESSION['admin']): ?>
	<button class="btn btn-default" onclick="loadModule('jornadas/addView')">
		<span class="<?php echo icon('plus')?>"></span> <br/>
		<span class="hidden-xs">Nueva jornada</span>
	</button>	
	<?php endif ?>
	
	<?php if ($_SESSION['admin']): ?>
	<button class="btn btn-default" onclick="loadModule('jornadas/closeView')">
		<span class="<?php echo icon('plus')?>"></span> <br/>
		<span class="hidden-xs">Cerrar jornada</span>
	</button>
	<?php endif ?>
</div>

<div class="col-lg-8">
	<div id='modContainer'>
		<?php $this->load->view("appList", $data) ?>
	</div>
</div>

</div>