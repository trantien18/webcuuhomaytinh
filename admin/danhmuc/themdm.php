<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "data";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $menuname = "";
                    $icon = "";
                    $controllername ="";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["MenuName"])) { $menuname= $_POST['MenuName']; }
                        if(isset($_POST["icon"])) { $icon = $_POST['icon']; }
                        if(isset($_POST["ControllerName"])) { $controllername = $_POST['ControllerName']; }
                       
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($menuname) && !empty($icon) && !empty($controllername)){
                        $sql = "INSERT INTO tbl_admin_menu (MenuName, icon, ControllerName)
                        VALUES ('$menuname', '$icon' ,'$controllername')";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: quanlydanhmuc.php'); // Chuyển hướng đến trang chủ
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
