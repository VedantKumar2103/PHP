<?php
echo "<b> Search string to have Match pattern [0-9]+ <b><br/> ";
echo "<b> function ereg_replace(replace string)<b> <br/>";
echo "<b> By using regex and ereg_replace <br/>";
$regex="([0-9]+)";
$original="Completed graduation in 2004";
$replacewith="2002";
$original=preg_replace($regex,$replacewith,$original);
echo $original;
?>
