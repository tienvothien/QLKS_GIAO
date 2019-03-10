<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Hệ thông KTX ĐH Kiên Giang </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>
    <script type="text/javascript" src="./js/ql_nhanvien.js"></script>
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
                            <h2>Quản lý nhân viên</h2>
                        </div>

                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center"><!-- nho doi ten class -->
                            <div id="dl_nhanvienks"><?php include 'dl_nhanvienks.php'; ?></div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemnek " data-toggle="modal" data-target="#myModal">Thêm phòng</button>
                        </div>
                        <!-- hiện modal them phonf -->
                        <div class="modal fade " id="myModal" role="dialog">
                            <div class="modal-dialog modal-sm themphong">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Thêm nhân viên lễ tân</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form style="font-size: 20px; margin: auto;" class="form-horizontal"  id="from_them_nhanvien_moi" name="from_them_phong_moi" action="">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Mã nhân viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="ma_nhanvien_them1" id="ma_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập mã nhân viên" name="manhanvien">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Họ nhân viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="ho_nhanvien_them1" id="ho_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập họ nhân viên" name="honhanvien">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Tên nhân viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="ten_nhanvien_them1" id="ten_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập tên nhân viên" name="tennhanvien">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Giới tính</label>
                                                <div class="col-sm-8">
                                                    <select name="gt_nhanvien_them1" id="gt_nhanvien_them1" class="form-control" required="required">
                                                        <option value="">Chọn giới tính</option>
                                                        <option value="Nam">Nam</option>}
                                                        <option value="Nữ">Nữ</option>}
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Ngày sinh</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control " name="ngaysinh_nhanvien_them1" id="ngaysinh_nhanvien_them1" style="text-transform: uppercase;" placeholder="chọn ngày sinh" name="datanhanvien">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Địa chỉ</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="diachi_nhanvien_them1" id="diachi_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập địa chỉ nhân viên" name="diachinhanvien">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Sdt</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="sdt_nhanvien_them1" id="sdt_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập sdt nhân viên" name="sdtnhanvien">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control " name="email_nhanvien_them1" id="email_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập email nhân viên" name="emailnhanvien">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success  " onclick="themnhanvienbmoi();">Thêm phòng</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ket thuc modal them -->
                        </div><!-- end thaydoi1 -->
                    </div><!-- end noidungthaydoi -->
                </div> <!-- end col-9 -->
            </div> <!-- end row noi dung -->
        </div>
    </div> <!-- end trang admin -->
</body>
</html>