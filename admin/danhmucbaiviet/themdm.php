<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "data";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $tendanhmuc = "";
                    $id_slide = "";
                  
                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["tendanhmuc"])) { $tendanhmuc= $_POST['tendanhmuc']; }
                        if(isset($_POST["id_slide"])) { $id_slide= $_POST['id_slide']; }
                        $selectedSection = $_POST['id_slide'];
                      
                       
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($tendanhmuc) && !empty($id_slide) ){
                        $sql = "INSERT INTO tbl_danhmuc (tendanhmuc,id_slide)
                        VALUES ('$tendanhmuc','$id_slide')";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: quanlydanhmucbaiviet.php'); // Chuyển hướng đến trang chủ
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
