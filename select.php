<?php
// lấy dữ liệu phòng để xem chi tiết
if (isset($_POST["ma_phong_chitiet"])) {
	$output = '';
	include 'conn.php';
	$result = mysqli_query($conn, "SELECT * FROM phong,loaiphong WHERE phong.MA_LOAI_PHONG=loaiphong.MA_LOAI_PHONG  and phong.MA_PHONG = '" . $_POST["ma_phong_chitiet"] . "'");
	if (mysqli_num_rows($result)) {
		$output .= '
      <div class="table-responsive">
           <table class="table table-bordered table-hover">';
		$so1 = 1;
		while ($row = mysqli_fetch_array($result)) {
			$tb = (mysqli_query($conn, "SELECT * FROM cothietbi, loaithietbi WHERE cothietbi.MA_LOAI_THIET_BI = loaithietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG = '" . $row["MA_LOAI_PHONG"] . "'"));
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
                  <tr>
                     <td width="30%"><label>Thiết bị</label></td>
                     <td width="70%" style=" text-transform: capitalize;">';

			while ($r1 = mysqli_fetch_array($tb)) {
				$output .= $so1 . '   ' . $r1["TEN_LOAI_THIET_BI"] . '. <br>';
				$so1++;

			}

			$output .= '</td>
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
// lấy dữ liệu tb lp  để xem chi tiết
if (isset($_POST["matblp_chitiet"])) {
	$output = '';
	include 'conn.php';

	$result = mysqli_query($conn, "SELECT cothietbi.MA_LOAI_PHONG,loaiphong.TEN_LOAI_PHONG, cothietbi.MA_LOAI_THIET_BI, loaithietbi.TEN_LOAI_THIET_BI FROM cothietbi, loaithietbi,loaiphong WHERE loaiphong.MA_LOAI_PHONG=cothietbi.MA_LOAI_PHONG AND loaithietbi.MA_LOAI_THIET_BI = cothietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG ='$_POST[matblp_chitiet]'AND cothietbi.XOA=0");
	$result = mysqli_query($conn, "SELECT cothietbi.MA_LOAI_PHONG,loaiphong.TEN_LOAI_PHONG, cothietbi.MA_LOAI_THIET_BI, loaithietbi.TEN_LOAI_THIET_BI FROM cothietbi, loaithietbi,loaiphong WHERE loaiphong.MA_LOAI_PHONG=cothietbi.MA_LOAI_PHONG AND loaithietbi.MA_LOAI_THIET_BI = cothietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG ='$_POST[matblp_chitiet]' AND cothietbi.XOA=0");
	if (mysqli_num_rows($result)) {
		$output .= '
      <div class="table-responsive">
           <table class="table table-bordered table-hover">
           <tr>
              <th>STT</th>
              <th>Thiết bị</th>
           </tr>  ';

		$so1 = 1;
		while ($row = mysqli_fetch_array($result)) {

			$output .= '

                <tr>
                     <td style=" text-transform: capitalize; text-align:center;">' . $so1 . '</td>
                     <td style=" text-transform: capitalize;">' . $row["TEN_LOAI_THIET_BI"] . '</td>

                </tr>
           ';
			$so1++;
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
