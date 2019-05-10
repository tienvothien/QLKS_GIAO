
<?php
//them nhân viên mời
if (isset($_POST['masophong_thue'])) {
	include 'conn.php';
	// kiêm tra ma phong đã tồng tại chưa
	$kt_makhachhang = mysqli_query($conn, "SELECT * FROM ophong, phong, khachhang1 WHERE ophong.MA_PHONG = phong.MA_PHONG AND khachhang1.MA_KH = ophong.MA_KH AND phong.MA_PHONG = '" . $_POST['masophong_thue'] . "'");
	if (mysqli_num_rows($kt_makhachhang)) {
		echo "1";
	} else {
		// insert dữ liệu vào cơ sơ dữ liệu
		$themkhachhang = "INSERT INTO khachhang and phong (MA_PHONG, HO_KH, TEN_KH, DIA_CHI,SO_CMND, GIOI_TINH, NGAY_SINH, DIA_CHI, SDT) VALUES ('$_POST[masophong_thue]','$_POST[so_cmnd]','$_POST[ho_khachhang]','$_POST[ten_khachhang]','$_POST[gioitinh_khachhang]','$_POST[ngaysinh_khachhang]','$_POST[diachi_khachhang]','$_POST[sdt_khachhang]')";
		if (mysqli_query($conn, $themkhachhang)) {
			echo "99";
		} else {
			echo "100";
		}
	}
}


?>