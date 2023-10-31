<?php
include('../../connect.php');
if(isset($_REQUEST['MenuItemID']) ){
$id=$_GET['MenuItemID'];
$sql = "DELETE FROM tbl_menu WHERE MenuItemID='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: quanlymenu.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>