
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
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include '../layout/header.php'?>

  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php'?>

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Thêm Menu</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>   
          </ol>
        </nav>
      </div><!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-6">
              <div class="card">
              <div class="card-body">
                <h5 class="card-title">Thêm Menu </h5>

                <!-- No Labels Form -->
                <form action="themdm.php" method="POST" class="row g-3">
                  <div class="col-md-12">
                    <input type="text" name="MenuName" class="form-control" placeholder="Tên Menu">
                  </div>              
                  <div class="col-12">
                    <input type="text" name="icon" class="form-control" placeholder="icon">
                  </div>
                  <div class="col-12">
                    <input type="text" name="ControllerName" class="form-control" placeholder="Đường dẫn">
                  </div>                                              
                  <div class="text-center">
                    <button  type="submit" class="btn btn-primary">Thêm</button>
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
    <?php include '../layout/footer.php'?>

  </body>

  </html>