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
  <!-- jsui -->
  <link rel="stylesheet" href="../Summernote/jqueryui/jquery-ui.min.css">
  <!-- sumernote -->
  <link rel="stylesheet" href="../Summernote/snote/summernote-bs5.min.css">
  <!-- elfinder -->
  <link rel="stylesheet" href="../Summernote/elFinder/css/elfinder.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include '../layout/header.php'?>
  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php'?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Sửa bài viết</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>

        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <?php
          // Kết nối Database
          include '../../connect.php';
          $id = $_GET['id_post'];
          $query = mysqli_query($conn, "SELECT * from tbl_post WHERE `id_post`='$id' ");
          $row = mysqli_fetch_assoc($query);
          // 
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
            $sql = "UPDATE tbl_post SET  title='$title' , shorten='$shorten', content='$content', img='$img' , id_danhmuc='$id_danhmuc' WHERE id_post='$id'";
            if ($conn->query($sql) === TRUE) {
              $message = "Sửa thành công!";
              echo "<script type='text/javascript'>alert('$message');</script>";
              exit();
            } else {
              echo "Vui lòng nhập lại" . $conn->error;
            }
            $conn->close();
          }
          ?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sửa bài viết </h5>
              <!-- No Labels Form -->
              <form method="POST" class="row g-3">
                <div class="col-md-6">
                  <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                </div>
                <div class="col-md-12">
                  <input type="text" name="shorten" class="form-control" value="<?php echo $row['shorten']; ?>">
                </div>
                <div class="col-md-12">
                
                </div>
                <div class="col-md-12">
                  <div class="input-group input-group-merge">
                    <button class="btn btn-outline-primary" type="button" id="button-addon1"
                      onclick="elfinderDialog2('#Images')">Thêm ảnh
                    </button>
                    <input class="form-control" type="text" value="<?php echo $row['img']; ?>" name="img" id="Images" />
                  </div>
                </div>
                <div class="col-sm-10">
                  <textarea id="summernote" name="content"><?php echo $row['content']; ?></textarea>
                  <!-- JavaScript -->
                </div>
                <div class="col-md-12">
                <select class="select2 form-select p-1" id="sectionSelect" name="id_danhmuc">
                                        <?php
                                        require '../../connect.php';
                                        $query = mysqli_query($conn, "select * from  tbl_danhmuc");
                                        while ($row = mysqli_fetch_array($query)) {
                                          ?>
                                        <option value="<?php echo $row['id'] ?>">

                                            <?php echo $row['tendanhmuc'] ?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                      $selectedSection = $_POST["section"];
                                      echo "<div id=\"$selectedSection\">";
                                      echo "</div>";
                                    }
                                    ?>
                                      </div>
                <!-- <textarea id="Contents" class="form-control" name="Contents" aria-describedby="basic-icon-default-message2"></textarea> -->
                <div class="text-center">
                  <!-- <button type="submit" value="update" name="suabv" class="btn btn-primary">Cập nhật</button> -->
                  <button type="submit" name="suabv" class="btn btn-primary">Cập nhật</button>
                  <button type="reset" class="btn btn-secondary"><a href=quanlybaiviet.php>Quay lại</a></button>
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
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../Summernote/jqueryui/jquery-ui.min.js"></script>
  <script src="../Summernote/snote/summernote-bs5.min.js"></script>
  <script src="../Summernote/elFinder/js/elfinder.min.js"></script>

  <?php
  if (isset($scripts))
    echo $scripts;
  ?>
</body>

</html>