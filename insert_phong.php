
<?php
//them phong mời
if (isset($_POST['ma_phong_them1'])) {
	include 'conn.php';
	// kiêm tra ma phong đã tồng tại chưa
	$kt_maphong = mysqli_query($conn, "SELECT * FROM phong WHERE MA_PHONG = '" . $_POST['ma_phong_them1'] . "'");
	if (mysqli_num_rows($kt_maphong)) {
		echo "1";
	} else {
		// insert dữ liệu vào cơ sơ dữ liệu
		$insert_phong = "INSERT INTO phong(MA_PHONG, MA_LOAI_PHONG) VALUES ('$_POST[ma_phong_them1]','$_POST[ma_loai_phong]')";
		if (mysqli_query($conn, $insert_phong)) {
			echo "99";
		} else {
			echo "100";
		}
	}
}
// xóa dữ liệu phòng
if (isset($_POST['maphong_xoa_2'])) {
	include 'conn.php';
	// kiêm tra ma phong đã tồng tại chưa

	// insert dữ liệu vào cơ sơ dữ liệu
	$update_phong = "UPDATE phong SET xoa='1' WHERE MA_PHONG='$_POST[maphong_xoa_2]'";
	if (mysqli_query($conn, $update_phong)) {
		echo "99";
	} else {
		echo "100";
	}
}
// xóa loai thiet bi
if (isset($_POST['MA_LOAI_THIET_BI_XOA12'])) {
	include 'conn.php';

	// insert dữ liệu vào cơ sơ dữ liệu
	$update_ltb = "UPDATE loaithietbi SET XOA=1 WHERE loaithietbi.MA_LOAI_THIET_BI='$_POST[MA_LOAI_THIET_BI_XOA12]'";
	if (mysqli_query($conn, $update_ltb)) {
		echo "99";
	} else {
		echo "100";
	}
}

?>

