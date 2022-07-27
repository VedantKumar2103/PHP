<?php
echo "local variable <br/>";
$x = 5;
function hello(){
    $x =0;
    echo $x."<br/>";
}
hello();
echo $x
?>
