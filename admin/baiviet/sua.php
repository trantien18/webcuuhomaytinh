<?php
          // Kết nối Database
          include '../../connect.php';
          $title = "";
          $shorten= "";
          $content="";
          $img="";
          $id_danhmuc="";

          if (isset($_POST['suabv'])) {
            $title = $_POST['title'];
            $shorten = $_POST['shorten'];
            $content = $_POST['content'];
            $img = $_POST['img'];
            $id_danhmuc = $_POST['id_danhmuc'];
            // Create connection
            $conn = new mysqli("localhost", "root", "", "data");
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE tbl_post SET  title='$title' , shorten='$shorten', content='$content', img='$img' , id_danhmuc=$id_danhmuc  WHERE id_post='$id'";
            if ($conn->query($sql) === TRUE) {
              $message = "Sửa thành công!";
              echo "<script type='text/javascript'>alert('$message');</script>";
              ob_start();
              header("Location: ../baiviet/quanlybaiviet.php");
              ob_end_flush();
              exit();
            } else {
              echo "Vui lòng nhập lại" . $conn->error;
              error_reporting(E_ALL);
              ini_set("display_errors", 1);
            }
            $conn->close();
          }
          ?>