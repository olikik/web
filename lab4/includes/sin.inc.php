<?php

    function sinus($step_corner, $step_minutes, $even_class)
    {
        $corner = 0;
        $sinus = '';
        $i = 0;
        while ($corner <= 360 - $step_corner)
        {
            $sinus .= '<tr';
            if (!empty($even_class))
            {
                if(($i + 1) % 2)
                {
                    $sinus .= ' class="' . ($even_class) . '"';
                }
            } 
            $sinus .= ('>');
            $sinus .= '<td class="arguments">' . $corner . '</td>';

            for ($minutes = 0; $minutes <= 60; $minutes += $step_minutes)
            {
                $sinus .= '<td>';
                $sinus .= round(sin(deg2rad($corner + ($minutes / 60))), 4);
                $sinus .= '</td>';
            }
            $sinus .= '</tr>';
            $i++;
            $corner += $step_corner;
        }
        return $sinus;
    }
