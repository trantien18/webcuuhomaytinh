<?php
                    $username = "root"; // Khai báo username
                    $password = "";      // Khai báo password
                    $server   = "localhost";   // Khai báo server
                    $dbname   = "data";      // Khai báo database

                    include '../../connect.php';

                    //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
                    $title = "";
                    $shorten= "";
                    $content="";
                    $id_danhmuc="";
                    $img="";
                    
                    //Lấy giá trị POST từ form vừa submit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if(isset($_POST["title"])) { $title = $_POST['title']; }
                        if(isset($_POST["shorten"])) { $shorten = $_POST['shorten']; }
                        if(isset($_POST["content"])) { $content= $_POST['content']; }
                        if(isset($_POST["id_danhmuc"])) { $id_danhmuc = $_POST['id_danhmuc']; }
                        if(isset($_POST["img"])) { $img = $_POST['img']; }
                        $selectedSection = $_POST['id_danhmuc'];
                    }
                        //Code xử lý, insert dữ liệu vào table
                        if ( !empty($title) && !empty($shorten) && !empty($content) && !empty($img) && !empty($id_danhmuc) ){
                        $sql = "INSERT INTO tbl_post ( title, shorten, content ,id_danhmuc, img)
                        VALUES ('$title', '$shorten', '$content' ,'$id_danhmuc','$img' )";

                            if ($conn->query($sql) === TRUE) {
                                $message = "Thêm thành công!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                 header('Location: quanlybaiviet.php'); // Chuyển hướng đến trang chủ
                                    exit(); // Ngừng thực thi script
                                } else {
                                    echo "Lỗi khi Thêm " . $sql . "<br>" . $conn->error;
                                }
                        }
                else {
                        echo "Vui lòng điền đầy đủ thông tin sản phẩm";                         
                    }  
                    //Đóng database
                    $conn->close();
                    ?>
