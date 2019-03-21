 <?php
//hiện thông tin cần cập nhật
if (isset($_POST["ma_phong_sua"])) {
	include 'conn.php';
	$query = "SELECT * FROM phong,loaiphong WHERE phong.MA_LOAI_PHONG=loaiphong.MA_LOAI_PHONG and MA_PHONG = '" . $_POST["ma_phong_sua"] . "'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}
//hiện thông tinthiet bi xoa
if (isset($_POST["MA_LOAI_THIET_BI_XOA"])) {

	include 'conn.php';
	$query = "SELECT * FROM loaithietbi WHERE loaithietbi.MA_LOAI_THIET_BI ='$_POST[MA_LOAI_THIET_BI_XOA]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}
//hiện thông  từng thiết bị trong loại hong
if (isset($_POST["matblp_chitiet123"])) {

	include 'conn.php';
	$query = "SELECT cothietbi.idctb, loaiphong.MA_LOAI_PHONG, loaithietbi.MA_LOAI_THIET_BI, loaithietbi.TEN_LOAI_THIET_BI FROM cothietbi, loaiphong, loaithietbi WHERE cothietbi.MA_LOAI_PHONG = loaiphong.MA_LOAI_PHONG AND cothietbi.MA_LOAI_THIET_BI = loaithietbi.MA_LOAI_THIET_BI AND loaiphong.MA_LOAI_PHONG ='$_POST[matblp_chitiet123]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}


//hiện thông tin thiết bị cần cập nhật lại
if (isset($_POST["ma_thietbicapnhat"])) {
	include 'conn.php';
	$query = "SELECT * FROM loaithietbi WHERE MA_LOAI_THIET_BI = '$_POST[ma_thietbicapnhat]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

?>