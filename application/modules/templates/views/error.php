
<?php if ($_SESSION['error']):?>
<div class='alert alert-<?php echo $_SESSION['error']['type'] ?>'>
 <?php echo $_SESSION['error']['msg'] ?>
 
</div>
<?php unset($_SESSION['error']) ?>
<?php endif ?>
