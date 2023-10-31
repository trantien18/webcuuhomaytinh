<?php
include('../connect.php');
// Khởi động phiên làm việc
session_start();

// Kiểm tra xem người dùng đã nhập thông tin hay chưa
if (isset($_POST['sumbit'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Kiểm tra thông tin đăng nhập
    if ($email === 'Email' && $password === 'Password') {
        // Lưu thông tin đăng nhập vào session
        $_SESSION['Email'] = $email;

        // Chuyển hướng đến trang admin
        header('Location: index.php');
        exit;
    } else {
        $error = 'Thông tin đăng nhập không chính xác.';
    }


	// Mã hóa mật khẩu bằng MD5
	$hashedPassword = md5($password);
	
// Kiểm tra thông tin đăng nhập
$query = "SELECT * FROM tbl_user WHERE Email='$email' AND Password='$hashedPassword'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  // Lưu thông tin đăng nhập vào session
  $_SESSION['Email'] = $email;
  

  // Chuyển hướng người dùng đến trang tương ứng
  if ($_SESSION['role'] == 'admin') {
    header("Location:../../admin/index.php"); // Chuyển hướng đến trang admin
  } else {
    header("Location:index.php"); // Chuyển hướng đến trang người dùng
  }
} else {
  echo "Tên đăng nhập hoặc mật khẩu không đúng.";
}
}
// Đóng kết nối
mysqli_close($conn);
?>