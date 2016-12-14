
			<?php foreach($result->result() as $r): ?>
			<button class="btn btn-success btn-lg" type='button'
			onclick="setTemplate(<?php echo $r->IdTemplate ?>)">
			<?php echo $r->NombreTemplate ?></button> <br><br>
			
			<?php endforeach ?>

