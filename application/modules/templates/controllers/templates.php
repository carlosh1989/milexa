<?php
session_start();

class Templates extends MX_Controller
{


function index()
{
	$data['hiddenMenu'] = true;
	$data['templates'] = $this->db->get("templates");
	
	$this->load->view('template/header',$data);
	$this->load->view("template/topMenu");
	$this->load->view('app',$data);
	$this->load->view('template/footer',$data);
}


function introView()
{		$data['templates'] = $this->db->get("templates");
		$this->load->view('intro',$data);
}


function addView()
{
		$this->load->view("add");
}


function updateView($IdTemplate)
{		

		$data['template'] = $this->db->query("SELECT * FROM templates WHERE IdTemplate = $IdTemplate ")->row();
		$data['features'] = $this->db->query("SELECT * FROM templateFeatures WHERE IdTemplate = $IdTemplate ");
		$data['treeIn'] = $this->templateTreeIn($IdTemplate); // Load tree view where by this template form 
		
		$this->load->view("update",$data);
}


function templateTreeIn($IdTemplate,$IdCargo)
{
	
		if ($IdTemplate && !$IdCargo)
		{
		
		
		$tempCargos = $this->db->query("SELECT IdCargo FROM templates_cargos WHERE IdTemplate = $IdTemplate "); // >> Sanear !!
		
		foreach ($tempCargos->result_array() as $c)
		{
			$cargosInTemplate[] = $c['IdCargo'];
		}
		
		$cargosInTemplate= array();
		foreach ($tempCargos->result_array() as $c)
		{
			$cargosInTemplate[] = $c['IdCargo'];
		}
		
			// print_r($cargosInTemplate);
			$data['byIn'] = $cargosInTemplate;
		
		$this->load->library('lista2');
		$cargos = $this->load->model('estructura/cargos_model');
		
		// >> Tree logic
		$data['resultado'] = $this->lista2->get($cargos->getAll());
		$data['callsArray'] = array('selectNodeElement'=>'setTemplateIn');
		$data['callTo'] = 'setTemplateIn'; // Function javascript onclick for this tree module
	 	
	 	return $teeInList = $this->load->view("estructura/treeIn",$data,true);	
			
		}
		elseif($IdTemplate && $IdCargo)
		{
		
		$tempCargos = $this->db->query("SELECT IdCargo FROM templates_cargos WHERE IdTemplate = $IdTemplate "); // >> Sanear !!
		
		foreach ($tempCargos->result_array() as $c)
		{
			$cargosInTemplate[] = $c['IdCargo'];
		}
		
			if (in_array($IdCargo,$cargosInTemplate))
			{
				$this->db->query("delete FROM templates_cargos WHERE IdTemplate = $IdTemplate AND IdCargo = $IdCargo");
			}
			else
			{	
				$data['IdTemplate'] = $IdTemplate; $data['IdCargo'] = $IdCargo;
				$this->db->insert("templates_cargos",$data);
			}
		
		$tempCargos = $this->db->query("SELECT IdCargo FROM templates_cargos WHERE IdTemplate = $IdTemplate "); // >> Sanear !!
		
		$cargosInTemplate= array();
		foreach ($tempCargos->result_array() as $c)
		{
			$cargosInTemplate[] = $c['IdCargo'];
		}
		
			// print_r($cargosInTemplate);
			$data['byIn'] = $cargosInTemplate;
		
		$this->load->library('lista2');
		$cargos = $this->load->model('estructura/cargos_model');
		
		/* >> Tree logic */
		$data['resultado'] = $this->lista2->get($cargos->getAll());
		$data['callsArray'] = array('selectNodeElement'=>'setTemplateIn');
		$data['callTo'] = 'setTemplateIn'; // Function javascript onclick for this tree module
	 	
	 	echo $teeInList = $this->load->view("estructura/treeIn",$data,true);	
			
		
		}

		
	 	
	 	
	 	
}




function add()
{
	
	$post 		= $this->input->post();
	$template['NombreTemplate'] = $post['NombreTemplate'];
	
	if ($this->db->insert( "templates" , $template ))
	{
		$IdTemplate = $this->db->insert_id();

		foreach ($post['feature'] as $f)
		{	
		if ($f)
		{
				$tf['IdTemplate'] = $IdTemplate;
				$tf['NombreFeature'] = $f;
				$this->db->insert( "templateFeatures" , $tf );
			}

		}
		
		$_SESSION['error'] = array(
							'type'=> 'success',
							'msg' => "<b>Felicidades :)</b><br> Se ha registrado el template satisfactoriamente"
							);
		
		$data['ajax'] = true;
		
		$response = $this->load->view('error',$data,true);
		echo $response;
	}
	

}

function update($IdTemplate)
{
	$updateInputs = $this->input->post('update');
	$templateName = $this->input->post('NombreTemplate');
	$addFeatures = $this->input->post('feature');
	
	
	$this->db->where('IdTemplate',$IdTemplate)->update('templates',array("NombreTemplate"=> $templateName));
	
	
	foreach($addFeatures as $key => $value)
	{	
		if ($value)
		{
			$this->db->insert('templateFeatures',array("NombreFeature"=> $value,'IdTemplate'=>$IdTemplate));
		}
		else
		{
			$this->db->where('idtemplateFeatures',$key)->delete('templateFeatures');
		}

	}
	
	
	
	foreach($updateInputs as $key => $value)
	{	
	
	if ($value)
	{

		$this->db->where('idtemplateFeatures',$key)->update('templateFeatures',array("NombreFeature"=> $value));
	}
	else
		{
			$this->db->where('idtemplateFeatures',$key)->delete('templateFeatures');
		}
		
	}
	
	$_SESSION['error'] = array(
							'type'=> 'success',
							'msg' => "<b>Felicidades :)</b><br> Se ha actualizado el template satisfactoriamente"
							);
		
		$data['ajax'] = true;
		
		$response = $this->load->view('error',$data,true);
		echo $response;


}


function templateList($IdCargo)
{
	$data['result'] = $this->db->query("
	SELECT * FROM templates_cargos 
	JOIN templates ON templates.IdTemplate = templates_cargos.IdTemplate
	WHERE templates_cargos.IdCargo = '$IdCargo'
	");
	
	$this->load->view("templateList",$data);

}

function displayFormat($IdTemplate)
{
	$data['result'] = $this->db->query("SELECT * FROM templateFeatures WHERE IdTemplate = $IdTemplate"); // Limpiar entrada !!!
	$this->load->view("templateFeatureList" , $data );
}






}
###
?>
