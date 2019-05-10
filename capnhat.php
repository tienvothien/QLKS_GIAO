<?php 
//Cập nhật thông tin loại phòng
	if (isset($_POST['ma_loaiphong_sua_111'])) {
		include"conn.php";
		$ma_loaiphong_sua_111=$_POST['ma_loaiphong_sua_111'];
		$tenloaiphongsua_111=$_POST['tenloaiphongsua_111'];
		$dientichphongsua=$_POST['dientichphongsua'];
		$slnguoiosua=$_POST['slnguoiosua'];
		$kt_loaip=mysqli_query($conn,"SELECT * FROM loaiphong WHERE loaiphong.MA_LOAI_PHONG != '$ma_loaiphong_sua_111' AND loaiphong.TEN_LOAI_PHONG='$tenloaiphongsua_111'");
		if (mysqli_num_rows($kt_loaip)) {
			echo "1";
		}else{
			$capnhat_lp="UPDATE loaiphong SET TEN_LOAI_PHONG='$tenloaiphongsua_111',DIEN_TICH='$dientichphongsua',SL_NGUOI_O='$slnguoiosua' WHERE loaiphong.MA_LOAI_PHONG='$ma_loaiphong_sua_111'";
			if (mysqli_query($conn,$capnhat_lp)) {
				echo "99";
			}else{
				echo "100";
			}
		}

	}

//Cập nhât thông tin nhân viên
	if (isset($_POST['manhanvien_capnhat2'])) {
		include"conn.php";
		 $manhanvien_capnhat2=$_POST['manhanvien_capnhat2'];
		 $honhanvien_capnhat=$_POST['honhanvien_capnhat'];
		 $tennhanvien_capnhat=$_POST['tennhanvien_capnhat'];
		 $gtnhanvien_capnhat=$_POST['gtnhanvien_capnhat1'];
		 $ngaysinhnhanvien_capnhat=$_POST['ngaysinhnhanvien_capnhat'];
		 $diachinhanvien_capnhat=$_POST['diachinhanvien_capnhat'];
		 $sdtnhanvien_capnhat=$_POST['sdtnhanvien_capnhat'];
		 $email_capnhat=$_POST['email_capnhat'];
		$kt_ttnhanvien_capnhat=mysqli_query($conn,"SELECT * FROM nhanvienletan WHERE nhanvienletan.MA_NV != '$manhanvien_capnhat2' AND nhanvienletan.SDT ='$sdtnhanvien_capnhat' ");
		if (mysqli_num_rows($kt_ttnhanvien_capnhat)) {
			echo "1";
		}else{
			$capnhat_ttnhanvien="UPDATE nhanvienletan SET HO_NV='$honhanvien_capnhat',TEN_NV='$tennhanvien_capnhat', GIOI_TINH='$gtnhanvien_capnhat', NGAY_SINH='$ngaysinhnhanvien_capnhat', DIA_CHI='$diachinhanvien_capnhat', SDT='$sdtnhanvien_capnhat', EMAIL='$email_capnhat' WHERE nhanvienletan.MA_NV='$manhanvien_capnhat2'";
			if (mysqli_query($conn,$capnhat_ttnhanvien)) {
				echo "99";
			}else{
				echo "100";
			}
		}

	}

//Cập nhât tài khoản
	if (isset($_POST['idtaikhoan_capnhat2'])) {
		include"conn.php";
		 $idtaikhoan_capnhat2=$_POST['idtaikhoan_capnhat2'];
		 $tendangnhap_capnhat=$_POST['tendangnhap_capnhat'];
		 $matkhau_capnhat=$_POST['matkhau_capnhat'];
		 $capdotruycap_capnhat=$_POST['capdotruycap_capnhat'];
		 
		$kt_taikhoan_capnhat=mysqli_query($conn,"SELECT * FROM taikhoan WHERE taikhoan.idtk !='$idtaikhoan_capnhat2' AND taikhoan.tendangnhap = '$tendangnhap_capnhat' ");
		if (mysqli_num_rows($kt_taikhoan_capnhat)) {
			echo "1";
		}else{
			$capnhat_taikhoan="UPDATE taikhoan SET tendangnhap='$tendangnhap_capnhat',matkhau='$matkhau_capnhat', capdotruycap='$capdotruycap_capnhat' WHERE taikhoan.idtk='$idtaikhoan_capnhat2'";
			if (mysqli_query($conn,$capnhat_taikhoan)) {
				echo "99";
			}else{
				echo "100";
			}
		}

	}

 ?>