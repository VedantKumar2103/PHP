<?php
echo "Cookie Value:" . $_COOKIE ["mycookie"];
setcookie("mycookie","",time()-(86400*30),"/");
?>
