<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Cuu ho may tinh</title>
    <link href="admin/assets/img/favicon.png" rel="icon">

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
    <?php include'header.php'?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
             
                <h2>PHẦN MỀM </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="contact-us p-5">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên Phần Mềm</th>
      <th scope="col">Danh mục phần mềm</th>
      <th scope="col">Link</th>
 
    </tr>
  </thead>
  <tbody>


  <?php
            require 'connect.php';
            if(isset($_GET['trang'])){
              $page =$_GET['trang'];
            }else{
              $page ='';
          }
          if($page ==''||$page ==1){
              $begin = 0;
          }
          else{
              $begin =($page*6)-6;
          }
                    $query=mysqli_query($conn,"select * from  tbl_phanmem limit $begin,6");
                    while($row=mysqli_fetch_array($query)){ ?>

            
    <tr>
 
      <td><?php echo $row["id_pm"]?></td>
      <td><?php echo $row["name_pm"]?></td>
      <td><?php echo $row["danhmucpm"]?></td>
      <td >  <a href="<?php echo $row["link"]?>" target="_blank">Tải xuống</a></td>
    </tr>
    <?php
                    }
              ?>
  </tbody>
</table>
<?php 
    $sql_trang = mysqli_query($conn,"SELECT * from tbl_phanmem");
    $row_count = mysqli_num_rows($sql_trang);

   $trang = ceil($row_count/6) ;
    ?>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">

    </li>
     <?php 
for ($i = 1; $i <= $trang;$i++) {
    ?>
    <li class="page-item"><a <?php if($i==$page) {echo 'style ="background:#ff8b24;color:white"';}else{echo '';} ?> class="page-link" href="phanmem.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
<?php
}
?>
    <li class="page-item">
 
    </li>
  </ul>

          </div>
          
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10003.427237221735!2d105.69679371960552!3d18.657253278039597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1701844671276!5m2!1svi!2s" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
          
        </div>
        <section class="why_section layout_padding">
         <div class="container">
         
            <!-- <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="mail.php" method="POST">
                        <fieldset>
                           <input type="text" placeholder="Nhập họ tên" name="name"  />
                           <input type="email" placeholder="Nhập Email" name="email"  />
                           <input type="tel" placeholder=" Nhập số điện thoại" name="phone"  />
                           <textarea placeholder="Nội dung" name="message"></textarea>
                        
                           <input type="submit" name="sumbit" value="Gửi" />

                        </fieldset>
                     </form>
                  </div>
               </div>
            </div> -->
         </div>
      </section>
      </div>
    </section>
  
    
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

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>