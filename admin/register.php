<?php
include('../connect.php');
// start the session
session_start();

// check if the user is already logged in
if (isset($_SESSION['id'])) {
	header("Location: home.php");
	exit;
}

// check if the form has been submitted
if (isset($_POST['sumbit'])) {
	// Lấy thông tin từ form đăng ký
$LastName = $_POST['LastName'];
$email = $_POST['Email'];
$password = $_POST['Password'];



// Kiểm tra xem tên đăng nhập đã tồn tại hay chưa
$query = "SELECT * FROM tbl_user WHERE LastName='$LastName' or Email='$email'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  echo "Tên đăng nhập đã tồn tại. " ;
  exit();
}
   // Mã hóa mật khẩu sử dụng MD5
   $hashedPassword = md5($password);
// Thực hiện đăng ký
$query = "INSERT INTO tbl_user (LastName, Email, Password) VALUES ('$LastName', '$email', '$hashedPassword')";
if (mysqli_query($conn, $query)) {
  echo "Đăng ký thành công.";
  header('location:dangnhap.php');
} else {
  echo "Đăng ký thất bại.";
}
}
// Đóng kết nối
mysqli_close($conn);
?>