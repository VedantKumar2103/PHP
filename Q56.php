<?php
$fptr = fopen("newfile.txt","w"); 
?>


<?php
    mkdir("D:/hell1.txt",0777,true);
?>


<!-- Renaming Files with PHP rename() Function -->
<?php
$file = "hello.txt";
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "info.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?>
<br>
<?php
$file = "hello.txt";
    
// String of data to be written
$data = "hello this data or info of file inserted by file_put_contents ";
    
// Write data to the file
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
    
echo "Data written to the file successfully.";
?>

<?php
$file = "hello.txt";
$filesize_ = filesize($file); 
echo  " <b> file size of hello.txt:  $filesize_ Bytes</b>"; 
?>

from vanshika file 