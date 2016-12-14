<?php 
session_start();
class Personas extends MX_Controller
{
	
	function index()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

  		$this->load->view("template/header",$data);
		$this->load->view("dashboard");
		$this->load->view("app",$data);
		$this->load->view("template/footer");
	}


	function addView()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		if (!$_SESSION['admin'])
		{
			exit();
		}

		$this->load->view("appAdd",$data);
	}

	function listView()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model("personas_model");
		$data['listPersonas'] = $this->personas_model->getAllProfiles();
		$this->load->view("appList",$data);
	}

	
	function add()
	{
	if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model("personas_model");
		
		$dataPersona = array(
				'Cedula' 		=> 	$_POST['Cedula'],
				'Nombre' 		=> 	$_POST['Nombre'],
				'Apellido' 		=> 	$_POST['Apellido'],
				'Telefono' 		=> 	$_POST['Telefono'],
				'Correo' 		=> 	$_POST['Correo'],
				'TlfFijo' 		=> 	$_POST['TlfFijo'],
				'Direccion' 	=> 	$_POST['Direccion'],
				'Hijos' 		=> 	$_POST['Hijos']
			);

		if ( ($Cedula = $this->personas_model->registerPersona($dataPersona)) )
		{	
			$this->load->library("multi_upload");
			
			$this->multi_upload->saveIn 				= 'upload/profile'; // Patch to save files
			$this->multi_upload->inputName 				= 'foto'; 				// Name input
			$this->multi_upload->validExtensions 	= array('jpg','jpeg','png'); // Valid extensions
			$this->multi_upload->maxFileSize 			= 1000000; 			// File size in bytes
			$foto = $this->multi_upload->upload();

			$this->personas_model->photoToPersona($Cedula,$foto);

			$data['clase'] = 'success';
			$data['error'] = 'Se ha agregado el nuevo activista satisfactoriamente';
		}
		else
		{
			$data['clase'] = 'danger';
			$data['error'] = 'Ha ocurrido un error, verifique los datos por favor';	
		}
		
		header('Location:'.base_url("personas/error"));
		
	}

 
	function searchView() // Vista para buscar personas
	{
if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		if ($_POST['Cedula'])
		{
			$this->load->model('Personas_model');
			$data['profile'] = $this->Personas_model->getProfile($_POST['Cedula']);
			$this->load->view('appSearchResult',$data);
		}
		else
		{
			$this->load->view("appSearch",$data);	
		}
		
	}


	function profileView($Cedula) // Visualizar el perfil de una persona
	{if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$data['persona'] = $this->db->query("SELECT * FROM personas WHERE Cedula = $Cedula")->row();
		$this->load->view("appProfileView",$data);
	}
	

	function updateFicha()
	{if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->library("multi_upload");
		
		$this->multi_upload->saveIn 					= 'upload/profile'; // Patch to save files
		$this->multi_upload->inputName 				= 'foto'; 				// Name input
		$this->multi_upload->validExtensions 	= array('jpg','jpeg','png'); // Valid extensions
		$this->multi_upload->maxFileSize 			= 1000000; 			// File size in bytes
		$foto = $this->multi_upload->upload();

		$Cedula = $_POST['Cedula'];
		
		
		$dataPersona = array(
			'Nombre' 	=>	$_POST['Nombre'],
			'Apellido' 	=>	$_POST['Apellido'],
			'Correo' 	=> 	$_POST['Correo'],
			'Telefono' 	=>	$_POST['Telefono'],
			'TlfFijo' 	=>	$_POST['TlfFijo'],
			'Direccion' =>	$_POST['Direccion'],
			'Hijos' 	=>	$_POST['Hijos'],

		);


		if ($foto)
		{	
			$dataPersona['Foto'] = $foto;	
		}

			

			$this->db->where('Cedula',$Cedula);
			$this->db->update('personas',$dataPersona);

			header('Location:'.base_url("personas/error"));

	}

function error()
	{	if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
  		$this->load->view("template/header",$data);
		$data['tipo'] 	= 'success';
		$data['error'] 	= 'Se han actualizado los datos satisfactoriamente';
		$data['error'] 	.= '<hr>';
		$data['error'] 	.= "<a href='".base_url("personas")."' class='btn btn-default' >Continuar</a>";
		$this->load->view("template/error",$data);
		$this->load->view("template/footer");
	}


}

 ?>
