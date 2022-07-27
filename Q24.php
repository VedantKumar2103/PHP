<?php
$name1=array("sonoo","john","vivek","smoith");
$name2=array("umesh","sonoo","kartik","smoith");
$name3=array_intersect($name1,$name2);
foreach($name3 as $n)
{
echo "$n<br/>";
}
?> 
