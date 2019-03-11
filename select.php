<?php
// lấy dữ liệu phòng để xem chi tiết
if (isset($_POST["ma_phong_chitiet"])) {
	$output = '';
	include 'conn.php';
	$result = mysqli_query($conn, "SELECT * FROM phong,loaiphong WHERE phong.MA_LOAI_PHONG=loaiphong.MA_LOAI_PHONG and MA_PHONG = '" . $_POST["ma_phong_chitiet"] . "'");
	if (mysqli_num_rows($result)) {
		$output .= '
      <div class="table-responsive">
           <table class="table table-bordered table-hover">';
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
                <tr>
                     <td width="30%"><label>Số phòng</label></td>
                     <td width="70%" style="text-transform: uppercase;">' . $row["MA_PHONG"] . '</td>
                </tr>
                <tr>
                     <td width="30%"><label>Loại phòng</label></td>
                     <td width="70%" style=" text-transform: capitalize;">' . $row["TEN_LOAI_PHONG"] . '</td>
                </tr>

                <tr>
                     <td width="30%"><label>Diện tích phòng</label></td>
                     <td width="70%" style=" text-transform: capitalize;">' . $row["DIEN_TICH"] . '</td>
                </tr>
                <tr>
                     <td width="30%"><label>SỐ người ở</label></td>
                     <td width="70%" style=" text-transform: capitalize;">' . $row["SL_NGUOI_O"] . '</td>
                </tr>
                <tr>
                     <td width="30%"><label>Video</label></td>
                     <td width="70%" height="100px" style=" text-transform: capitalize;">' . $row["VIDEO"] . ' <iframe src="https://www.youtube.com/embed/g_ipmHUHxgc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                </tr>



           ';
		}
		$output .= '
           </table>
      </div>
      ';
		echo $output;
	} else {
		echo "Chưa có dữ liệu";
	}

}
?>
