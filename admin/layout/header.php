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
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="../layout/index.php" class="logo d-flex align-items-center">
    <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/12/logo-dai-hoc-vinh-inkythuatso-01-20-14-14-08.jpg" alt="">
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

    <li class="nav-item dropdown">
    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['Email']; ?></span>     

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION['Email']; ?></h6>
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="../logout.php"  onclick="return confirm('Bạn có muốn đăng xuất không ?');">
            <i class="bi bi-box-arrow-right"></i>
            <span>Đăng xuất</span>
          </a>
        </li>
      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End  Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->