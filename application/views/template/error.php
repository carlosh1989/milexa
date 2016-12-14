<?php 
switch ($tipo) {
	case 'danger':
		$clase = 'alert alert-danger';	
	break;
	case 'success':
		$clase = 'alert alert-success';	
	break;
	case 'warning':
		$clase = 'alert alert-warning';	
	break;
	default:
		$clase = 'alert alert-success';	
	break;
}
?>
<div class="col-lg-12">
	<h3>Mensaje del sistema</h3>
	<div class="<?php echo $clase ?>">
		<?php echo $error ?>
	</div>
</div>