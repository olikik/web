<?php
    function RemoveSpace($text)   
    { 
        $text = preg_replace('/ {2,}/',' ',$text); 
        $text = trim($text); 
        return $text;
}
    function RemoveExtraBlanks()
    {
		if (isset($_GET['text']) and($_GET['text']) != '')
		{
		    $text = $_GET['text'];  
		    $text_remove_spase = RemoveSpace($text);
            print($text_remove_spase);  
		}
    }