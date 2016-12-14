<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" >
	<!--<link rel="stylesheet" href="<?php echo base_url('assets/Font-Awesome-master/css/font-awesome.css') ?>" >-->
	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>

	
<style>


.table tr td{
  font-size: 11px;
}




</style>

</head>
<body>

<div class="container-fluid">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/images/logo.jpg") ?>" width="35"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <form class="navbar-form navbar-left" role="search" id='incorpForm' 
	onsubmit='return sendForm({
			reset:false,
			action:"<?php echo base_url('personas/searchView') ?>",
			serialize:"incorpForm",
			"success":function(response)
			{
				document.getElementById("modContainer").innerHTML = response;
			}
		})'>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cedula" name="Cedula">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Bienvenido: <?php echo "$_SESSION[Nombre] $_SESSION[Apellido]" ?></a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="row">

<?php if(!$hiddenMenu):?>
<div class="col-lg-2 hidden-xs" id="menu-left" >
	<?php $this->load->view("template/menu"); ?>
</div>

<div class="col-lg-10" style='margin:0px;padding:0px'>
<?php endif?>

<?php if($hiddenMenu):?>
<div class="col-lg-12" style="margin:0px;padding:0px;border:none">
<?php endif?>


