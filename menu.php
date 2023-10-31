<div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <?php
            require 'connect.php';
                    $query=mysqli_query($conn,"select * from  tbl_menu");
                    while($row=mysqli_fetch_array($query)){ ?>

              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $row["URL"]?>"><?php echo $row["Title"];?>
                  <!-- <span class="sr-only">(current)</span> -->
                </a>
              </li> 
              <?php
                    }
              ?>
            </ul>
          </div>