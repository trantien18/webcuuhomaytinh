<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "data";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $Title = "";
                    $URL = "";
                    $Position ="";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["Title"])) { $Title= $_POST['Title']; }
                        if(isset($_POST["URL"])) { $URL = $_POST['URL']; }
                        if(isset($_POST["Position"])) { $Position = $_POST['Position']; }
                       
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($Title) && !empty($URL) && !empty($Position)){
                        $sql = "INSERT INTO tbl_menu (Title, URL, Position)
                        VALUES ('$Title', '$URL' ,'$Position')";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: quanlymenu.php'); // Chuyển hướng đến trang chủ
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
