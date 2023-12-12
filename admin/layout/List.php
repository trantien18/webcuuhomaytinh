<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="../layout/index.php">
                <i class="bi bi-grid"></i>
                <span>Trang chủ</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Pages</li>
        <?php
        require '../../connect.php';
        $query = mysqli_query($conn, "select * from  tbl_admin_menu");
        while ($row = mysqli_fetch_array($query)) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../<?php echo $row['ControllerName'] ?>">
                    <i class="<?php echo $row['icon'] ?>"></i>
                    <span>
                        <?php echo $row['MenuName'] ?>
                    </span>
                </a>
            </li><!-- End Profile Page Nav -->
        <?php }
        ?>
    </ul>
</aside><!-- End Sidebar-->