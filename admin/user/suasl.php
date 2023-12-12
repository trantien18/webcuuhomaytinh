<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include '../layout/header.php' ?>
  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php' ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Sửa Slider</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <?php
          // Kết nối Database
          include '../../connect.php';
          $id = $_GET['ID'];
          $query = mysqli_query($conn, "SELECT * from tbl_slide WHERE `ID`='$id' ");
          $row = mysqli_fetch_assoc($query);
          ?>
          <?php
          //<?php
          if (isset($_POST['suasl'])) {
            $anh = $_POST['anh'];
            $tieude = $_POST['tieude'];
            $Tenbaiviet = $_POST['Tenbaiviet'];

            // Create connection
            $conn = new mysqli("localhost", "root", "", "data");
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE tbl_slide SET  anh='$anh' , tieude='$tieude', Tenbaiviet='$Tenbaiviet'  WHERE ID='$id'";
            if ($conn->query($sql) === TRUE) {

              exit();

            } else {
              echo "Vui lòng nhập lại" . $conn->error;
            }
            $conn->close();
          }
          ?>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sửa danh mục menu </h5>

              <!-- No Labels Form -->
              <form method="POST" class="row g-3">
                <div class="form-group">
                  <label for="formFile" class="form-label fw-bold">Chọn Ảnh :</label>
                  <input class="form-control-file form-control height-auto" type="file" id="formFile" name="anh">
                </div>
                <div class="col-md-6">
                  <input type="tieude" name="tieude" class="form-control" value="<?php echo $row['tieude']; ?> ">
                </div>
                <div class="col-md-6">
                  <input type="text" name="Tenbaiviet" class="form-control" value="<?php echo $row['Tenbaiviet']; ?> ">
                </div>
                <div class="text-center">
                  <button type="submit" value="update" name="suasl" class="btn btn-primary">Cập Nhật</button>
                  <button type="reset" class="btn btn-secondary"><a href=quanlyslider.php>Quay lại</a></button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>




        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include '../layout/footer.php' ?>

</body>

</html>