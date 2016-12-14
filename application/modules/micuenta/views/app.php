<?php $this->load->view("template/topMenu") ?>

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
        <div class="col-lg-12">
        
						<button class="btn btn-default" onclick="loadModule('micuenta/appIntroView')">
						<span class="<?php icon('home') ?>"></span> <br/>
							Dashboard
						</button>
						
						<button class="btn btn-default" onclick="loadModule('micuenta/appAddView')">
						<span class="glyphicon glyphicon-plus"></span> <br/>
							Nuevo anuncio
						</button>
      


	<div id='modContainer'>
		<?php $this->load->view("appIntro", $data) ?>
	</div>


<input type="hidden" id="tempCedula" value="">




<div class="col-lg-5" id="consola"></div>

		<div class="col-lg-12">
		</div>
	</div>
</div>

<?php $this->load->view("scriptJs") ?>
