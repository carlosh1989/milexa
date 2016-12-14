<!DOCTYPE html>
<html>
<head>
<title>Upload Image using form</title>
	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>" >
	<link rel="stylesheet" href="<?php echo base_url('assets/Font-Awesome-master/css/font-awesome.css') ?>" >
</head>
<body>

<form action="" enctype="multipart/form-data" id="formulario" method="post">
	<input id="file" name="file" type="file" style="display:none">
</form>

<form>
  <input id="fileinput" type="file" style="display:none;"/>
</form>
<br>
<br>
<center>
	<button class="btn btn-primary btn-lg" id="falseinput"><span class="glyphicon glyphicon-camera"></span></button>
</center>

<script>
$(document).ready( function() {
  $('#falseinput').click(function(){
    $("#file").click();
  });
});
</script>

<script type="text/javascript">
	document.getElementById("file").onchange = function() {
    document.getElementById("formulario").submit();
};
</script>
</body>
</html>
