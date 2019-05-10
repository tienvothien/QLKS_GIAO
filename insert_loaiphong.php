<?php
//them loại phong mời
if (isset($_POST['maloaiphong_111'])) {
	include 'conn.php';
	// kiêm tra ma đã tồng tại chưa
	$kt_maloaiphong111 = mysqli_query($conn, "SELECT * FROM loaiphong WHERE MA_LOAI_PHONG = '" . $_POST['maloaiphong_111'] . "'");
	if (mysqli_num_rows($kt_maloaiphong111)) {
		echo "1";
	} else {
		// insert dữ liệu vào cơ sơ dữ liệu
		$them_loaiphong = "INSERT INTO loaiphong (MA_LOAI_PHONG, TEN_LOAI_PHONG,DIEN_TICH,SL_NGUOI_O) VALUES ('$_POST[maloaiphong_111]','$_POST[tenloaiphong_111]','$_POST[dientichphong_111]','$_POST[sl_nguoi_o_111]')";
		if (mysqli_query($conn, $them_loaiphong)) {
			echo "99";
		} else {
			echo "100";
		}
	}
}

// xóa dữ liệu loại phòng
if (isset($_POST['maloaiphongxoa_2'])) {
	include 'conn.php';
	// update dữ liệu vào cơ sơ dữ liệu
	$update_loaiphong = "UPDATE loaiphong SET xoa='1' WHERE MA_LOAI_PHONG='$_POST[maloaiphongxoa_2]'";
	if (mysqli_query($conn, $update_loaiphong)) {
		echo "99";
	} else {
		echo "100";
	}
}
?>