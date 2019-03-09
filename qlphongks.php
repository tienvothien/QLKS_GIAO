<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Hệ Thống Quản Lý Khách Sạn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>
    <script type="text/javascript" src="./js/qlphongks.js"></script>
    <link rel="stylesheet" href="./vendor/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
    <div class="trangadmin">
        <br>
        <div class="container-fluid">
            <div class="row">
                <?php include 'menutrai.php';?>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 benphai">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 chutieude">
                            <h2>Thống kê danh sách phòng  </h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemnek " data-toggle="modal" data-target="#myModal">Thêm phòng</button>
                        </div>
                         <div class="modal fade " id="myModal" role="dialog">
                <div class="modal-dialog modal-sm themphong">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Thêm phòng</h3>
                        </div>
                        <div class="modal-body">
                            <form style="font-size: 20px; margin: auto;" class="form-horizontal"  id="from_them_phong_moi" name="from_them_phong_moi" action="">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Mã phòng</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control " name="ma_phong_them1" id="ma_phong_them1" style="text-transform: uppercase;" placeholder="Nhập mã phòng" name="maphong">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="sel1">Loại phòng</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select_lp"  name="ma_loai_phong" id="ma_loai_phong">
                                            <option value="" >Chọn Loại phòng</option>
                                            <?php
include "conn.php";
$select = "select * from loaiphong";
$query = mysqli_query($conn, $select);
$num = mysqli_num_rows($query);
if ($num > 0) {
	while ($row = mysqli_fetch_array($query)) {
		$MA_LOAI_PHONG = $row['MA_LOAI_PHONG'];
		$TEN_LOAI_PHONG = $row['TEN_LOAI_PHONG'];
		echo "<option value='$MA_LOAI_PHONG'>$TEN_LOAI_PHONG</option>";
	}
} else {
	echo "<option value=''>k co du lieu</option>";
}
?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success  " onclick="themtbmoi();">Thêm phòng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center"><!-- nho doi ten class -->
                            <div class="dlphong" id="dlphong"><?php include 'qlphong.php';?></div>
                        </div><!-- end thaydoi1 -->
                        </div><!-- end noidungthaydoi -->
                        </div> <!-- end col-9 -->
                        </div> <!-- end row noi dung -->
                    </div>
                    </div> <!-- end trang admin -->
                </body>
            </html>
            <!-- Modal -->
