<?php
include 'ktdangnhap.php';
// xuất dữ liệu excel danh sách phòng
if (isset($_POST['xuatdanhsachphong12'])) {
	include 'conn.php';
	$output = '';
	$ketqua_qr = mysqli_query($conn, "SELECT phong.MA_PHONG, loaiphong.MA_LOAI_PHONG, loaiphong.TEN_LOAI_PHONG, loaiphong.DIEN_TICH, loaiphong.SL_NGUOI_O FROM phong INNER JOIN loaiphong ON phong.MA_LOAI_PHONG = loaiphong.MA_LOAI_PHONG WHERE phong.xoa =0 ORDER BY loaiphong.MA_LOAI_PHONG");
	if (mysqli_num_rows($ketqua_qr)) {
		$output .= '
			<table class="table table-hover table-bordered text-center table-striped">
						<thead class="thead-light">
								<tr>
										<th colspan="5" rowspan="" headers="" scope=""> Danh sách Phòng</th>
								</tr>
								<tr >
										<th class="text-center">STT</th>
										<th class="text-center">Số phòng</th>
										<th class="text-center">Loại phòng</th>
										<th class="text-center">Diện tích</th>
										<th class="text-center">Số người ở</th>
								</tr>
						</thead>
						<tbody>
				';
		$stt = 1;
		while ($row = mysqli_fetch_array($ketqua_qr)) {
			$output .= '
						<tr>
								<td>' . $stt . '</td>
								<td style=" text-transform: capitalize; text-align: center;">' . $row['MA_PHONG'] . '</td>
								<td style=" text-transform: capitalize; text-align: left;">' . $row['TEN_LOAI_PHONG'] . '</td>
								<td style=" text-transform: capitalize; text-align: center;">' . $row['DIEN_TICH'] . '</td>
								<td style=" text-transform: capitalize; text-align: center;">' . $row['SL_NGUOI_O'] . '</td>
						</tr>
								';
			$stt++;
		}
		$output .= '
				</tbody>
		</table>';
		header('Content-Type: application/xls');
		header('Content-Disposition: attachment; filename=dánhachohong.xls');
		echo $output;
	}
}
// xuất dánh sách thiết bị phòng
if (isset($_POST['xuatfile_danhsachthietbiphong'])) {
	include 'conn.php';
	$output = '';
	$ketqua_qr = mysqli_query($conn, "SELECT * FROM loaithietbi WHERE XOA =0");
	if (mysqli_num_rows($ketqua_qr)) {
		$output .= '
				<table class="table table-hover table-bordered text-center table-striped">
							<thead class="thead-light">
									<tr>
											<th colspan="3" rowspan="" headers="" scope=""> Danh sách Phòng</th>
									</tr>
									<tr >
											<th class="text-center">STT</th>
											<th class="text-center">Mã thiết  bị</th>
											<th class="text-center">Thiết bị</th>
										</tr>
								</thead>
								<tbody>
						';
		$stt = 1;
		while ($row = mysqli_fetch_array($ketqua_qr)) {
			$output .= '
								<tr>
										<td>' . $stt . '</td>
										<td style=" text-transform: capitalize; text-align: center;">' . $row['MA_LOAI_THIET_BI'] . '</td>
										<td style=" text-transform: capitalize; text-align: left;">' . $row['TEN_LOAI_THIET_BI'] . '</td>
								</tr>
										';
			$stt++;
		}
		$output .= '
						</tbody>
				</table>';
		header('Content-Type: application/xls');
		header('Content-Disposition: attachment; filename=danhsachthietbi.xls');
		echo $output;
	}
} 
?>
 