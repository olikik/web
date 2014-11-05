<?php
	function printSinTable($intervDeg, $intervMin)
	{

	    echo "<table>
		        <tr class = 'info'>
				  <td>sin</td>";
		for ($min = 0; $min <= 60; $min += $intervMin * 60)
		{
			echo "<td>".$min."</td>";
		}
		echo  "</tr>";
		for ($deg = 0, $str = 1; $deg <= 90; $deg += $intervDeg, $str++)
		{
		    echo "<tr>";
			echo "<td class = 'info'>".$deg."</td>";
			for ($min = 0; $min <= 1.001; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min)), 4);
				if ($str%2)
				  echo "<td class = 'odd'>";
				else 
				  echo "<td>";
				echo $sin."</td>";
			}
			 echo "</tr>";
		}
		echo "</table>";
	}