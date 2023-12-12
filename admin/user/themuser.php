<?php
  session_start();
?>
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
  <?php include '../layout/header.php'?>
  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php'?>
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
          <div class="col-lg-6">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Thêm Khách hàng </h5>                
                <!-- Hiển thị thông báo nếu có -->
                <?php if (isset($_SESSION['success_message'])): ?>
                    <div style="color: green;"><?php echo $_SESSION['success_message']; ?></div>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div style="color: red;"><?php echo $_SESSION['error_message']; ?></div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>
                <!-- No Labels Form -->
                <form action="them.php" method="POST" class="row g-3">
                  <div class="col-md-12">
                    <input type="text" name="LastName" class="form-control" placeholder="Tên đăng nhập">
                  </div>
                  <div class="col-md-12">
                    <input type="Email" name="Email" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-md-6">
                    <input type="Password" name="Password" class="form-control" placeholder="Mật khẩu">
                  </div>          
                  <div class="text-center">
                    <button  type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-secondary"><a href=quanlyuser.php>Quay lại</a></button>
                  </div>
                </form><!-- End No Labels Form -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include '../layout/footer.php'?>
  </body>
</html>