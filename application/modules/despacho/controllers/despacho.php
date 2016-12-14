<?php 
session_start();
class Despacho extends MX_Controller
{
	
	function tiempo(){

		$this->load->helper('date');
		

		if (compare_date('2016-12-01' ,'2016-12-02','<=' , '-'))
		{
		
			echo "1 es menor o igual que 2";
		}
			


		/*echo $date_1 = strtotime('2016-12-01');
		echo "<br>";
		echo $date_2 = strtotime('2016-12-03');
		
		echo "<br> -----------";
		echo "<br>";
		echo $date_1 - $date_2;

		
		echo "<br> ########## <br>";

		echo $date_1 = strtotime('2016-12-02');
		echo "<br>";
		echo $date_2 = strtotime('2016-12-01');
		
		echo "<br> -----------";
		echo "<br>";
		echo $date_1 - $date_2;
		*/


	}

	function index()
	{	
		if (!$_SESSION['login'])
		{
			header( "Location:".base_url("micuenta/login") );
			exit();
		}

		$this->load->model("despacho_model");
		$this->load->model("jornadas/jornadas_model");
		
		if ($this->jornadas_model->getAbierta()->row()->IdJornada) {
			$data['jornadaList'] = $this->despacho_model->getAllJornada(
				$this->jornadas_model->getAbierta()->row()->IdJornada
				);
			
		}
		

		
  		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();

  		$this->load->view("template/header",$data);
		$this->load->view("app",$data);
		$this->load->view("template/footer");
	}



	function closeView()
	{	if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->view('appClose',$data);
	}



	function listView()
	{	if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model('despacho_model');
		$this->load->model("jornadas/jornadas_model");



		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
		if ($this->jornadas_model->getAbierta()->row()) {
			
		$data['jornadaList'] = $this->despacho_model->getAllJornada($this->despacho_model->getOpen()->row()->IdJornada);
		}
		
		$this->load->view('appList',$data);
	}



	function updateView($idJornada)
	{if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model('despacho_model');
		$data['jornada'] = $this->despacho_model->getJornada($idJornada);
		$this->load->view('appUpdate',$data);
	}

	
	
	function addView()
	{	
if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model("jornadas/jornadas_model");
		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
		$this->load->view('appAdd',$data);
	}



	function despachar()
	{
if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model('despacho_model');

		$dataJornada = array(
				'per_Cedula' => $_POST['Cedula'],
				'desp_Cedula' => '20409949' // Sesion del despachador
			);
		
		$this->despacho_model->despachar($dataJornada);

		header('Location:'.base_url("despacho"));
	}



	function historyView()
	{if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model('jornadas/jornadas_model');
		$data['jornadaList'] = $this->jornadas_model->getAllJornada();
		$this->load->view('appHistory',$data);
	}

	function getHistory($IdJornada=false)
	{if (!$_SESSION['login'])
		{
			header("Location:".base_url("micuenta/login"));
			exit();
		}
		$this->load->model('despacho_model');
		$this->load->model("jornadas/jornadas_model");

		$data['IdJornada'] = $IdJornada;

		$data['jornadaAbierta'] = $this->jornadas_model->getAbierta()->row();
		$data['jornadaList'] = $this->despacho_model->getAllJornada($IdJornada);
		
		$this->load->view('appList',$data);
	}

	
}
 ?>