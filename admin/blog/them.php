<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "web";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $Anh = "";
                    $tieude= "";
                    $noidung="";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["Anh"])) { $Anh = $_POST['Anh']; }
                        if(isset($_POST["Tieude"])) { $Gia = $_POST['Tieude']; }
                        
                        if(isset($_POST["Noidung"])) { $Mota= $_POST['Noidung']; }
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($Anh) && !empty($tieude) && !empty($noidung)){
                        $sql = "INSERT INTO sanpham (Anh, Tieude, Noidung)
                        VALUES ( '$Anh', '$tieude', '$noidung')";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: ../index.php'); // Chuyển hướng đến trang chủ
                                    exit(); // Ngừng thực thi script
                                } else {
                                    echo "Lỗi khi Thêm Sản Phẩm " . $sql . "<br>" . $conn->error;
                                }
                        }
                else {
                        echo "Vui lòng điền đầy đủ thông tin sản phẩm";
                        
                  
                                   
                    }  
                    //Đóng database
                    $conn->close();
                    ?>
