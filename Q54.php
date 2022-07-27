<?php
$url='https://www.geeksforgeeks.org?name= Vedant Kumar';
$url_components=parse_url($url);
parse_str($url_components['query'],$params);
echo 'Hey this is';
echo "</t>";
echo $params['name'];
?>
