<?php 

	class Despachadores_model extends CI_Model
	{


		/* Seleccionar a todos los despachadores */
		function getAllDespachadores()
		{
			return $this->db->query("SELECT * FROM despachadores as d
				JOIN personas as p ON p.Cedula = d.Cedula");
		}



		/* Verificar si existe el despachador */
		function existDespachador($Cedula)
		{
			$cedulaResult = $this->db->query(
				"SELECT * FROM despachadores 
					WHERE Cedula = $Cedula")
			->row()
			->Cedula;
			
			return ($cedulaResult) ? true : false;

		}



		/* Verificar si existe la persona */
		function existPersona($Cedula)
		{		
				$cedulaResult = $this->db->query(
					"SELECT * FROM personas 
					WHERE Cedula = $Cedula")
				->row()
				->Cedula;
				
				return ($cedulaResult) ? true : false;
		}



	/* Registrar un nuevo despachador*/
	function registerDespachador($Cedula)
	{
		if ($this->existPersona($Cedula))
		{
			if (!$this->existDespachador($Cedula))
			{	
				$this->db->insert('despachadores', array("Cedula" => $Cedula ));
				return true; // El despachador se registro con exito
			}
			else
			{
						return false; // El despachador ya esta registrado
			}
		}
		else
		{		
				return false; // La cedula insertada no existe
		}

	}

	function enable($Cedula)
	{
		if ($this->existPersona($Cedula))
		{
			if ($this->existDespachador($Cedula))
			{	
				$data = array("Status" => 1);
				$this->db->where('Cedula',$Cedula)->update('despachadores',$data);
				return true; // El despachador se registro con exito
			}
			else
			{
						return false; // El despachador no existe
			}
		}
		else
		{		
				return false; // La cedula insertada no existe
		}
	}

	function dissable($Cedula)
	{
		if ($this->existPersona($Cedula))
		{
			if ($this->existDespachador($Cedula))
			{	
				$data = array("Status" => 0);
				$this->db->where('Cedula',$Cedula)->update('despachadores',$data);
				return true; // El despachador se actualizo con exito
			}
			else
			{
						return false; // El despachador no existe
			}
		}
		else
		{		
				return false; // La cedula insertada no existe
		}

	}



	}




?>