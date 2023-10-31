<style>
        /* Định nghĩa kiểu dáng cho form */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #99FFCC;
        }

        /* Định nghĩa kiểu dáng cho input và button */
        input, button {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            width: 100px;
        }
    </style>

    <?php 
         include '../../../connect.php';
        $sql ="SELECT * from sanpham";
        $query = mysqli_query($conn, $sql);

        if(isset($_POST['sbm'])){
            $SanphamID = $_POST['SanphamID'];
            $tensanpham = $_POST['TenSanPham'];

            $Anh = $FILES['Anh']['name'];
            $Anh_tmp = $FILES['Anh']['tmp_name'];

            $Gia = $_POST['Gia'];
            $Mota = $_POST['Mota'];
            $tenchitiet = $_POST['tenchitiet'];
            
            $sql= " INSERT INTO sanpham (SanphamID, TenSanPham, Anh, Gia, Mota, tenchitiet )
            values ('$SanphamID', '$tensanpham', '$Anh', '$Gia', N'$Mota', '$tenchitiet' )";
            $query = mysqli_query($conn, $sql);
            move_uploaded_file($Anh_tmp, '../../../'.$Anh);
            header('location: /famms-1.0.0/admin/view/sanpham/index.php');
        }   
    ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h2 style="margin: 0 auto">Thêm sản phẩm</h2> 
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="TenSanPham" class="form-control">
                </div>

                <div class="form-group">
                                    <label for="formFile" class="form-label fw-bold">Chọn Ảnh :</label>
                                    <input class="form-control-file form-control height-auto" type="file" id="formFile" name="Anh" >
                                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="Gia" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="Mota" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Tên chi tiết</label>
                    <input type="text" name="tenchitiet" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
            
        </div>

    </div>

</div>