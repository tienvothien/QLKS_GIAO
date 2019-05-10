<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Quản lý nhân viên </title>
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
                <?php include 'menutren.php';?>
                <?php include 'menutrai.php';?>
               <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 benphai">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 chutieude">
                            <h2>Quản lý nhân viên</h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemnek " data-toggle="modal" data-target="#myModal">Thêm</button>
                        </div>
                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center">
                            <!-- nho doi ten class -->
                            <div id="dl_nhanvienks"><?php include 'dl_nhanvienks.php';?></div>

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
                                                    <input type="text" class="form-control " name="ma_nhanvien_them1" id="ma_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập mã nhân viên" name="manhanvien" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Họ nhân viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="ho_nhanvien_them1" id="ho_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập họ nhân viên" name="honhanvien" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Tên nhân viên</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="ten_nhanvien_them1" id="ten_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập tên nhân viên" required="">
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
                                                    <input type="date" class="form-control " name="ngaysinh_nhanvien_them1" id="ngaysinh_nhanvien_them1" style="text-transform: uppercase;" placeholder="chọn ngày sinh" required="">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Địa chỉ</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="diachi_nhanvien_them1" id="diachi_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập địa chỉ nhân viên" required="">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Sdt</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control " name="sdt_nhanvien_them1" id="sdt_nhanvien_them1" style="text-transform: uppercase;" placeholder="Nhập sdt nhân viên" required="" >
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="email" name="email_nhanvien_them1" id="email_nhanvien_them1" class="form-control" rows="1"  required="">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success  " onclick="themnhanvienbmoi();">Thêm </button>
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

<!-- Xoa thông tin nhân viên -->    
        <div id="xoattnhanvien_data_Modal" class="modal fade">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xóa thông tin nhân viên</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="xoa_thongtinnhanvien_form" data-confirm="Bạn có chắn muốn xóa thông tin này?">
                            <label>Mã nhân viên</label>
                            <input disabled type="text" name="manhanvienxoa1" id="manhanvienxoa1" class="form-control "style="text-transform: uppercase;" />

                            <br />
                            <label>Họ nhân viên</label>
                            <textarea  disabled  name="honhanvienxoa1" id="honhanvienxoa1" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                            <label>Tên nhân viên</label>
                            <textarea  disabled  name="tennhanvienxoa1" id="tennhanvienxoa1" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br>
                            <label>Giới tính</label>
                            <input disabled type="text" name="gioitinhnhanvienxoa1" id="gioitinhnhanvienxoa1" class="form-control "style="text-transform: uppercase;" />
                            <br>
                             <label>Ngày sinh</label>
                            <input disabled type="text" name="ngaysinhnhanvienxoa1" id="ngaysinhnhanvienxoa1" class="form-control "style="text-transform: uppercase;" />
                            <br>
                             <label>Địa chỉ</label>
                            <input disabled type="text" name="diachinhanvienxoa1" id="diachinhanvienxoa1" class="form-control "style="text-transform: uppercase;" />
                            <br>
                             <label>Số điện thoại</label>
                            <input disabled type="text" name="sdtnhanvienxoa1" id="sdtnhanvienxoa1" class="form-control "style="text-transform: uppercase;" />
                            <br>
                             <label>Email</label>
                            <input disabled type="text" name="emailnhanvienxoa1" id="emailnhanvienxoa1" class="form-control "style="text-transform: uppercase;" />
                            <br>

                            <input type="hidden" name="manhanvienxoa2" id="manhanvienxoa2" />
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
    </div>

<!-- Cập nhật thông tin nhân viên -->
        <div id="capnhat_ttnhanvien_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật thông tin nhân viên</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="capnhat_ttnhanvien" data-confirm="Bạn có chắn muốn cập nhật lại thông tin này?">
                            <label>Mã nhân viên</label>
                            <input disabled type="text" name="manhanvien_capnhat" id="manhanvien_capnhat" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Họ nhân viên</label>
                            <textarea   name="honhanvien_capnhat" id="honhanvien_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br />
                            <label>Tên nhân viên</label>
                            <textarea   name="tennhanvien_capnhat" id="tennhanvien_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br>
                            <label>Giới tính</label>
                                <select name="gtnhanvien_capnhat1" id="gtnhanvien_capnhat1" class="form-control" required="required">
                                    <option id="gtnhanvien_capnhat"></option>
                                    <option value="Nam">Nam</option>}
                                    <option value="Nu">Nữ</option>}                               
                                </select>                               
                            <br>
                            <label>Ngày sinh</label>
                            <textarea   name="ngaysinhnhanvien_capnhat" id="ngaysinhnhanvien_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br>
                            <label>Địa chỉ</label>
                            <textarea   name="diachinhanvien_capnhat" id="diachinhanvien_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br>
                            <label>Số điện thoại</label>
                            <input type="number" name="sdtnhanvien_capnhat" id="sdtnhanvien_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required="">
                            <br>
                            <label>Email</label>
                            <input type="email" name="email_capnhat" id="email_capnhat" class="form-control" rows="1"  required="">
                           
                            <br>
                            
                            <input type="hidden" name="manhanvien_capnhat2" id="manhanvien_capnhat2" />
                            <input type="hidden" name="thong_bao_loi_capnhat" id="thong_bao_loi_capnhat" />
                            <input type="submit" name="insert" id="insert" value="Cập nhật" name="sua_ttloaip_submit" class="btn btn-danger capnhattb" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở lại</button>
                    </div>
                </div>
            </div>
        </div>
