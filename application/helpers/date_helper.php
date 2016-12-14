<?php 

	function compare_date($fecha1 = false, $fecha2 = false , $operator = false , $delimiter)
	{	
		if (!$delimiter)
		{
  			echo "<b>Need one date delimiter string to digest this dates </b><br>";
  			echo "1) Example delimiter: compare_date( date1, date2, '==', '/' ) <br>";
  			echo "2) Example delimiter: compare_date( date1, date2, '==', '-' ) <br>";
  			echo "<br>";
  			exit();
		}

			$campos_1 		= 	explode($delimiter,$fecha1);
	  	$campos_2 		= 	explode($delimiter, $fecha2);
	  	
	  	$fecha1_seg 	= 	mktime(0, 0, 0, $campos_1[1], $campos_1[0], $campos_1[2]);
  		$fecha2_seg 	= 	mktime(0, 0, 0, $campos_2[1], $campos_2[0], $campos_2[2]);

  		switch ($operator) {
  			
  			case '==':
  			echo "$fecha1_seg / $fecha2_seg";
  				return ($fecha1_seg == $fecha2_seg) ? true : false;
  			break;

  			case '<':
  				return ($fecha1_seg < $fecha2_seg) ? true : false;
  			break;

  			case '>':
  				return ($fecha1_seg > $fecha2_seg) ? true : false;
  			break;

  			case '<=':
  				return ($fecha1_seg <= $fecha2_seg) ? true : false;
  			break;
  			
  			case '>=':
  				return ($fecha1_seg >= $fecha2_seg) ? true : false;
  			break;

  			default:
  				echo "Need one comparation operator to compare this dates: compare_date(date1,date2,'==') <br>";
  				echo "Produce: date1 == date2 <br>";
  				echo "Valid operators:<br>";
  				echo "Example: == <br>";
  				echo "Example: < <br>";
  				echo "Example: > <br>";
  				echo "Example: <= <br>";
  				echo "Example: >= <br>";
  				exit();
  			break;
  		}


  	

	}


?>