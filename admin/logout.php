<?php
// Khởi động session
session_start();

// Kiểm tra xem người dùng đã bấm nút đăng xuất hay chưa
if (isset($_POST['logout'])) {
    // Hiển thị hộp thoại xác nhận
    echo '<script>var confirmed = confirm("Bạn có muốn đăng xuất không?");</script>';
    echo '<script>if (confirmed) { document.getElementById("logoutForm").submit(); }</script>';
    exit;
}
// Xóa thông tin đăng nhập khỏi session
unset($_SESSION['Email']);
unset($_SESSION['role']);


// Hủy và xóa tất cả các session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập
header("Location: dangnhap.php");
exit();

?>