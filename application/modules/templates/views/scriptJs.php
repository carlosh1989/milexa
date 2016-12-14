<script type="text/javascript">

/*preview += '<span class="item-feature"><button onclick="removeFeature('+f+')" class="btn btn-danger btn-xs" type="button">x</button> <i class="glyphicon glyphicon-ok"></i> '+ features[f].nombre +': Example value </span>';*/
/*preview += '<span class="item-feature"><button onclick="removeFeature('+f+')" class="btn btn-danger btn-xs" type="button">x</button> <i class="glyphicon glyphicon-ok"></i> '+ features[f].nombre +': Example value </span>';*/






function validateFeature()
{

	if (document.getElementById("NombreCaracteristica").value =='')
	{
		btnAddFeature.disabled = true;
		return false;
		
	}else
	{
		btnAddFeature.disabled = false;
		return true;
	
	}

}


</script>
