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
                <?php include 'menutren.php';?>
                <?php include 'menutrai.php';?>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 benphai">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 chutieude">
                            <h2>Danh sách phòng  </h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemnek " data-toggle="modal" data-target="#myModal">Thêm phòng</button>
                        </div>
                        <!-- hiện modal them phonf -->
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
                        <!-- ket thuc modal them -->
                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center"><!-- nho doi ten class -->
                            <!-- nội dung thay đổi-->
                        <div class="dlphong" id="dlphong"><?php include 'dlphong.php';?></div>
                        <!-- kết thúc nội dung thay dổi -->
                        </div><!-- end thaydoi1 -->
                        </div><!-- end noidungthaydoi -->
                        </div> <!-- end col-9 -->
                        </div> <!-- end row noi dung -->
                    </div>
                    </div> <!-- end trang admin -->
                </body>
            </html>
            <!-- Modal -->
            <!-- modal hiện thông tin chi tiết -->
            <div id="views_phong" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Chi tiết về phòng</h4>
                    </div>
                    <div class="modal-body" id="employee_detail2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở về</button>
                    </div>
                </div>
            </div>
        </div>
<!-- kết thúc modal hiện thông tin chi tiết -->
<!-- Câp nhat lại thong tin thiêt bị -->
        <div id="chitiet_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật thông tin Phòng</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="insert_form" data-confirm="Bạn có chắn muốn cập nhật lại thông tin này?">
                            <label>Mã Phòng</label>
                            <input disabled type="text" name="ma_phong_sua" id="ma_phong_sua" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Tên Phòng</label>
                            <textarea di  name="ten_loai_phong_sua" id="ten_loai_phong_sua" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                            <input type="hidden" name="ma_phong_sua_1" id="ma_phong_sua_1" />
                            <input type="hidden" name="thong_bao_loi_capnhat" id="thong_bao_loi_capnhat" />
                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-danger capnhattb" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở lại</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Xoa thiêt bị -->
        <div id="xoa_maphong_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xóa phòng</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="xoa_phong_form" data-confirm="Bạn có chắn muốn xóa thông tin này?">
                            <label>Mã Phòng</label>
                            <input disabled type="text" name="ma_phong_xoa_2" id="ma_phong_xoa_2" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Tên Phòng</label>
                            <textarea disabled=""  name="ten_loai_phong_xoa_2" id="ten_loai_phong_xoa_2" class="forsm-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                            <input type="hidden" name="maphong_xoa_2" id="maphong_xoa_2" />
                            <input type="hidden" name="thong_bao_loi_capnhat" id="thong_bao_loi_capnhat" />
                            <input type="submit" name="insert1" id="insert1" value="Xóa" class="btn btn-danger"  />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở lại</button>
                    </div>
                </div>
            </div>
        </div>