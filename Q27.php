<?php
//  // change because it is global variable;
echo "Global variable <br/>";
$x = 5;
function hello1(){
   global $x;
     echo $x++."<br>";
}
hello1();
echo $x;
?>
