<?php
    $body .= "<h2>Таблица синусов с интервалом градусов {$step_corner} и интервалом минут {$step_minute}</h2>";
    $table = '<table class="task12">';
    $table .= '<tr>' . '<th></th>';
    $table .= create_table_structure($step_minute);
    $table .= '</tr>';
    $table .= sinus($step_corner, $step_minute);
    $table .= '</table>';
    $body .= $table;
?>