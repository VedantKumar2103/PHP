<?php
function track ()
{STATIC $count =0;
$count++;
print $count ;
print "";
}
track();
track();
track();
?>