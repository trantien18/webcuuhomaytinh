<?php
include('../../connect.php');
if(isset($_REQUEST['id_pm']) ){
$id=$_GET['id_pm'];
$sql = "DELETE FROM tbl_phanmem WHERE id_pm='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: quanlydanhmuc.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>