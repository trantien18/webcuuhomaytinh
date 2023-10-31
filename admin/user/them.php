<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "web";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $TenSanPham = "";
                    $Anh = "";
                    $Gia= "";
                    $Mota="";
                    $tenchitiet="";

                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["TenSanPham"])) { $TenSanPham= $_POST['TenSanPham']; }
                        if(isset($_POST["Anh"])) { $Anh = $_POST['Anh']; }
                        if(isset($_POST["Gia"])) { $Gia = $_POST['Gia']; }
                        
                        if(isset($_POST["Mota"])) { $Mota= $_POST['Mota']; }
                        if(isset($_POST["tenchitiet"])) { $tenchitiet = $_POST['tenchitiet']; }
                    }

                        //Code xử lý, insert dữ liệu vào table
                        if (!empty($TenSanPham) && !empty($Anh) && !empty($Gia) && !empty($Mota)&& !empty($tenchitiet)){
                        $sql = "INSERT INTO sanpham (TenSanPham, Anh, Gia, Mota, tenchitiet)
                        VALUES ('$TenSanPham', '$Anh', '$Gia', '$Mota', '$tenchitiet' )";

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
