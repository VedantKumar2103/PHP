<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbphp";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
echo "Connection was successful";
?>
