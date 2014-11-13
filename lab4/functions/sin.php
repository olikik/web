<?php

    function sinus($step_corner, $step_minutes)
    {
        $corner = 0;
        $sinus = '';
        while ($corner <= 360 - $step_corner)
        {
            $sinus .= '<tr>';
            $sinus .= '<td>' . $corner . '</td>';

            for ($minutes = 0; $minutes <= 60 - $step_minutes; $minutes += $step_minutes)
            {
                $sinus .= '<td>';
                $sinus .= round(sin(deg2rad($corner + ($minutes / 60))), 4);
                $sinus .= '</td>';
            }
            $sinus .= '</tr>';
            $corner += $step_corner;
        }
        return $sinus;
    }

?>