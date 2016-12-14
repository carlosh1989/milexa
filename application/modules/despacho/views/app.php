<?php $this->load->view("toolsJs") ?>
<div class="row">


<!--HEADER SECTION -->
<div class="col-lg-12">

	<button class="btn btn-default" onclick="loadModule('despacho/listView')">
		<span class="<?php echo icon('list-alt')?>"></span> <br/>
		<span class="hidden-xs">Jornada activa</span>
	</button>
		
	<?php if ($_SESSION['admin'] || $_SESSION['despachador'] ): ?>
	<button class="btn btn-default" onclick="loadModule('despacho/addView')">
		<span class="<?php echo icon('plus')?>"></span> <br/>
		<span class="hidden-xs">Despachar</span>
	</button>
	<?php endif ?>

	<button class="btn btn-default" onclick="loadModule('despacho/historyView')">
		<span class="<?php echo icon('plus')?>"></span> <br/>
		<span class="hidden-xs">Historial</span>
	</button>

</div>

<div class="col-lg-8">
	<div id='modContainer'>
		<?php $this->load->view("appList", $data) ?>
	</div>
</div>

<div class='col-lg-4'>
<div id='consola'>
</div>
</div>

</div>