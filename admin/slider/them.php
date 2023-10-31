<?php
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "data"; // Khai báo database

include '../../connect.php';

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$anh = "";
$tieude = "";
$Tenbaiviet = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["anh"])) {$anh = $_POST['anh'];}
    if (isset($_POST["tieude"])) {$tieude = $_POST['tieude'];}
    if (isset($_POST["Tenbaiviet"])) {$Tenbaiviet = $_POST['Tenbaiviet'];}
}
//Code xử lý, insert dữ liệu vào table
if (!empty($anh) && !empty($tieude) && !empty($Tenbaiviet)) {
    $sql = "INSERT INTO tbl_slide (anh, tieude, Tenbaiviet)
                        VALUES ( '$anh', '$tieude', '$Tenbaiviet')";
    if ($conn->query($sql) === TRUE) {
        $message = "Thêm thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: quanlyslider.php'); // Chuyển hướng đến trang chủ
        exit(); // Ngừng thực thi script
    } else {
        echo "Lỗi khi Thêm Sản Phẩm " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Vui lòng điền đầy đủ thông tin sản phẩm";
}
//Đóng database
$conn->close();
?>