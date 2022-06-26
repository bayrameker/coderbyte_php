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
