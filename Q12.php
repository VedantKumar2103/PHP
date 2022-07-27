<html>
<body>
<?php
$marks=array("mohammad"=>array
("physics"=>35,
 "maths"=>30,
 "chemistry"=>39),
"qadir"=>array
("physics"=>30,
 "maths"=>32,
 "chemistry"=>29), 
"zara"=>array
("physics"=>31,
 "maths"=>22,
 "chemistry"=>39)
);
echo "marks for mohammad in physics:";
echo $marks['mohammad']['physics']."<br/>";
echo "marks for qadir in maths:";
echo $marks['qadir']['maths']."<br/>";
echo "marks for zara in chemistry:";
echo $marks['zara']['chemistry']."<br/>";
?>
</body>
</html>