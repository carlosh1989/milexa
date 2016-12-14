<?php

session_start();

class Micuenta extends MX_Controller
{
	
	function validation(){
	
		if (!$_SESSION['login'] && !$_SESSION['loginKey'] && !$_SESSION['Cedula'])
		{
			$_SESSION['error'] = array(
						'type'=> 'warning',
						'msg' => '<b>Ups :(</b><br> No has iniciado sesion'
						);

			header("Location:".base_url('micuenta/login'));
			exit();
		}
	}
	

	
	function index()
	{
		
		$this->validation();
		$this->adsManager();
		
	}
	

	function login()
	{
		$data['hiddenMenu'] = true;
		
		$post = $this->input->post();
		
		if ($post)
		{
			if ($post['Cedula'] && $post['password'])
				{
					#### Limpiar entrada !!!
					$get = $this->db->query("
					SELECT * FROM personas 
					WHERE 
					Cedula='$post[Cedula]' 
					AND 
					Password='$post[password]'");
					
					if (!$get->num_rows())
					{
						
						$_SESSION['error'] = array(
						'type'=> 'danger',
						'msg' => '<b>Ups :(</b><br> Verifica los datos que nos proporcionaste, 
						no hemos encontrado un usuario con estos datos'
						);
						
					}
					else
					{
						$datos = $get->row();
						
						
						$_SESSION['login'] 		= 	true;
						$_SESSION['Cedula'] 	= 	$datos->Cedula;
						$_SESSION['admin'] 		= 	$datos->Admin;
						$_SESSION['Nombre']		= 	$datos->Nombre;
						$_SESSION['Apellido']	= 	$datos->Apellido;
						
						// Verificar si es despachador
						$_SESSION['despachador'] = $this->db->query("SELECT * FROM despachadores 
							WHERE Cedula = $datos->Cedula AND Status = 1")->row()->Cedula;

						$_SESSION['error'] = array(
						'type'=> 'success',
						'msg' => "Bienvenido $datos->Nombre $datos->Apellido, has iniciado sesion satisfactoriamente"
						);
						
							header("Location:".base_url('personas'));
							exit();
					
					}
					
					
				}
				else
				{
					$_SESSION['error'] = array(
					'type'=> 'danger',
					'msg' => '<b>Ups :(</b><br> Necesitamos el usuario y la contraseña, no debes dejar campos en blanco'
					);
				}
		}
		
		$this->load->view('template/header',$data);
		$this->load->view('login');
	
	}
	
	function goBack(){
			$data['hiddenMenu'] = true;
			$this->load->view('template/header',$data);
			$this->load->view('goBack');
	
	}
	
	
	function logout()
	{
		$this->validation();
		session_destroy();
		header("Location:".base_url("micuenta/goBack"));
	
	}

}
?>
