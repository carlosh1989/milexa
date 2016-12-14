<?php

	class Jornadas_model extends CI_Model
	{
		
		function getAllJornada()
		{
			$result = $this->db->query("SELECT * FROM jornadas ORDER BY Fecha DESC");
			return $result;
		}

		function getOpen()
		{
			$result = $this->db->query("SELECT * FROM jornadas WHERE FechaCierre IS NULL ")->num_rows();
			return $result;
		}

		function getAbierta()
		{
			$result = $this->db->query("SELECT * FROM jornadas WHERE FechaCierre IS NULL ");
			return $result;
		}

		function getJornada($idJornada)
		{
			$this->db->where('IdJornada',$idJornada);
			$result = $this->db->get("jornadas");
			return $result;
		}


		function insertJornada($dataJornada)
		{
			if(!$this->getAllJornada()->num_rows())
			{
				return $this->db->insert("jornadas", $dataJornada);
			}
			else
			{	
				echo $this->getOpen();
				if (!$this->getOpen())
				{
					return $this->db->insert("jornadas", $dataJornada);		
				}
				else
				{
					return false;
				}
			}
		}

		function closeJornada($data)
		{	
			$this->db->query("UPDATE jornadas 
				SET FechaCierre = '$data[FechaCierre]' 
				WHERE
				FechaCierre IS NULL
			");
		}


	}



?>