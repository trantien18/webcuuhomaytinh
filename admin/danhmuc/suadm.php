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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  session_start();

  // Kiểm tra xem người dùng đã đăng nhập hay chưa
  if (!isset($_SESSION['Email'])) {
    // Chuyển hướng đến trang đăng nhập
    header('Location: ../dangnhap.php');
    exit;
  }

  // Nếu người dùng đã đăng nhập, hiển thị trang admin
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <img
          src="https://inkythuatso.com/uploads/thumbnails/800/2021/12/logo-dai-hoc-vinh-inkythuatso-01-20-14-14-08.jpg"
          alt="">
        <span class="d-none d-lg-block">ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php echo $_SESSION["Email"] ?>
          </span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>
              <?php echo $_SESSION["Email"] ?>
            </h6>
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="../logout.php"
              onclick="return confirm('Bạn có muốn đăng xuất không ?');">
              <i class="bi bi-box-arrow-right"></i>
              <span>Đăng xuất</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../index.php">
          <i class="bi bi-grid"></i>
          <span>Trang chủ</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-heading">Pages</li>
      <?php
      require '../../connect.php';
      $query = mysqli_query($conn, "select * from  tbl_admin_menu");
      while ($row = mysqli_fetch_array($query)) { ?>

        <li class="nav-item">
          <a class="nav-link collapsed" href="../<?php echo $row['ControllerName'] ?>">
            <i class="<?php echo $row['icon'] ?>"></i>
            <span>
              <?php echo $row['MenuName'] ?>
            </span>
          </a>
        </li><!-- End Profile Page Nav -->

      <?php }
      ?>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sửa danh mục menu</h1>
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
          $query = mysqli_query($conn, "SELECT * from tbl_admin_menu WHERE `ID`='$id' ");
          $row = mysqli_fetch_assoc($query);
          ?>
          <?php
          //<?php
          if (isset($_POST['suadm'])) {
            $menuname = $_POST['MenuName'];
            $icon = $_POST['icon'];
            $controllername = $_POST['ControllerName'];

            // Create connection
            $conn = new mysqli("localhost", "root", "", "data");
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE tbl_admin_menu SET  MenuName='$menuname' , icon='$icon', ControllerName='$controllername'  WHERE ID='$id'";
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
                <div class="col-md-12">
                  <input type="text" name="MenuName" class="form-control" value="<?php echo $row['MenuName']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="text" name="icon" class="form-control" value="<?php echo $row['icon']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="text" name="ControllerName" class="form-control" value="<?php echo $row['ControllerName']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit" value="update" name="suadm" class="btn btn-primary">Cập Nhật</button>
                  <button type="reset" class="btn btn-secondary"><a href=quanlydanhmuc.php>Quay lại</a></button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>




        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>