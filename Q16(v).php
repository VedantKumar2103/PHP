<?php
$pattern="/^J/";
$names=array("John Carter","Clark Kent","John Rambo");
$matches=preg_grep($pattern,$names);
foreach($matches as $match)
    echo $match . "<br>";
?>
