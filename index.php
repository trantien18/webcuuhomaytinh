<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>Cuu ho may tinh</title>
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="css/owl.css">
  <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <?php include 'header.php' ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="main-banner header-text">
    <?php include 'slide.php' ?>
  </div>
  <!-- Banner Ends Here -->
  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <?php
              require 'connect.php';
              $query = mysqli_query($conn, "select * from  tbl_post LIMIT 4");
              while ($row = mysqli_fetch_array($query)) { ?>

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img width="770px" height="340px" src="<?php echo $row["img"] ?>" alt="">
                    </div>
                    <div class="down-content">
                      <a href="tintuc.php?id_post=<?php echo $row['id_post']; ?>">
                        <span>
                          <?php echo $row["title"] ?>
                        </span>
                      </a>
                      <a href="tintuc.php?id_post=<?php echo $row['id_post']; ?>">
                        <h4>
                          <?php echo $row["shorten"] ?>
                        </h4>
                      </a>
                      <ul class="post-info ">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <h6 class="p-4" style=" width: 100%;
                                  height: 14em;
                                  font-size: 14px;
                                  overflow: hidden;
                                  font-family: Arial;
                                  text-overflow: ellipsis;
                                  border-top: 1px solid #ced4da;">
                        <?php echo $row["content"] ?>
                      </h6>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
                            </ul>

                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="blog.php">View All Posts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <div class="col-lg-12">
                <div class="sidebar-item search">
                  <form id="search_form" name="noidung" method="GET" action="timkiem.php?title=timkiem">
                    <input type="text" name="timkiem" class="searchText" placeholder="type to search..."
                      autocomplete="on">
                  </form>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <h2>Bài Viết Liên Quan</h2>
                  </div>
                  <?php
                  require 'connect.php';
                  $query = mysqli_query($conn, "select * from  tbl_post ORDER BY RAND()  limit 5 ");
                  while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="content">
                      <ul>
                        <li><a href="tintuc.php?id_post=<?php echo $row['id_post']; ?>">
                            <h5>
                              <?php echo $row['title']; ?>
                            </h5>
                            <span>May 31, 2020</span>
                          </a></li>

                      </ul>
                    </div>
                    <?php
                  }
                  ?>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item categories">
                  <div class="sidebar-heading">
                    <h2>Danh Mục</h2>
                  </div>
                  <?php
                  require 'connect.php';
                  $query = mysqli_query($conn, "select *  from  tbl_danhmuc");
                  while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="content p-2">
                      <ul>
                        <li>
                          <a href="blog.php?id=<?php echo $row['id']; ?>">
                            <h5>
                              <?php echo $row['tendanhmuc']; ?>
                            </h5>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <?php
                  }

                  ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
      </li>
      <li class="page-item">
      </li>
    </ul>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.

                | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ''; // with more chance of typos
          t.style.color = '#fff';
        }
      }
    </script>

</body>

</html>