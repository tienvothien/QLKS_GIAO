<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title>Quản lý loại phòng </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>

    <script type="text/javascript" src="./js/ql_loaiphong.js"></script>

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
                            <h2>Danh sách loại phòng loại phòng</h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info btn-lg nutthemloaiphong " data-toggle="modal" data-target="#myModal">Thêm</button>
                        </div>
                    </div>
                    <hr class="ngay_ad">
                    <div class="container-fluid noidungthaydoi">
                        <div class="row thaydoi1 text-center"><!-- nho doi ten class -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div id="dl_loaiphong"><?php include 'dl_loaiphong.php';?></div>
                            </div>
                        </div><!-- end thaydoi1 -->
                        
                    </div><!-- end noidungthaydoi -->
                </div> <!-- end col-9 -->
            </div> <!-- end row noi dung -->
        </div>
    </div> <!-- end trang admin -->
</body>
</html>
<!-- Thêm loại phòng -->
<div class="modal fade " id="myModal" role="dialog">
                            <div class="modal-dialog modal-sm themloaiphong">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Thêm phòng</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form style="font-size: 20px; margin: auto;" class="form-horizontal"  id="themloaiphong_111" name="themloaiphong_111" action="">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Mã loại phòng</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="maloaiphong_111" id="maloaiphong_111" style="text-transform: uppercase;" placeholder="Nhập mã loại phòng" name="maphong">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Tên loại phòng</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control " name="tenloaiphong_111" id="tenloaiphong_111" style="text-transform: uppercase;" placeholder="Nhập tên loại phòng" name="maphong">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Diện tích</label>
                                                <div class="col-sm-8">
                                                    <select name="dientichphong_111" id="dientichphong_111" class="form-control" required="required">
                                                        <option value="">Chọn diện tích phòng</option>
                                                        <option value="20m2">20m2</option>}
                                                        <option value="25m2">25m2</option>}
                                                        <option value="30m2">30m2</option>}
                                                    </select>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="control-label col-sm-4" for="email">Số lượng người ở</label>
                                                <div class="col-sm-8">
                                                    <select name="sl_nguoi_o_111" id="sl_nguoi_o_111" class="form-control" required="required">
                                                        <option value="">Chọn số lượng người ở</option>
                                                        <option value="2">2</option>}
                                                        <option value="4">4</option>}
                                                        <option value="6">6</option>}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" onclick="themloaiphong111();">Thêm loại phòng</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ket thuc modal them -->

<!-- Xoa loai phòng -->    
        <div id="xoaloaiphong_data_Modal" class="modal fade">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xóa loại phòng</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="xoa_loaiphong_form" data-confirm="Bạn có chắn muốn xóa thông tin này?">
                            <label>Mã loại Phòng</label>
                            <input disabled type="text" name="xoamaloaiphong222" id="xoamaloaiphong222" class="form-control "style="text-transform: uppercase;" />

                            <br />
                            <label>Tên Phòng</label>
                            <textarea  disabled  name="xoatenloaiphong222" id="xoatenloaiphong222" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                            <label>Diện tích</label>
                            <textarea  disabled  name="dientichphongxoa222" id="dientichphongxoa222" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br>
                            <label>Số lượng người ở</label>
                            <input disabled type="text" name="slnguoixoa222" id="slnguoixoa222" class="form-control "style="text-transform: uppercase;" />
                            <br>
                            <input type="hidden" name="maloaiphongxoa_2" id="maloaiphongxoa_2" />
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

<!-- Câp nhat lại thong tin thiêt bị -->
        <div id="chitiet_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật thông tin Phòng</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="sua_ttlp1" data-confirm="Bạn có chắn muốn cập nhật lại thông tin này?">
                            <label>Mã loại Phòng</label>
                            <input disabled type="text" name="maloaiphongsua_111" id="maloaiphongsua_111" class="form-control "style="text-transform: uppercase;" />
                            <br />
                            <label>Tên loại Phòng</label>
                            <textarea   name="tenloaiphongsua_111" id="tenloaiphongsua_111" class="form-control" rows="1" style=" text-transform: capitalize;" required=""></textarea>
                            <br>
                            <label>Diện tích ( Đơn vị m2)</label>
                            <select name="dientichphongsua" id="dientichphongsua" class="form-control" required="required">
                                <option value="" id="dientichsua_111"></option>
                                <?php for ($i=10; $i <101 ; $i++) { 
                                   echo "<option value='$i'>$i</option>";
                                } ?>
                                
                               
                            </select>
                            <br>
                            <label>Số lượng người ở</label>
                             <select name="slnguoiosua" id="slnguoiosua" class="form-control" required="required">
                                <option value="" id="slnguoisua222"></option>
                                <?php for ($i=1; $i <11 ; $i++) { 
                                   echo "<option value='$i'>$i</option>";
                                } ?>
                            </select>
                            <br>
                            
                            <input type="hidden" name="ma_loaiphong_sua_111" id="ma_loaiphong_sua_111" />
                            <input type="hidden" name="thong_bao_loi_capnhat" id="thong_bao_loi_capnhat" />
                            <input type="submit" name="insert" id="insert" value="Cập nhật" name="sua_ttloaip_submit" class="btn btn-danger capnhattb" />
                        </form>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở lại</button>
                    </div>
                </div>
            </div>
        </div>#