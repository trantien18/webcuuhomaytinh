<?php
include('../../connect.php');
if(isset($_REQUEST['id']) ){
$id=$_GET['id'];
$sql = "DELETE FROM tbl_lienhe WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: quanlylienhe.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>