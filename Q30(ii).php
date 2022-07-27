<html>
<body>
<?php
echo "Return 5 elements and insert a value of <br/>"  ;
echo "blue to the new elements in the array: <br/>";
echo "if length of array in negative add value(blue) in starting <br/>";
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
?>
</body>
</html>
