<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "data";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $name_pm = "";
                    $danhmucpm = "";
                    $link ="";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["name_pm"])) { $name_pm= $_POST['name_pm']; }
                        if(isset($_POST["danhmucpm"])) { $danhmucpm = $_POST['danhmucpm']; }
                        if(isset($_POST["link"])) { $link = $_POST['link']; }
                       
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($name_pm) && !empty($danhmucpm) && !empty($link)){
                        $sql = "INSERT INTO tbl_phanmem (name_pm, danhmucpm, link)
                        VALUES ('$name_pm', '$danhmucpm' ,'$link')";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: danhsachpm.php'); // Chuyển hướng đến trang chủ
                                    exit(); // Ngừng thực thi script
                                } else {
                                    echo "Lỗi khi Thêm Menu " . $sql . "<br>" . $conn->error;
                                }
                        }
                else {
                        echo "Vui lòng điền đầy đủ thông tin sản phẩm";
                        
                  
                                   
                    }  
                    //Đóng database
                    $conn->close();
                    ?>
