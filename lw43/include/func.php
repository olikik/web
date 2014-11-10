<?php
	function checkInt($num)
	{
		$mess = true;
		if(!preg_match("|^[\d]*$|", $num))
		{
			$mess = false;    
		} 
		return $mess;
	}
	
	function getParam($name, $default_value)
	{
		return isset($_GET[$name]) ? $_GET[$name] : $default_value;
	}
	
	function printSinTable($intervDeg, $intervMin)
	{
		if ((checkInt($intervDeg) == true) and (checkInt($intervMin) == true))
		{
			$table = "<table>";
			$table .= getTableHead($intervMin);
			$table .= getSinTableBody($intervDeg, $intervMin);
			$table .= "</table>";
			echo $table;
        }
		else
		{
			echo "<p class='err'>Введите целые положительные числа!</p>";
		}
	}
	
	function getTableHead($intervMin)
	{
		$html = "<tr>";
		$html .= "<td>Degree/Minutes</td>";
		for ($min = 0; $min <= 60; $min += $intervMin)
		{
			$html .= "<td>".$min."</td>";
		}
		$html .= "</tr>";
		return $html;
	}
	
	function getSinTableBody($intervDeg, $intervMin)
	{
		$html = "";
		for ($deg = 0, $i = 1; $deg <= 90; $deg += $intervDeg, $i++)
		{
		    $html .= "<tr>";
			$html .=  "<td>".$deg."</td>";
			for ($min = 0; $min <= 60; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min/60)), 4);
				if ($i%2)
					$html.= "<td class = 'odd'>";
				else 
				  $html.= "<td>";
				$html.= $sin."</td>";    
				if ($sin == 1)
				{
					break;
				}
			}
			$html .=  "</tr>";
		}
		return $html;
	}