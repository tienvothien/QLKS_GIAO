<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title>Quản lý tài khoản </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>
    <script type="text/javascript" src="./js/ql_taikhoan.js"></script>
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
                            <h2>Quản lý tài khoản</h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemnek " data-toggle="modal" data-target="#myModal">Thêm</button>
                        </div>
                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center">
                            <!-- nho doi ten class -->
                            <div id="dl_quanlytaikhoan"><?php include 'dl_quanlytaikhoan.php';?></div>

                        
                        </div><!-- end thaydoi1 -->
                    </div><!-- end noidungthaydoi -->
                </div> <!-- end col-9 -->
            </div> <!-- end row noi dung -->
        </div>
    </div> <!-- end trang admin -->
</body>
</html>
<!-- hiện modal thêm tài khoản  -->
 <div class="modal fade " id="myModal" role="dialog">
    <div class="col-xs-11 col-sm-11 col-md-12 col-lg-12">
   
        <div class="modal-dialog modal-sm themtaikhoan">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title"><b>Thêm tài khoản</b></h3>
                </div>
                <div class="modal-body">
                    <form style="font-size: 20px; margin: auto;" class="form-horizontal"  id="form_themtaikhoan" name="form_themtaikhoan" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Tên đăng nhập</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control " name="tendn_tk" id="tendn_tk"  placeholder="Nhập họ nhân viên" name="honhanvien">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Mật khẩu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control " name="matkhau_tk" id="matkhau_tk"  placeholder="Nhập tên nhân viên" name="tennhanvien">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Cấp độ truy cập</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control " name="capdotruycap_tk" id="capdotruycap_tk"  placeholder="Nhập tên nhân viên" name="tennhanvien">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success  " onclick="themtaikhoan();">Thêm </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>                      
</div>

<!-- Xoa tài khoản -->    
        <div id="xoataikhoan_data_Modal" class="modal fade">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Xóa tài khoản</b></h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="xoa_taikhoan_form" data-confirm="Bạn có chắn muốn xóa thông tin này?">
                            <label>ID tài khoản</label>
                            <input disabled type="text" name="idtk_xoa1" id="idtk_xoa1" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Tên đăng nhập</label>
                            <input disabled type="text" name="tendangnhap_xoa1" id="tendangnhap_xoa1" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Mật khẩu</label>
                            <textarea  disabled  name="matkhau_xoa1" id="matkhau_xoa1" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                            <label>Cấp độ truy cập</label>
                            <textarea  disabled  name="capdotruycap_xoa1" id="capdotruycap_xoa1" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br>
                            <input type="hidden" name="idtk_xoa_2" id="idtk_xoa_2" />
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

<!-- Cập nhật thông tin tài khoản -->
        <div id="capnhat_taikhoan_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật thông tin nhân viên</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="capnhat_taikhoan_form" data-confirm="Bạn có chắn muốn cập nhật lại thông tin này?">
                            <label>ID tài khoản</label>
                            <input disabled type="text" name="idtaikhoan_capnhat" id="idtaikhoan_capnhat" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Tên đăng nhập</label>
                            <textarea   name="tendangnhap_capnhat" id="tendangnhap_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br />
                            <label>Mật khẩu</label>
                            <textarea   name="matkhau_capnhat" id="matkhau_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br />
                            <label>Cấp độ truy cập</label>
                            <input type="number" name="capdotruycap_capnhat" id="capdotruycap_capnhat" class="form-control" rows="1" style=" text-transform: capitalize;" required="">
                            <br>
                            <input type="hidden" name="idtaikhoan_capnhat2" id="idtaikhoan_capnhat2" />
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
