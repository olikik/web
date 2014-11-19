<?php
    function load_content($file)
    {
        include($file);
    }
    
    function check_sinus_paramter($parametr, $default)
    {
        $checked = '';
        if (isset($parametr))
        {
            !empty($parametr) ? $checked =  preg_replace('/[^0-9]/', '', $parametr) : $checked = $default; 
        }
        else
        {
            $checked =  $default;
        }
        return $checked;
    }