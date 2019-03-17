<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Hệ thông quản lý khách sạn</title>
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
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right" >

                            

                                        <button type="button" class="btn btn-info btn-lg themtb" data-toggle="modal" data-target="#myModal">Thêm</button>

                                             <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Thêm loại thiết bị</h4>
                                                </div>
                                                <div class="modal-body">
                                                  
                                                    <form style="font-size: 20px; margin: auto;" class="form-horizontal" action="themthietbi.php">
                                                        <div class="form-group">
                                                          <label class="control-label col-sm-4" for="email">Mã loại thiết bị</label>
                                                          <div class="col-sm-8">
                                                            <input type="text" class="form-control " id="them_ma_tb"  placeholder="Nhập mã loại thiết bị" name="mathietbi">
                                                          </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                          <label class="control-label col-sm-4" for="pwd">Tên loại thiết bị</label>
                                                          <div class="col-sm-8">          
                                                            <input type="text" class="form-control" id="them_loai_tb" placeholder="Nhập tên loại thiết bị" name="tenthietbi">
                                                          </div>
                                                        </div>
                                                        
                                                    </form>

                                                </div>
                                                <div class="modal-footer"> 
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-success  " onclick="themtb();">Thêm</button>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                    

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

<!-- Xóa thiết bị -->
 <div id="xoatb_data_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xóa thiết bị</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="xoa_phong_form" data-confirm="Bạn có chắn muốn xóa thông tin này?">
                            <label>Mã Thiết bị</label>
                            <input disabled type="text" name="matb_xoa" id="matb_xoa" class="form-control "style="text-transform: uppercase;" />
                            
                            <br />
                            <label>Tên thiết bị</label>
                            <textarea   name="tentb_xoa" id="tentb_xoa" class="form-control" rows="1" style=" text-transform: capitalize;"></textarea>
                            <br />
                          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở lại</button>
                        <button type="Submit" class="btn btn-primary" data-dismiss="modal">Xóa</button>
                    </div>
                </div>
            </div>
        </div>