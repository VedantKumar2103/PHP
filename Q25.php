<?php
echo "<b>Search string to have a-z and A-Z<b><br/> ";
echo "<b>By using regex and preg_match<br/>";
$regex='/^[a-zA-Z ]*$/';
$nameString='Shahrukh Khan';
if(preg_match($regex,$nameString)){
    echo("Name string matching with"." regular expression");
}
else{
    echo("Only letters and white space"." allowed in name string");
}
?>
