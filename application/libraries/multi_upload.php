<?php 

	/**
	*  Multi upload file tool
	*/

	class Multi_upload
	{
		
		
		var $saveIn 				= 'multiupload/'; // Patch to save files
		var $inputName 				= false; 				// Name input
		var $files 						= array(); 			// Global $_FILES variable
		var $validExtensions 	= array('jpg','jpeg','png'); // Valid extensions
		var $maxFileSize 			= 1000000; 			// File size in bytes
		
function upload()
{	


	

	if (is_array($_FILES[$this->inputName]['name']))
	{	
		
		foreach ($_FILES[$this->inputName]['name'] as $key => $value)
		{
			$fileName = $_FILES[$this->inputName]["name"][$key];
			$fileType = $_FILES[$this->inputName]["type"][$key];
			$tempName = $_FILES[$this->inputName]["tmp_name"][$key];
			$fileSize = $_FILES[$this->inputName]["size"][$key];
			
			$file_extension = $this->getPostFileExtension($fileName);
			
			// Upload rules validation
			if ($this->validateMimeType($fileType) && $fileSize < $this->maxFileSize && $this->validateExtension($file_extension))
			{	
				
				if (move_uploaded_file($tempName, "$this->saveIn/$fileName"))
				{
					// Files uploaded
					$files['fullPath'][] = $this->saveIn . "/" . $fileName;
					$files['fileName'][] = $fileName;
				}
				else
				{
					// File no uploaded
					$files['noUploaded'][] = array(
							'fileName' => $fileName,
							'Verifique el espacio o los permisos de la carpeta'
							);
				}
			}
			else

					$files['noUploaded'][] = array(
							'fileName' => $fileName,
							'El archivo no cumple con los parametros de subida'
							);
			}


		}
	else
	{		
			
			$fileName = $_FILES[$this->inputName]["name"];
			$fileType = $_FILES[$this->inputName]["type"];
			$tempName = $_FILES[$this->inputName]["tmp_name"];
			$fileSize = $_FILES[$this->inputName]["size"];
			
			$file_extension = $this->getPostFileExtension($fileName);
			
			// Upload rules validation
			if ($this->validateMimeType($fileType) && $fileSize < $this->maxFileSize && $this->validateExtension($file_extension))
			{
				
				if (move_uploaded_file($tempName, "$this->saveIn/$fileName"))
				{
					return $fileName; // Single file uploaded
				}
				else
				{
					return false; // File no uploaded
				}
			}
			else
			{
					return false; // Validation error
			}
	}

	return $files;
	

}

	function validateExtension($extension)
	{
		return in_array($extension, $this->validExtensions);
	}

	function validateMimeType($mimeType)
	{	
		$validMimeTypes = array('image/jpg','image/jpeg','image/png');
		return (in_array($mimeType,$validMimeTypes) ? true : false);
	}


	function getPostFileExtension($name)
	{	
		# Retorna la extencion del archivo enviado
		return end(explode(".", $name));
		
	}


}

?>