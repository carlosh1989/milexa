<?php 
session_start();
class Jornadas extends MX_Controller
{
	
	function index()
	{	

		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model("jornadas_model");
		$data['jornadaList'] = $this->jornadas_model->getAllJornada();
		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
  		
  		$this->load->view("template/header",$data);
		$this->load->view("app",$data);
		$this->load->view("template/footer");
	}

	function closeView()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model('jornadas_model');
		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
		
		$this->load->view('appClose',$data);
	}


	function listView()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model('jornadas_model');
		$data['jornadaList'] = $this->jornadas_model->getAllJornada();
		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
		$this->load->view('appList',$data);
	}


	function updateView($idJornada)
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model('jornadas_model');
		$data['jornada'] = $this->jornadas_model->getJornada($idJornada);
		$this->load->view('appUpdate',$data);
	}

	
	function addView()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model("jornadas_model");
		$this->load->view('appAdd',$data);
	}



	function addJornada()
	{
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model('jornadas_model');
		$dataJornada = array(
				'Fecha' => $_POST['Fecha']
			);

		$this->jornadas_model->insertJornada($dataJornada);
		header('Location:'.base_url("jornadas"));
	}

	function closeJornada()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}

		$this->load->model('jornadas_model');

		$dataJornada = array(
				'FechaCierre' => $_POST['FechaCierre']
			);

		$this->jornadas_model->closeJornada($dataJornada);
		header('Location:'.base_url("jornadas/error"));
	}



function error()
	{	
		if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		
  		$this->load->view("template/header",$data);
		$data['tipo'] 	= 'success';
		$data['error'] 	= 'Se han cerrado la jornada satisfactoriamente';
		$data['error'] 	.= '<hr>';
		$data['error'] 	.= "<a href='".base_url("jornadas")."' class='btn btn-default' >Continuar</a>";
		$this->load->view("template/error",$data);
		$this->load->view("template/footer");
	}


	function fechas()
	{
		$this->load->helper("date_helper");

		$fecha_cierre = '2012-12-1';
		$fecha_activa = '2012-12-10';
		
		if ( compare_date($fecha_cierre,$fecha_activa,'<','-') )
		{
			echo "La fecha de cierre es menor a la fecha activa";
		}

	}


	/*function date_is_mayor($fecha1,$fecha2)
	{

		$campos = explode("-",$fecha1);
	  $fecha1_seg = mktime(0, 0, 0, $campos[1], $campos[0], $campos[2]);

	  $campos = explode("-", $fecha2);
  	$fecha2_seg = mktime(0, 0, 0, $campos[1], $campos[0], $campos[2]);

  	if ($fecha1_seg < $fecha2_seg)
		{ 
			echo "La fecha ".$fecha1." es mas antigua que ".$fecha2."<br>"; 
		}

	}*/








}
 ?>