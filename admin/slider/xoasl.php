<?php
include('../../connect.php');
if(isset($_REQUEST['ID']) ){
$id=$_GET['ID'];
$sql = "DELETE FROM tbl_slide WHERE ID ='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location:quanlyslider.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>