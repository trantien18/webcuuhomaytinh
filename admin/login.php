<?php
include('../connect.php');
session_start();
// Kiểm tra xem người dùng đã nhập thông tin hay chưa
if (isset($_POST['sumbit'])) {
   // với role = 0 thì đó là người nắm quyền cáo nhất
	$role = 0;
  $role = (int)$role;
  $Email = $_POST['Email'];
  $password = $_POST['Password'];
  $hashedPassword = md5($password);
  $sql = "SELECT * FROM tbl_user WHERE Email = '$Email' AND password = '$hashedPassword'";
  $sql1 = "SELECT * FROM tbl_user WHERE Email = '$Email' AND password = '$hashedPassword'";
  $result = $conn->query($sql);
  $result1 = $conn->query($sql1);    
  if ($result1->num_rows > 0) {
      $user = $result->fetch_assoc();
      $_SESSION['Email'] = $user['Email'];
      header("Location: ../admin/layout/index.php");
      }
  elseif($result->num_rows > 0){
      $user = $result->fetch_assoc();
      $_SESSION['Email'] = $user['Email'];     
      header("Location: ../admin/layout/index.php");  
      ;
  } else {
    header("Location: dangnhap.php");
      //$error = "Invalid username or password";
  }
}
// Đóng kết nối
mysqli_close($conn);
?>