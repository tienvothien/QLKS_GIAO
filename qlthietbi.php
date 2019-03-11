<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Hệ thông KTX ĐH Kiên Giang </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>
    <script type="text/javascript" src="./js/1.js"></script>
    <link rel="stylesheet" href="./vendor/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
    <div class="trangadmin">
        <br>
        <div class="container-fluid">
            <div class="row">
                <?php include 'menutren.php';?>
                <?php include 'menutrai.php';?>
               <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 benphai">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 chutieude">
                            <h2>Quản lý thiết bị</h2>
                        </div>

                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center"><!-- nho doi ten class -->
                            <!-- phan62 noi65 duung -->
                                <div id="dlthietbi"><?php include 'dlthietbi.php'; ?></div>
                            <!-- ket thuc noi dung -->
                        </div><!-- end thaydoi1 -->
                    </div><!-- end noidungthaydoi -->
                </div> <!-- end col-9 -->
            </div> <!-- end row noi dung -->
        </div>
    </div> <!-- end trang admin -->
</body>
</html>