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
<?php include '../layout/header.php'?>

  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php'?>

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

  <?php include '../layout/footer.php'?>

</body>

</html>