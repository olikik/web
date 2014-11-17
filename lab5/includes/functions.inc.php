<?php

    function remove_extra_blank($str)
    {
        return trim(preg_replace('/\s{2,}/', ' ', $str));
    }
