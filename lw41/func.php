<?php
	/*function printSinTable1($intervDeg, $intervMin)
	{
		for ($min = 0; $min <= 60; $min += $intervMin * 60)
		{
			echo "<td>".$min."</td>";
		}
		echo  "</tr>";
		
		
		for ($deg = 0; $deg <= 90; $deg += $intervDeg)
		{
		    echo "<tr>";
			echo "<td>".$deg."</td>";
			for ($min = 0; $min <= 1; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min)), 4);
				echo "<td>".$sin."</td>";
				if ($sin == 1)
				{
					break;
				}
			}
			 echo "</tr>";
		}
		echo "</table>";
	}*/
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
		for ($min = 0; $min <= 60; $min += $intervMin * 60)
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
			for ($min = 0; $min <= 1; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min)), 4);
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