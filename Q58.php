<?php
$filename = "D:\vedant.txt";
$file  = fopen($filename,"w");
if($file == false){
    echo "Error in Opening new file ";
    exit();
}
fwrite($file,"this is Simple test Php file \n");
fclose($file);
?>
<?php
$filename = "D:\hello.txt";
$file  = fopen($filename,"w");
if($file == false){
    echo "Error in Opening new file ";
    exit();
}
fwrite($file,"this is Simple test Php file \n");
fclose($file);
?>
