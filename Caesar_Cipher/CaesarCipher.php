<?php

/*
 * Using the PHP language, have the function CaesarCipher(str,num) take the str parameter 
 * and perform a Caesar Cipher shift on it using the num parameter as the shifting number. 
 * A Caesar Cipher works by shifting each letter in the string N places down in the alphabet 
 * (in this case N will be num). Punctuation, spaces, and capitalization should remain intact. 
 * For example if the string is "Caesar Cipher" and num is 2 the output should be "Ecguct Ekrjgt".
 * Input = "Hello" & num = 4 Output = "Lipps"
 * Input = "abc" & num = 0 Output = "abc"
 */

function CaesarCipher($str, $num) {
    $upperCaseLetters = range('A', 'Z');
    $lowerCaseLetters = range('a', 'z');
    $str = str_split($str);
    $res = '';
    foreach ($str as $letter) {
        if (ctype_upper($letter)) {
            $letterNumber = array_search($letter, $upperCaseLetters);
            $shifted_letter = $letterNumber + $num;
            if ($shifted_letter > count($upperCaseLetters) -1)
                $shifted_letter -= count($upperCaseLetters) ;
            $res .= $upperCaseLetters[$shifted_letter];
        }
        elseif (ctype_lower($letter)) {
            $letterNumber = array_search($letter, $lowerCaseLetters);
            $shifted_letter = $letterNumber + $num;
            if ($shifted_letter > count($lowerCaseLetters) -1)
                $shifted_letter -= count($lowerCaseLetters) ;
            $res .= $lowerCaseLetters[$shifted_letter];
        }
        else {
            $res .= $letter;
        }
    }
    return $res;
}

function shift($string, $distance) {
    $distance = $distance % 26;
    $result = array();
    $characters = str_split($string);

    if ($distance < 0) {
        $distance += 26;
    }

    foreach ($characters as $idx => $char) {
        $result[$idx] = chr(97 + (ord($char) - 97 + $distance) % 26);
    }

    return join("", $result);
}

echo CaesarCipher(fgets(fopen('php://stdin', 'r')));
