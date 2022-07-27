<?php
function hello($fname="fIRST", $lname="Last"){
    echo "This is $fname $lname";
}
hello("Vedant","Kumar<br>");
hello(""); //Since you've passed no arguments, default value will be printed from the parameters.
echo "<br>";
hello("Vedant");
echo "<hr>";
?>
