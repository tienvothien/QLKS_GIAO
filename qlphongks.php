<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản Lý phòng Khách Sạn</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/1.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include 'menutop.php'; ?>
            <?php include 'menutrai.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thống kê danh sách phòng  
                            
                            <!-- <a href="themphong.php"  <button type="button" class="btn btn-primary">Thêm phòng</button></a> -->
                        
                       
                          <button type="button" class="btn btn-info btn-lg nutthemnek" data-toggle="modal" data-target="#myModal">Thêm phòng</button>

                              <!-- Modal -->
                              <div class="modal fade " id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm themphong">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h3 class="modal-title">Thêm phòng</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form style="font-size: 20px; margin: auto;" class="form-horizontal" action="themphong.php">
                                            <div class="form-group">
                                              <label class="control-label col-sm-4" for="email">Mã phòng</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control "  placeholder="Nhập mã phòng" name="maphong">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                  <label class="control-label col-sm-4" for="sel1">Loại phòng</label>
                                                  <div class="col-sm-8">
                                                  <select class="form-control select_lp" id="sel1">
                                                    <option>Chọn Loại phòng</option>
                                                    <?php 
                                                       include("conn.php");
                                                          $select="select * from loaiphong";
                                                          $query=mysqli_query($conn,$select);
                                                          $num = mysqli_num_rows($query);
                                                            if ($num>0) {
                                                                         while($row=mysqli_fetch_array($query)){
                                                                            $MA_LOAI_PHONG=$row['MA_LOAI_PHONG'];                    
                                                                            $TEN_LOAI_PHONG=$row['TEN_LOAI_PHONG'];                   
                                                                            echo "<option value='$MA_LOAI_PHONG'>$TEN_LOAI_PHONG</option>";                    
                                                                             }                   
                                                                                 }           
                                                                                 else{           
                                                                                      echo "<option value=''>k co du lieu</option>";          
                                                                             }                                      
                                                     ?>                                
                                                  </select>
                                                  
                                                  </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="control-label col-sm-4" for="pwd">Diện tích</label>
                                              <div class="col-sm-8">          
                                                <input type="password" class="form-control" id="pwd" placeholder="Đơn vị mét vuông" name="pwd">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="control-label col-sm-4" for="pwd">Số lượng người ở</label>
                                              <div class="col-sm-8">          
                                                <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
                                              </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-default  ">Thêm phòng</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div></h1>
                <!-- /.row -->
                <!-- phẩn noi dung -->
                <div class="row">
                    <?php include 'qlphong.php'; ?>
                </div>  

                <!-- ket thuc phan noi dung -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>


