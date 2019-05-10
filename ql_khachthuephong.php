<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
    <title> Quản lý khách thuê phòng </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./vendor/bootstrap.js"></script>
    <script type="text/javascript" src="./js/ds_khachthuephong.js"></script>
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
                            <h2>Quản lý khách thuê phòng</h2>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right ">
                            <button type="button" class="btn btn-info them_ktphong" data-toggle="modal" data-target="#myModal" id="<?php echo $row['MA_PHONG']; ?>" >Thêm</button>
                        </div>
                    </div>
                    <hr class="ngay_ad">
                    <div id="dl_dskhachthuephong"><?php include 'dl_dskhachthuephong.php';?></div>
                        <!-- ket thuc modal them -->
                        </div><!-- end thaydoi1 -->
                        
              
                    </div><!-- end noidungthaydoi -->
                </div> <!-- end col-9 -->
            </div> <!-- end row noi dung -->
       
</body>
</html>

<!-- hiện modal them thông tin khách thuê phòng -->
    <div class="modal fade " id="myModal" role="dialog">
        <div class="modal-dialog modal-sm themthongtinkhachdatphong">
            <div class="modal-content tt_khachtp">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Thêm thông tin khách thuê phòng</h3>
                </div>
                <div class="modal-body">
                    <form style="font-size: 20px; margin: auto;" class="form-horizontal"  id="form_them_khachhang" name="form_them_khachhang" action="">
                         <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Mã khách hàng</label>
                                <div class="col-sm-8">
<input disabled type="text" name="ma_khachhang" id="ma_khachhang" class="form-control "style="text-transform: uppercase;" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="sel1">Phòng</label>
                                <div class="col-sm-8">
                                    <select class="form-control select_lp"  name="masophong_thue" id="masophong_thue">
                                        <option value="" >Chọn số phòng</option>
                                            <?php
                                                include "conn.php";
                                                $select = "select * from phong";
                                                $query = mysqli_query($conn, $select);
                                                 $num = mysqli_num_rows($query);
                                                    if ($num > 0) {
                                                        while ($row = mysqli_fetch_array($query)) {
                                                            $MA_PHONG = $row['MA_PHONG'];
                                                            echo "<option value='$MA_PHONG'>$MA_PHONG</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>k co du lieu</option>";
                                                }
                                            ?>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Số CMND</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="so_cmnd" id="so_cmnd" style="text-transform: uppercase;" >
                                </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Họ khách hàng</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="ho_khachhang" id="ho_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Tên khách hàng</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="ten_khachhang" id="ten_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Giới tính</label>
                                <div class="col-sm-8">
                                    <select name="gioitinh_khachhang" id="gioitinh_khachhang" class="form-control" required="required">
                                        <option value="">Chọn giới tính</option>
                                        <option value="Nam">Nam</option>}
                                        <option value="Nữ">Nữ</option>}
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Ngày sinh</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control " name="ngaysinh_khachhang" id="ngaysinh_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Quốc tịch</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="quoctich_khachhang" id="quoctich_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Địa chỉ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="diachi_khachhang" id="diachi_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="email">Sdt</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control " name="sdt_khachhang" id="sdt_khachhang" style="text-transform: uppercase;" >
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success themkhachhang " onclick="themkhachhang();">Thêm khách hàng </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- modal hiện thông tin chi tiết -->
            <div id="chitiet_khachhang" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content ttkhach">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Chi tiết thông tin khách thuê phòng</h4>
                    </div>
                    <div class="modal-body" id="employee_detail2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Trở về</button>
                    </div>
                </div>
            </div>
        </div>