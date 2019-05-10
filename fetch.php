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
// hiên thông tin thiết bị
if (isset($_POST["ma_thietbicapnhat"])) {
	include 'conn.php';
	$query = "SELECT * FROM loaithietbi WHERE loaithietbi.MA_LOAI_THIET_BI ='$_POST[ma_thietbicapnhat]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin loại phòng xóa
if (isset($_POST["xoamaloaiphong222"])) {
	include 'conn.php';
	$query = "SELECT * FROM loaiphong WHERE loaiphong.MA_LOAI_PHONG ='$_POST[xoamaloaiphong222]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin cần cập nhật loại phòng
if (isset($_POST["maloaiphongsua_111"])) {
	include 'conn.php';
	$query = "SELECT * FROM loaiphong WHERE loaiphong.MA_LOAI_PHONG ='$_POST[xoamaloaiphong222]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin nhân viên cần xóa
if (isset($_POST["manhanvienxoa1"])) {
	include 'conn.php';
	$query = "SELECT * FROM nhanvienletan WHERE nhanvienletan.MA_NV ='$_POST[manhanvienxoa1]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin nhân viên cần cập nhật
if (isset($_POST["manhanvien_capnhat"])) {
	include 'conn.php';
	$query = "SELECT * FROM nhanvienletan WHERE nhanvienletan.MA_NV ='$_POST[manhanvien_capnhat]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin tài khoản cần xóa
if (isset($_POST["idtk_xoa1"])) {
	include 'conn.php';
	$query = "SELECT * FROM taikhoan WHERE taikhoan.idtk = '$_POST[idtk_xoa1]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}

//hiện thông tin tài khoản cần cập nhật
if (isset($_POST["idtaikhoan_capnhat"])) {
	include 'conn.php';
	$query = "SELECT * FROM taikhoan WHERE taikhoan.idtk ='$_POST[idtaikhoan_capnhat]'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
}
?>