<?php
include 'conn.php';
$dl1 = mysqli_query($conn, "SELECT * FROM nhanvienletan where xoa =0");
if (mysqli_num_rows($dl1)) {
	?>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã nhân viên</th>
				<th>Họ tên</th>
				<th>Giới tính</th>
				<th>Ngày sinh</th>
				<th>Địa chỉ</th>
				<th>SĐT</th>
				<th>Email</th>
				<th>Xóa</th>
				<th>Sửa</th>
				<th>Chi tiết</th>
			</tr>
		</thead>
		
	<?php
	$stt=1;
	while ($row = mysqli_fetch_array($dl1)) {
		echo "
				<tbody>
					<tr>
						<td>$stt</td>
						<td>$row[MA_NV]</td>
						<td>$row[HO_NV] $row[TEN_NV]</td>
						<td>$row[GIOI_TINH]</td>
						<td>$row[NGAY_SINH]</td>
						<td>$row[DIA_CHI]</td>
						<td>$row[SDT]</td>
						<td>$row[EMAIL]</td>
				";?> 		
					<td><button type="button" class="btn btn-info nutnek xoaphong" id="<?php echo $row['MA_NV']; ?>">Xóa</button></td>
					<td><button type="button" class="btn btn-info sua_phong " id="<?php echo $row['MA_NV']; ?>" >Sửa</button></td>
					<td><button type="button" class="btn btn-info chitiet_phong" id="<?php echo $row['MA_NV']; ?>" >Chi tiết</button></td>
					<?php
					echo "
					</tr>
				</tbody>
					";
					$stt++;
	}
	?>
	</table>
	<?php
}

?>