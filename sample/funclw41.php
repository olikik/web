<?php
	function printSin($info)
	{
		$data = "<label>Name:</label>".
				"<strong>". $info['name']."</strong>"."<br>".
				"<label>Age:</label>".
				"<strong>". $info['age']."</strong>"."<br>";
		echo $data;		
				
	}