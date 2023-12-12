<?php
session_start();
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "web";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $LastName = "";
                    $Email = "";
                    $Password= "";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["LastName"])) { $LastName= $_POST['LastName']; }
                        if(isset($_POST["Email"])) { $Email = $_POST['Email']; }
                        if(isset($_POST["Password"])) { $Password = $_POST['Password']; }
                        // Kiểm tra xem tên đăng nhập đã tồn tại hay chưa
                        $query = "SELECT * FROM tbl_user WHERE LastName='$LastName' or Email='$Email'";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            $_SESSION['error_message'] = "Tên đăng nhập hoặc email đã tồn tại. Vui lòng chọn tên khác.". $conn->error;
                            header("Location: themuser.php"); // Chuyển hướng trở lại trang nhập
                        }
                        else{
                        // Mã hóa mật khẩu sử dụng MD5
                        $hashedPassword = md5($Password);
                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($LastName) && !empty($Email) && !empty($Password) ){
                        $sql = "INSERT INTO tbl_user (LastName, Email, Password)
                        VALUES ('$LastName', '$Email', '$hashedPassword' )";
                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: quanlyuser.php');
                                    exit(); // Ngừng thực thi script
                                } 
                            }
                            else {
                                $_SESSION['error_message'] = "Vui lòng điền đầy đủ thông tin! " . $conn->error;
                                header('Location: themuser.php');        
                                }  
                        }
                    }

                        //Đóng database
                        $conn->close();
                        ?>