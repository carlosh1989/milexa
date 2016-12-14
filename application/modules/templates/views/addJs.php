<script>
		var multi = new multiInput();
		multi.inputsContainer = "featuresContainer"; // Where put inputs
		multi.inputs = []; // Array inputs
		multi.renderInputs();
		multi.del(0);
		multi.renderInputs();
		//multi.getFrom = "NombreCaracteristica"; // Get Text from
		multi.trigger('btnAddFeature'); // set onclic event and enjoy	
</script>
