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
  <!-- <script src="ckeditor/ckeditor.js"> </script> -->
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
  <!-- jsui -->
  <link rel="stylesheet" href="../Summernote/jqueryui/jquery-ui.min.css">
  <!-- sumernote -->
  <link rel="stylesheet" href="../Summernote/snote/summernote-bs5.min.css">
  <!-- elfinder -->
  <link rel="stylesheet" href="../Summernote/elFinder/css/elfinder.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
          <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Kevin Anderson</h6>
            <span>Web Designer</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
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
      <h1>Thêm User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Nhập Kho</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Thêm Khách hàng </h5>

              <!-- No Labels Form -->
              <form action="them.php" method="POST" class="row" enctype="multipart/form-data">
                <!-- <div class="col-md-12">
                  <textarea id='cke1' name="connect"></textarea>
                  <input type="Username" name="Username" class="form-control" placeholder="Tên đăng nhập">
                </div> -->
                <div class="col-md-12">
                  <input type="Email" name="Email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <input type="Password" name="Password" class="form-control" placeholder="Mật khẩu">
                </div>
                <div class="col-md-12">
                  <input type="Phone" name="Phone" class="form-control" placeholder="Điện thoại">
                </div>

                <div class="col-md-12">
                  <input type="Address" name="Address" class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="col-md-12">
                  <div class="input-group input-group-merge">
                    <button class="btn btn-outline-primary" type="button" id="button-addon1"
                      onclick="elfinderDialog2('#Images')">Thêm ảnh
                    </button>
                    <input class="form-control" type="text" name="Images" id="Images" />
                  </div>
                </div>
                <div class="col-sm-10">
                  <textarea id="summernote" name="Contents"></textarea>
                  <!-- JavaScript -->

                  <!-- <textarea id="Contents" class="form-control" name="Contents" aria-describedby="basic-icon-default-message2"></textarea> -->
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Thêm</button>
                  <button type="reset" class="btn btn-secondary"><a href=quanlyuser.php>Quay
                      lại</a></button>
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
  <script src="../Summernote/elfinderext.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#summernote').summernote({
        minHeight: 300,
        toolbar: [
          ['insert', ['link', 'picture', 'elfinder', 'hr']],
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['table', ['table']],
          ['view', ['codeview']]
        ]
      })
    });

    function elfinderDialog(context) {
      var fm = $('<div/>')
        .dialogelfinder({
          url: '../Summernote/elFinder/php/connector.minimal.php',
          lang: 'en',
          width: 840,
          height: 450,
          destroyOnClose: true,
          getFileCallback: function (file, fm) {
            context.invoke('editor.insertImage', fm.convAbsUrl(file.url))
          },
          commandsOptions: {
            getfile: {
              oncomplete: 'close',
              folders: false
            }
          }
        })
        .dialogelfinder('instance')
    }

    function elfinderDialog2(id) {
      let context = document.querySelector(id)
      var fm = $('<div/>')
        .dialogelfinder({
          url: '../Summernote/elFinder/php/connector.minimal.php',
          lang: 'en',
          width: 840,
          height: 450,
          destroyOnClose: true,
          getFileCallback: function (file, fm) {
            context.value = file.url
          },
          commandsOptions: {
            getfile: {
              oncomplete: 'close',
              folders: false
            }
          }
        })
        .dialogelfinder('instance')
    }
  </script>

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
  <!-- Place the first <script> tag in your HTML's <head> -->
  <!-- <script src="https://cdn.tiny.cloud/1/o4wdv2v1uq3z2slrii7tqurq50xot582weq79891f462ha8u/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script> -->

  <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
  <!-- elFinder -->
  <script src="../Summernote/jqueryui/jquery-ui.min.js"></script>
  <script src="../Summernote/snote/summernote-bs5.min.js"></script>
  <script src="../Summernote/elFinder/js/elfinder.min.js"></script>

  <?php
  if (isset($scripts))
    echo $scripts;
  ?>
</body>

</html>