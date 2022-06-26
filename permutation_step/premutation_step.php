Soru : 

"""
Have the function PermutationStep(num) take the num
parameter being passed and return the next number
greater than num using the same digits. For example:
if num is 123 return 132, if it's 12453 return 12534.
If a number has no greater permutations, return -1 (ie. 999). 
Input:11121
Output:11211
Input:41352
Output:41523
"""


<?php

$a = strr(999);
echo $a;

function strr($num){
  $str = strval($num);
  if(strlen($num) == 1){
    return -1;
  }
  
for($i = strlen($num)-2; $i >=-1 ; $i--){ 

		if(intval($str[$i]) < intval($str[$i+1]))

		{

		$temp = $str[$i+1];
		$str[$i+1] = $str[strlen($str)-1];
		$str[strlen($str)-1]=$str[$i];
		$str[$i] = $temp;
		
		return $str;
		}
		else{
		  return -1;
		}
}

}

?>
