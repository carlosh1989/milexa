<?php $this->load->view("toolsJs") ?>
<div class="row">


<!--HEADER SECTION -->
<div class="col-lg-12">

	<button class="btn btn-default" onclick="loadModule('despachadores/introView')">
		<span class="<?php echo icon('list-alt')?>"></span> <br/>
		<span class="hidden-xs">Despachadores</span>
	</button>

	<button class="btn btn-default" onclick="loadModule('despachadores/addView')">
		<span class="<?php echo icon('plus')?>"></span> <br/>
		<span class="hidden-xs">Nuevo despachador</span>
	</button>
</div>

<div class="col-lg-12">
	<div id='modContainer'>
		<?php $this->load->view("appList", $data) ?>
	</div>
</div>

<div class='col-lg-4'>
<div id='consola'>
</div>
</div>

</div>