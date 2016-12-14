<?php 

class Personas_model extends CI_Model
{
	
	function getAllProfiles()
	{
		$result = $this->db->get('personas');
		return  $result;
	}


	function getProfile($Cedula)
	{
		$query = "SELECT * FROM personas WHERE Cedula = $Cedula ";
		return $this->db->query($query)->row();

	}

	function existPersona($Cedula)
	{
		$query = "SELECT * FROM personas WHERE Cedula = '$Cedula' ";
		$result = $this->db->query($query)->row()->Cedula;
		if ($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function registerPersona($dataPersona)
	{	
		if (!$this->existPersona($dataPersona['Cedula']))
		{
			$this->db->insert("personas",$dataPersona);
			return $dataPersona['Cedula'];	
		}
		else
		{
			return false;
		}
		
		
	}

	function photoToPersona($Cedula,$Foto)
	{
		if ($this->existPersona($Cedula))
		{	
			$data = array( "Foto"=>$Foto );
			$this->db->where("Cedula",$Cedula)->update( "personas",$data );

		}
	}


}

?>