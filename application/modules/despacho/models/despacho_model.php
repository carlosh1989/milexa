<?php

	class Despacho_model extends CI_Model
	{
		
		function getAllJornada($IdJornada)
		{

			
			$result = $this->db->query(
				"
					SELECT
					p.Cedula,
					p.Nombre,
					d.per_Cedula,
					d.IdJornada,
					j.Fecha
					FROM personas AS p
					LEFT JOIN despacho AS d ON d.per_Cedula = p.Cedula 
					AND d.IdJornada = $IdJornada
					LEFT JOIN jornadas AS j ON j.IdJornada = d.IdJornada
					
				"
				);
			return $result;
		}

		function getOpen()
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

		

		function closeJornada($data)
		{	
			$this->db->query("UPDATE jornadas 
				SET FechaCierre = '$data[FechaCierre]' 
				WHERE
				FechaCierre IS NULL
			");
		}

		

		function despachar($dataJornada)
		{	
			// Obtener el id de la jornada abierta
			$jornadaAbierta = $this->getOpen();
			$dataJornada['IdJornada'] = $jornadaAbierta->row()->IdJornada;
			
			// Preparar los datos para comprobar si ya se despacho a la persona en la jornada abierta
			$per_Cedula = $dataJornada['per_Cedula'];
			$IdJornada 	= $dataJornada['IdJornada'];
			
			if (!$this->vendido($per_Cedula,$IdJornada))
			{
				return $this->db->insert("despacho", $dataJornada);
			}
		}

		

		function vendido($per_Cedula,$IdJornada)
		{

			$result = $this->db->query(
				"SELECT * FROM despacho 
				WHERE 
				per_Cedula = $per_Cedula 
				AND 
				IdJornada = $IdJornada
				")->row();

			return $result->IdJornada;

		}


	}



?>