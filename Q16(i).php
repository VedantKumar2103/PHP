<?php
$regex="/<b>(.*)<\/b>/U";
$inputString="Name: <b>John</b>Position:<b>Developer</b>";
preg_match_all($regex,$inputString,$output);
echo $output[0][0]."<br>".$output[0][1]."\n";
?>
