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
  <?php include '../layout/header.php'?>

  <!-- ======= Sidebar ======= -->
  <?php include '../layout/List.php'?>
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
      <main id="main" class="main">
    <div class="pagetitle">
        <h2>Danh sach menu</h2>
    </div>

    <p>
        <a type="button" class="btn btn-success" asp-area="Admin" asp-controller="MenuClient" asp-action="Create">
            <i class="bi bi-file-earmark-text me-1"></i>Them menu</a>
    </p>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body mt-4">
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th class="col-1 text-center">#</th>
                                    <th class="col-3 text-center">Tiêu đề</th>
                                    <td class="col-1 text-center">Thứ tự</td>
                                    <td class="col-1 text-center">Ẩn/hiện</td>
                                    <th class="col-2 text-center">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (var item in Model)
                                {
                                    <tr>
                                        <th class="text-center" scope="row">@item.MenuID</th>
                                        <td><a asp-area="Admin" asp-controller="Menu" asp-action="Details"
                                            asp-route-id="@item.MenuID" class="text-primary">@item.MenuName</a></td>
                                   
                                        <td class="text-center">@item.MenuOrder</td>
                                        <td class="text-center">@item.IsActive</td>
                                        <td class="text-center">
                                            <a asp-area="Admin" asp-controller="MenuClient" asp-action="Edit"
                                            asp-route-id="@item.MenuID" class="btn btn-primary btn-sm"
                                            title="Sửa nội dung bài viết"><i class="bi bi-pencil"></i></a>
                                            <a asp-area="Admin" asp-controller="MenuClient" asp-action="Delete"
                                            asp-route-id="@item.MenuID" class="btn btn-danger btn-sm"
                                            title="Xóa thông tin bài viết"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
          </main>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

        


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include '../layout/footer.php'?>

</body>

</html>