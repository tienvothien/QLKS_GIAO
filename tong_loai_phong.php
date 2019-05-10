<?php 
include 'conn.php';
$tlphong=mysqli_query($conn,"SELECT COUNT(*) AS Tong_loai_phong FROM loaiphong");
if (mysqli_num_rows($tlphong)) {
	while ($row = mysqli_fetch_array($tlphong)) {
		echo "

					 						<h3>Tổng số loại phòng</h3>
					 						<p>
					 							$row[Tong_loai_phong]
					 						</p>";
	}
	
}
 ?>