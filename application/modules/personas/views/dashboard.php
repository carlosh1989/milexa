<style type="text/css">
	.btn-dashboard{
		border-radius: 0px;
	}
</style>

<?php $btn = ''; ?>


<div class="row">
<div class="col-lg-12">
	
	<button class="btn btn-default" onclick='loadModule("personas/searchView")'>
		<span class="glyphicon glyphicon-search"></span> <br/>Buscar
	</button>
	<?php if ($_SESSION['admin']): ?>
		<button class="btn btn-default" onclick='loadModule("personas/addView")'>
			<span class="glyphicon glyphicon-plus"></span> <br/>Nueva persona
		</button>
	<?php endif ?>

	
	<button class="btn btn-default" onclick='loadModule("personas/listView")'>
		<span class="glyphicon glyphicon-plus"></span> <br/>Listar todos
	</button>
</div>
</div>


