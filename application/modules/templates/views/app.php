<?php $this->load->view("toolsJs") ?>

<style>
	.box{
		background-color:#F9F9F9;
		border:solid 1px #E9E9E9;
		padding:15px;
		border-radius:5px;
		margin-top:15px;
	}
		
</style>
<div class="col-lg-12">
<div class="container box">
<div class="row">


<!--HEADER SECTION -->
<div class="col-lg-12">

			<button <?php echo $btn ?> onclick="loadModule('templates/introView')">
				<span class="<?php echo icon('list-alt')?>"></span> <br/>
				<span class="hidden-xs">Templates</span>
			</button>

			<button <?php echo $btn ?> onclick="loadModule('templates/addView')">
				<span class="<?php echo icon('plus')?>"></span> <br/>
				<span class="hidden-xs">Nuevo template</span>
			</button>
</div>


<div id='modContainer'>
	<?php $this->load->view("intro", $data) ?>
</div>

<div class='col-lg-4'>
<div id='consola'>
</div>
</div>

</div>
</div>
</div>


