<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
include 'connect.php';

$mail = new PHPMailer(true);

$alert ='';

if(isset($_POST['sumbit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username ='tuannguyen.10102k2@gmail.com';
        $mail->Password = 'hgtfnmojjywzgfbm';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->setFrom($email,$name);
        $mail->addAddress('tuannguyen.10102k2@gmail.com');
        $mail->Subject = ("$email ($subject)");
        $mail->Body = "name: $name <br> email: $email<br> subject: $subject <br> massage: $message" ;
        $mail->send();
        $alert="<span>Gửi thành công!</span>";

        #header("location:lienhe.php");
        
        $name = "";
        $email = "";
        $subject = "";
        $message = "";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"])) {$name = $_POST['name'];}
    if (isset($_POST["email"])) {$email = $_POST['email'];}
    if (isset($_POST["subject"])) {$subject = $_POST['subject'];}
    if (isset($_POST["message"])) {$message = $_POST['message'];}
}
//Code xử lý, insert dữ liệu vào table
if (!empty($name) && !empty($email) && !empty($subject)&& !empty($message)) {
    $sql = "INSERT INTO tbl_lienhe (name, email, subject, message)
                        VALUES ( '$name', '$email', '$subject','$message')";
    if ($conn->query($sql) === TRUE) {
        $message = "Thêm thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: lienhe.php'); // Chuyển hướng đến trang chủ
        exit(); // Ngừng thực thi script
    } else {
        echo "Lỗi khi Thêm Sản Phẩm " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Vui lòng điền đầy đủ thông tin sản phẩm";
}
//Đóng database
$conn->close();
}
?>