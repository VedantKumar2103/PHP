
<?php
$pattern="/\s/";
$replacement="-";
$text= "Earth revolves around\nthe\tsun";
echo preg_replace($pattern,$replacement,$text);
echo"<br>";
echo str_replace(" ","-",$text);
?>
