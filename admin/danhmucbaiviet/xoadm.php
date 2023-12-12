<?php
include('../../connect.php');
if(isset($_REQUEST['id']) ){
$id=$_GET['id'];
$sql = "DELETE FROM tbl_danhmuc WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: quanlydanhmucbaiviet.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>