<?php
$array1=array("10" =>"raghav ", "20"=>"ram", "30"=>" aakash ","50"=>"ravi") ;
$array2 = array("60"=>"ankita", "70"=>"antara") ;
echo "The returned array: \n";
print_r(array_splice($array1, 1, 4, $array2));
echo "\nThe original array is modified to: \n";
print_r($array1);
?>
