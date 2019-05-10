<?php 
include 'conn.php';
$tthietbi=mysqli_query($conn,"SELECT COUNT(*) AS Tong_loai_thietbi FROM loaithietbi");
if (mysqli_num_rows($tthietbi)) {
	while ($row = mysqli_fetch_array($tthietbi)) {
		echo "

					 						<h3>Tổng số loại thiết bị</h3>
					 						<p>
					 							$row[Tong_loai_thietbi]
					 						</p>";
	}
	
}
 ?>