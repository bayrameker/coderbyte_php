<?php

/*
 * Using the PHP language, have the function ArrayAddition(arr) take the array of numbers stored in arr 
 * and return the string true if any combination of numbers in the array can be added up to equal the largest number 
 * in the array, otherwise return the string false. 
 * 
 * For example: if arr contains [4, 6, 23, 10, 1, 3] the output should return true because 4 + 6 + 10 + 3 = 23. 
 * The array will not be empty, will not contain all the same elements, and may contain negative numbers. 
 * Input = 5,7,16,1,2 Output = "false"
 * Input = 3,5,-1,8,12 Output = "true"
 */

function ArrayAddition($arr) {
    
    $max = max($arr);
    $key = array_search($max, $arr);
    unset($arr[$key]);
    $sums = calculations($arr);
    if (in_array($max, $sums))
        return "true";
    return "false";
}

function calculations($arr) {
    $sums = array();
    if(count($arr) >= 1)
    for ($i = 0; $i < count($arr); $i++) {
        if(count($arr) >= 2)
        for ($j = $i + 1; $j < count($arr); $j++) {
            if(count($arr) >= 3)
            $sums[] = $arr[$i] + $arr[$j];
            if(count($arr) >= 4)
            for ($k = $j + 1; $k < count($arr); $k++) {
                $sums[] = $arr[$i] + $arr[$j] + $arr[$k];
                if(count($arr) >= 5)
                for ($l = $k + 1; $l < count($arr); $l++) {
                    $sums[] = $arr[$i] + $arr[$j] + $arr[$k] + $arr[$l];
                    if(count($arr) >= 6)
                    for ($m = $l + 1; $m < count($arr); $m++) {
                        $sums[] = $arr[$i] + $arr[$j] + $arr[$k] + $arr[$l] + $arr[$m];
                        if(count($arr) >= 7)
                        for ($n = $m + 1; $n < count($arr); $n++) {
                            $sums[] = $arr[$i] + $arr[$j] + $arr[$k] + $arr[$l] + $arr[$m] + $arr[$n];
                        }
                    }
                }
            }
        }
    }
    return $sums;
}

echo ArrayAddition(fgets(fopen('php://stdin', 'r')));
