<?php

    function create_table_structure($step)
    {
        $first_line = 0;
        if ($step == '' or $step == 0)
        {
            $step = 10;
        }
        for ($i = 0; $i <= 60 - $step; $i += $step)
        {
            $first_line .= ('<th>' . $i . '&#8242; </th>');
        }
        return $first_line;
    }

?>