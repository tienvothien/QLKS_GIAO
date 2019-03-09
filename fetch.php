 <?php
//hiện thông tin cần cập nhật
if (isset($_POST["ma_phong_sua"])) {
	include 'conn.php';
	$query = "SELECT * FROM phong,loaiphong WHERE phong.MA_LOAI_PHONG=loaiphong.MA_LOAI_PHONG and MA_PHONG = '" . $_POST["ma_phong_sua"] . "'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

?>