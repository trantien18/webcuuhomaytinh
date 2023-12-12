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
  <?php include '../layout/header.php' ?>
  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php' ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Trang Quản Trị</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <p>
          <a href="themmenu.php" type="button" class="btn btn-success" style="width: 15%!important;">
            <i class="bi bi-file-earmark-text me-1"></i>Thêm</a>
        </p>
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Sản Phẩm<span></span></h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Thứ tự</th>
                    <th scope="col">Tên Menu</th>
                    <th scope="col">Đường dẫn</th>
                    <th scope="col">Chức Năng</th>
                  </tr>
                </thead>
                <?php
                require '../../connect.php';
                $query = mysqli_query($conn, "select * from  tbl_menu");
                while ($row = mysqli_fetch_array($query)) {
                  ?>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <?php echo $row['MenuItemID'] ?>
                      </th>
                      <td>
                        <?php echo $row['Title'] ?>
                      </td>
                      <td>
                        <?php echo $row['URL'] ?>
                      </td>
                      <td class="fw-bold">
                        <a href="suamn.php?MenuItemID=<?php echo $row['MenuItemID']; ?>" class="btn btn-primary btn-sm"
                          title="Sửa thông tin">
                          <i class="bi bi-pencil"></i></a>
                        <a href="xoamn.php?MenuItemID=<?php echo $row['MenuItemID']; ?>" class="btn btn-danger btn-sm"
                          title="Xóa thông tin" onclick="return confirm('Bạn có muốn xoá thông tin này không ?');">
                          <i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <?php
                }
                ?>
              </table>
              <!-- Right side columns -->
              <div class="col-lg-4">
                <!-- News & Updates Traffic -->
              </div><!-- End Right side columns -->
            </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include '../layout/footer.php' ?>

</body>

</html>