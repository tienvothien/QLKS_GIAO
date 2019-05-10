<?php 
// xóa dữ liệu thông tin nhân viên
if (isset($_POST['manhanvienxoa2'])) {
	include 'conn.php';
	// update dữ liệu vào cơ sơ dữ liệu
	$upd_nhanvien = "UPDATE nhanvienletan SET xoa='1' WHERE MA_NV='$_POST[manhanvienxoa2]'";
	if (mysqli_query($conn, $upd_nhanvien)) {
		echo "99";
	} else {
		echo "100";
	}
}

//Thêm tài khoản
if (isset($_POST['tendn_tk'])) {
	include 'conn.php';
	// kiêm tra ma đã tồng tại chưa
	$kt_tk = mysqli_query($conn, "SELECT * FROM taikhoan WHERE taikhoan.tendangnhap = '" . $_POST['tendn_tk'] . "'");
	if (mysqli_num_rows($kt_tk)) {
		echo "1";
	} else {
		// insert dữ liệu vào cơ sơ dữ liệu
		$them_tk = "INSERT INTO taikhoan (tendangnhap, matkhau, capdotruycap) VALUES ('$_POST[tendn_tk]','$_POST[matkhau_tk]','$_POST[capdotruycap_tk]')";
		if (mysqli_query($conn, $them_tk)) {
			echo "99";
		} else {
			echo "100";
		}
	}
}

// xóa tài khoản
if (isset($_POST['idtk_xoa_2'])) {
	include 'conn.php';
	// update dữ liệu vào cơ sơ dữ liệu
	$upd_nhanvien = "UPDATE taikhoan SET xoa='1' WHERE idtk='$_POST[idtk_xoa_2]'";
	if (mysqli_query($conn, $upd_nhanvien)) {
		echo "99";
	} else {
		echo "100";
	}
}
 ?>