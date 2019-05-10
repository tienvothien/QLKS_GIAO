
<?php
//them nhân viên mời
if (isset($_POST['ma_nhanvien_them1'])) {
	// echo $_POST["sdt_nhanvien_them1"];
	include 'conn.php';
	// kiêm tra ma phong đã tồng tại chưa
	$kt_manhanvien = mysqli_query($conn, "SELECT * FROM nhanvienletan WHERE MA_NV = '" . $_POST['ma_nhanvien_them1'] . "'");
	if (mysqli_num_rows($kt_manhanvien)) {
		echo "1";
	} else {
		// insert dữ liệu vào cơ sơ dữ liệu
		$themnhanvien = "INSERT INTO nhanvienletan (MA_NV, HO_NV, TEN_NV, DIA_CHI, GIOI_TINH, NGAY_SINH, SDT, EMAIL) VALUES ('$_POST[ma_nhanvien_them1]','$_POST[ho_nhanvien_them1]','$_POST[ten_nhanvien_them1]','$_POST[diachi_nhanvien_them1]','$_POST[gt_nhanvien_them1]','$_POST[ngaysinh_nhanvien_them1]','$_POST[sdt_nhanvien_them1]','$_POST[email_nhanvien_them1]')";
		if (mysqli_query($conn, $themnhanvien)) {
			echo "999";
		} else {
			echo "1000";
		}
	}
}


?>
