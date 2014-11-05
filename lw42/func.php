<?php
	function printSinTable($intervDeg, $intervMin)
	{
		echo 
		"<style type = 'text/css'>
		table
		{
			border-collapse: collapse;
		}
		td
		{
			border: 1px solid;
			padding: 5px;
		}
		</style>";
	    echo "<table>
		        <tr>
				  <td>sin</td>";
		for ($min = 0; $min <= 60; $min += $intervMin * 60)
		{
			echo "<td>".$min."</td>";
		}
		echo  "</tr>";
		for ($deg = 0; $deg <= 90; $deg += $intervDeg)
		{
		    echo "<tr>";
			echo "<td>".$deg."</td>";
			for ($min = 0; $min <= 1.001; $min += $intervMin)
			{
			    $sin = round(sin(deg2rad($deg + $min)), 4);
				echo "<td>".$sin."</td>";
			}
			 echo "</tr>";
		}
		echo "</table>";
	}