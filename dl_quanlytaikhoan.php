<?php
include 'conn.php';
$dl_tk = mysqli_query($conn, "SELECT * FROM taikhoan where xoa =0");
if (mysqli_num_rows($dl_tk)) {
?>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên đăng nhập</th>
			<th>Mật khẩu</th>
			<th>Cấp độ truy cập</th>
			<th>Cập nhật</th>
			<th>Xóa</th>
		</tr>
	</thead>
	
	<?php
	$stt=1;
	while ($row = mysqli_fetch_array($dl_tk)) {
		echo "
				<tbody>
						<tr>
								<td>$stt</td>
								<td>$row[tendangnhap]</td>
								<td>$row[matkhau]</td>
								<td>$row[capdotruycap]</td>								
			";?>
			<!-- Sửa -->
			<td><button type="button" class="btn btn-info capnhat_taikhoan " id="<?php echo $row['idtk']; ?>" > <span class="glyphicon glyphicon-pencil"></span> Cập nhật</button></td>
			<td><button type="button" class="btn btn-info xoa_tailhoan" id="<?php echo $row['idtk']; ?>"> <span class="glyphicon glyphicon-trash"></span> Xóa</button></td>
			
			
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