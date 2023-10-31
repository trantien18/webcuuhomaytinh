<?php
include('../../connect.php');
if(isset($_REQUEST['id']) ){
$id=$_GET['id'];
$sql = "DELETE FROM blog WHERE ID='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
 header("Location: ../index.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>