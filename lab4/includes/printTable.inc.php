<?php
    function print_table_of_sinus($step_corner, $step_minute, $even_class)
    {
        $table = '<table class="task12">';
        $table .= '<tr>' . '<th class="arguments"></th>';
        $table .= create_table_structure($step_minute);
        $table .= '</tr>';
        if (!isset($even_class) && !empty($even_class))
            $even_class = '';
        $table .= sinus($step_corner, $step_minute, $even_class);
        $table .= '</table>';
        return $table;
    }