<?php
$conn = new mysqli('localhost','root','','data');
if(!$conn){
    die("Failed".$conn->connect_error);
}
//echo ("Thành công");  
?>