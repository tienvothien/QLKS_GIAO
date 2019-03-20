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
						<td>".date('d/m/Y', strtotime($row['NGAY_SINH']))."</td>
						<td>$row[DIA_CHI]</td>
						<td>$row[SDT]</td>
						<td>$row[EMAIL]</td>

				";?> 	
					<!-- Sửa -->
					<td><button type="button" class="btn btn-info sua_nv " id="<?php echo $row['MA_NV']; ?>" >Sửa</button></td>
					<td><button type="button" class="btn btn-info xoanv" id="<?php echo $row['MA_NV']; ?>">Xóa</button></td>
					
					
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
