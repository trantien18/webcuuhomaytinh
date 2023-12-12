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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
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
            <h1>Trang Quản Trị</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <p>
                    <a href="thembaiviet.php" type="button" class="btn btn-success"
                        style="width: 15%!important; height:35px; font-size: 16px;">
                        <i class="bi bi-file-earmark-text me-1"></i>Thêm</a>
                </p>
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Khách hàng<span></span></h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="col-1">STT</th>
                                        <th class="col-2">Ảnh</th>
                                        <th class="col-3">Tiêu Đề</th>
                                        <th class="col-3">Tóm tắt</th>
                                        <th class="col-2">Danh mục</th>
                                        <th class="col-1 text-center">Chức năng</th>
                                    </tr>
                                </thead>
                                <?php
                                require '../../connect.php';
                                $query = mysqli_query($conn, "select * from  tbl_post join tbl_danhmuc on tbl_post.id_danhmuc = tbl_danhmuc.id");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $row['id_post'] ?>
                                            </td>
                                            <th scope="row"><a href="#"><img src="<?php echo $row['img'] ?>" alt=""></a>
                                            </th>
                                            <td>
                                                <?php echo $row['title'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['shorten'] ?>
                                            </td>

                                            <td>
                                                <?php echo $row['tendanhmuc'] ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="suabaiviet.php?id_post=<?php echo $row['id_post']; ?>"
                                                    class="btn btn-primary btn-sm" title="Sửa thông tin">
                                                    <i class="bi bi-pencil"></i></a>
                                                <a href="xoa.php?id_post=<?php echo $row['id_post']; ?>"
                                                    class="btn btn-danger btn-sm" title="Xóa thông tin"
                                                    onclick="return confirm('Bạn có muốn xoá thông tin này không ?');">
                                                    <i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div><!-- End Top Selling -->
            </div>
            </div><!-- End Left side columns -->
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php include '../layout/footer.php' ?>
</body>

</html>