<div class="container-fluid">
        <div class="owl-banner owl-carousel">
        <?php
            require 'connect.php';
                    $query=mysqli_query($conn,"select * from  tbl_slide");
                    while($row=mysqli_fetch_array($query)){ ?>
          <div class="item">
            <img src=images/<?php echo $row["anh"] ?> alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php echo $row["tieude"]?></span>
                </div>
                <a href="post-details.html"><h4><?php echo $row ["Tenbaiviet"]?></h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php
                    }
                    ?>
        </div>
      </div>