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
			$tb = (mysqli_query($conn, "SELECT * FROM cothietbi, loaithietbi WHERE  cothietbi.XOA=0 AND cothietbi.MA_LOAI_THIET_BI = loaithietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG = '" . $row["MA_LOAI_PHONG"] . "'  "));
      $gia = mysqli_fetch_array(mysqli_query($conn, "SELECT cogia.GIA FROM loaiphong INNER JOIN cogia ON loaiphong.MA_LOAI_PHONG = cogia.MA_LOAI_PHONG WHERE loaiphong.MA_LOAI_PHONG='$row[MA_LOAI_PHONG]'
"));
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
                     <td width="30%"><label>Giá</label></td>
                     <td width="70%" style=" text-transform: capitalize;">' . $gia["GIA"] . '</td>
                </tr>
                
                  <tr>
                     <td width="30%"><label>Thiết bị</label></td>
                     <td width="70%" style=" text-transform: capitalize;">';

			while ($r1 = mysqli_fetch_array($tb)) {
				$output .= $so1 . '   ' . $r1["TEN_LOAI_THIET_BI"] . '<br>';
				$so1++;

			}

			$output .= '</td>
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
// lấy dữ liệu tb lp  để xem chi tiết
if (isset($_POST["matblp_chitiet"])) {
	$output = '';
	include 'conn.php';

	$result = mysqli_query($conn, "SELECT cothietbi.MA_LOAI_PHONG,loaiphong.TEN_LOAI_PHONG, cothietbi.MA_LOAI_THIET_BI, loaithietbi.TEN_LOAI_THIET_BI FROM cothietbi, loaithietbi,loaiphong WHERE loaiphong.MA_LOAI_PHONG=cothietbi.MA_LOAI_PHONG AND loaithietbi.MA_LOAI_THIET_BI = cothietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG ='$_POST[matblp_chitiet]'AND cothietbi.XOA=0 AND loaithietbi.XOA =0");

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
// lấy dữ liệu tb lp  để xem chi tiết va cập nhat
if (isset($_POST["matblp_chitiet123"])) {
	$output = '';
	include 'conn.php';

	$result = mysqli_query($conn, "SELECT cothietbi.idctb, cothietbi.MA_LOAI_PHONG,loaiphong.TEN_LOAI_PHONG, cothietbi.MA_LOAI_THIET_BI, loaithietbi.TEN_LOAI_THIET_BI FROM cothietbi, loaithietbi,loaiphong WHERE loaiphong.MA_LOAI_PHONG=cothietbi.MA_LOAI_PHONG AND loaithietbi.MA_LOAI_THIET_BI = cothietbi.MA_LOAI_THIET_BI AND cothietbi.MA_LOAI_PHONG ='$_POST[matblp_chitiet123]' AND cothietbi.XOA=0 AND loaithietbi.XOA =0");

	if (mysqli_num_rows($result)) {
		$output .= '
      <div class="table-responsive">
           <table class="table table-bordered table-hover">
           <tr>
              <th>STT</th>
              <th>Thiết bị</th>
              <th>Xóa</th>
           </tr>  ';

		$so1 = 1;
		while ($row = mysqli_fetch_array($result)) {

			$output .= '

                <tr>
                     <td style=" text-transform: capitalize; text-align:center;">' . $so1 . '</td>
                     <td style=" text-transform: capitalize;">' . $row["TEN_LOAI_THIET_BI"] . '</td>
                     <td style=" text-transform: capitalize;">
                     <input type="button"  class="xoathittungloaiphong btn btn-danger" name=""  id="' . $row["idctb"] . '" value="Xóa">
                     </td>

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

// lấy dữ liệu xem chi tiết thông tin khách thuê phòng
if (isset($_POST["maphong_chitiet"])) {
  $output = '';
  include 'conn.php';

  $result = mysqli_query($conn, "SELECT khachhang1.MA_KH, khachhang1.SO_CMND, khachhang1.HO_KH, khachhang1.TEN_KH,khachhang1.GIOI_TINH,khachhang1.NGAY_SINH,khachhang1.QUOC_TICH,khachhang1.DIA_CHI,khachhang1.SO_DT, phong.MA_PHONG FROM khachhang1, phong, ophong WHERE phong.MA_PHONG=ophong.MA_PHONG AND khachhang1.MA_KH = ophong.MA_KH AND phong.MA_PHONG ='$_POST[maphong_chitiet]' AND phong.XOA=0");

  if (mysqli_num_rows($result)) {
    $output .= '
      <div class="table-responsive">
           <table class="table table-bordered table-hover">
           <tr>
              <th>Mã khách hàng</th>
              <th>Số phòng</th>
              <th>Số CMND</th>
              <th>Họ tên khách hàng</th>
              <th>Giới tính</th>
              <th>Ngày sinh</th>
              <th>Quốc tịch</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
           </tr>  ';

   
    while ($row = mysqli_fetch_array($result)) {

      $output .= '

                <tr>
                    <td style=" text-transform: capitalize;">' . $row["MA_KH"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["MA_PHONG"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["SO_CMND"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["HO_KH"] . '' . $row["TEN_KH"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["GIOI_TINH"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["NGAY_SINH"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["QUOC_TICH"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["DIA_CHI"] . '</td>
                    <td style=" text-transform: capitalize;">' . $row["SDT"] . '</td>

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
