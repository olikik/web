<?php

    function calcPasswordStrength($password)
    {
        $passwordStrength = '0';
        $password = trim(preg_replace("/^[^a-zA-Z0-9\s]*$/", "", $password));
        $passwordLength = strlen($password);
        $passwordStrength .= calcPasswordLength($password);
        $passwordStrength .= calcPasswordDigit($password);
        $passwordStrength .= calcPasswordUppercase($password);
        $passwordStrength .= calcPasswordLowercase($password);
        $passwordStrength .= calcPasswordCharOnly($password);
        $passwordStrength .= calcPasswordDigitOnly($password);
        $passwordStrength .= calcPasswordRepeat($password);
        
        return $passwordStrength;
    }

    function calcPasswordLength($password)
    {
        $passwordStrength .= 4 * strlen($password);
        return $passwordStrength;
    }
    
    function calcPasswordDigit($password)
    {
        $strength = strlen(preg_replace("[0-9]", "", $password));
        $passwordStrength .= 4 * $strength;
        return $passwordStrength;
    }

    function calcPasswordUppercase($password)
    {
        $strength = strlen(preg_replace("[A-Z]", "", $password));
        $passwordStrength .= (($passwordLength - $strength) * 2);
        return $passwordStrength;
    }

    function calcPasswordLowercase($password)
    {
        $strength = strlen(preg_replace("[a-z]", "", $password));
        $passwordStrength .= (($passwordLength - $strength) * 2);
        return $passwordStrength;
    }

    function calcPasswordCharOnly($password)
    {
        $strength = 0;
        if ($passwordLength = strlen(preg_replace("[a-zA-Z]", "", $password)))
            $strength =  -$passwordLength;
        $passwordStrength .= $strength;
        return $passwordStrength;
    }

    function calcPasswordDigitOnly($password)
    {
        $strength = 0;
        if ($passwordLength = strlen(preg_replace("[0-9]", "", $password)))
            $strength =  -$passwordLength;
        $passwordStrength .= $strength;
        return $passwordStrength;
    }

    function calcPasswordRepeat($password)
    {
        $strength = 0;
        foreach (count_chars($password, 1) as $i => $val) {
             chr($i);
             $strength -= $val;
        }
        return $passwordStrength;
    }

    $password = calcPasswordStrength('AbCd123');
    echo $password;