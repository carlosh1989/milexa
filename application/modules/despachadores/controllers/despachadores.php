<?php 
session_start();
class Despachadores extends MX_Controller
{
	
	function index()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}


		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}

		$this->load->model("despachadores_model");
		$this->load->model('jornadas/jornadas_model');
		
		$data['listaDespachadores'] = $this->despachadores_model->getAllDespachadores();
		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();

  		$this->load->view("template/header",$data);
		$this->load->view("app",$data);
		$this->load->view("template/footer");
	}

	function introView() // Vista para agregar un despachador
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}

		$this->load->model("despachadores_model");
		$data['listaDespachadores'] = $this->despachadores_model->getAllDespachadores();
		$this->load->view("appList",$data);
	}


	function addView() // Vista para agregar un despachador
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}
		$this->load->view("appAddView",$data);
	}
	
	
	function add()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}

		$this->load->model("despachadores_model");
		
		$cedulaDespachador = $_POST['Cedula'];
		
		if ($this->despachadores_model->registerDespachador( $cedulaDespachador ))
		{
			
			$data['tipo'] = 'success';
			$data['error'] = 'Se ha agregado el nuevo despachador satisfactoriamente';
		}
		else
		{	
			$data['tipo'] = 'danger';
			$data['error'] = 'Ha ocurrido un error, verifique los datos por favor';	
		}
		

		$this->load->view("template/error",$data);
		
	}


	function actions($Cedula)
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}

		//$this->load->model("despachadores_model");
		$this->load->model("personas/personas_model");

		$data['profile'] = $this->personas_model->getProfile($Cedula);
		$this->load->view("appUpdate",$data);
	}


	function io($Cedula,$option)
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		
		if (!$_SESSION['admin'])
		{
			header("Location:".base_url());
			exit();
		}

		$this->load->model("despachadores_model");
		
		if ($option)
		{	
			$this->despachadores_model->enable($Cedula);
			$data['tipo'] = 'success';
			$data['error'] = 'Se ha habilitado el despachador satisfactoriamente';
		}	
		else
		{	
			$data['tipo'] = 'danger';
			$data['error'] = 'Se ha deshabilitado el despachador satisfactoriamente';
			$this->despachadores_model->dissable($Cedula);
		}


		$this->load->view("template/error",$data);
	}


}

 ?>
