<?php
include('../../connect.php');
if(isset($_REQUEST['UserID']) ){
$id=$_GET['UserID'];
$sql = "DELETE FROM tbl_user WHERE UserID='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: ../user/quanlyuser.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>