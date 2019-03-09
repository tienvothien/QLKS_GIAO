
<?php
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
?>
