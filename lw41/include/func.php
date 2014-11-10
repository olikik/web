<?php
	
	function printSinTable($intervDeg, $intervMin)
	{
		$table = "<table>";
		$table .= getTableHead($intervMin);
		$table .= getSinTableBody($intervDeg, $intervMin);
		$table .= "</table>";
		echo $table;	
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
		for ($deg = 0; $deg <= 90; $deg += $intervDeg)
		{
		    $html .= "<tr>";
			$html .=  "<td>".$deg."</td>";
			for ($min = 0; $min <= 60; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min/60)), 4);
				$html .=  "<td>".$sin."</td>";
				if ($sin == 1)
				{
					break;
				}
			}
			$html .=  "</tr>";
		}
		return $html;
	}