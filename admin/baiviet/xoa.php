<?php
include('../../connect.php');
if(isset($_REQUEST['id_post']) ){
$id=$_GET['id_post'];
$sql = "DELETE FROM tbl_post WHERE id_post='$id'";
if ($conn->query($sql) === TRUE) {
    $message = "Xóa thành công!";
    echo "<script type='text/javascript'>alert('$message');</script>";
 header("Location: ../baiviet/quanlybaiviet.php");
    exit();
} else {
echo "Lỗi rồi " . $conn->error;
}
$conn->close();
}
?>