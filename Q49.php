<?php
$date_array = getdate();
foreach($date_array as $key=>$val){
    print("$key = $val <br/>");

}
$fomated_date = "today's date : ";
$fomated_date.= $date_array[Mday]."/";
$fomated_date.= $date_array[mon]."/";
$fomated_date.= $date_array[year]."/";
print $fomated_date;
?>
