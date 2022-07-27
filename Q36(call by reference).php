<?php
function wow(&$a){
    $a="Hey";
}
$str="Hello";
echo $str;
wow($str);
echo $str;
?>
