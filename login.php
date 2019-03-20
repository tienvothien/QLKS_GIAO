<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Hệ Thống Quản Lý Khách Sạn</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login_css.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập hệ thống</h3>
				
			<div class="card-body">
				<form action="login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="tendangnhap" class="form-control" placeholder="Nhập tên" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="matkhau" class="form-control" placeholder="Nhập mật khẩu"required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="dangnhap" value="Đăng nhập" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Đăng nhập</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>

    <?php
              if (isset($_POST['dangnhap'])) 
              {
                $u=$p="";
                if($_POST['tendangnhap'] ==NULL)
                {
                  echo "Nhập tên đăng nhập <br/>";
                }else
                  {
                    $u=$_POST['tendangnhap'];
                  }
                  
                if($_POST['matkhau'] == "")
                {
                  echo "Nhập mật khẩu <br/>";
                }else     
                  {
                    $p=$_POST['matkhau'];
                  }
                
                if ($u && $p)
                {
                  include ("conn.php");
                  $sql="select * from taikhoan where tendangnhap='".$u."' and matkhau = '".$p."'";
                  $query=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_array($query);
                  if (mysqli_num_rows($query)) {
                    $tendangnhap = $row['tendangnhap'];
                    $capdotruycap=$row['capdotruycap'];
                    $MA_NV=$row['MA_NV'];

                    echo "$tendangnhap-----$capdotruycap";
                    session_start();
                    $_SESSION['tendangnhap']=$tendangnhap;
                    $_SESSION['capdotruycap']=$capdotruycap;
                    // $_SESSION['MA_NV']=$MA_NV;
                    $_SESSION['idtk']=$row['idtk'];
                    $_SESSION['kt_dn']=1;
                    header("location:index.php");
                  }
                  else{
                     echo "<script>
  alert('Đăng nhập thất bại');
</script>";
                    
                  }
                }
              }
              if (isset($_POST['thoat'])) {
                echo "bam nut thoat";
                header("location:index.php");
                exit();
              
              }
      ?>

</body>
</html>
