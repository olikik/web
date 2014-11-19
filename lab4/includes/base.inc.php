<?php

    function create_table_structure($step)
    {
        $first_line = '';
        if ($step == '' or $step == 0)
        {
            $step = 10;
        }
        for ($i = 0; $i <= 60; $i += $step)
        {
            $first_line .= ('<th class="arguments">' . $i . '&#8242; </th>');
        }
        return $first_line;
    }

?>