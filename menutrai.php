<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 menutrai ">

		<div class="sidenav menutrai1">
			<a href="index.php" class="list-group-item text-center"><span class="fa fa-home"></span>Trang chủ</a>
			<a href="ql_taikhoan.php" class="list-group-item">Quản lý tài khoản</a>
			<a href="ql_nhanvien.php" class="list-group-item">Quản lý nhân viên</a>
			<a href="qlphongks.php" class="list-group-item">Quản lý phòng</a>
			<a href="qlloaiphong.php" class="list-group-item">Quản lý loại phòng</a>
			
			<button class="dropdown-btn">Quản lý thiết bị
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="qlthietbi.php" class="list-group-item">Danh sách thiết bị</a>
				<a href="themtb.php" class="list-group-item">Danh sách thiết bị trong từng loại phòng</a>
			</div>
			
			<!-- <button class="dropdown-btn">Quản lý đặt phòng
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="ql_dskhachdatphong.php" class="list-group-item">Danh sách khách đặt phòng</a>
				<a href="" class="list-group-item">Thêm thông tin khách đặt phòng</a>
			</div> -->
			
			<button class="dropdown-btn">Quản lý thuê phòng
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="#" class="list-group-item">Danh sách khách thuê phòng</a>
				<a href="ql_khachthuephong.php" class="list-group-item">Thêm thông tin khách thuê phòng</a>
			</div>
			<a href="#" class="list-group-item">Quản lý hóa đơn</a>
			<a href="#" class="list-group-item">Tìm kiếm</a>
			
		</div>
	</div>
	<script>
		var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;
	for (i = 0; i < dropdown.length; i++) {
	dropdown[i].addEventListener("click", function() {
	this.classList.toggle("active");
	var dropdownContent = this.nextElementSibling;
	if (dropdownContent.style.display === "block") {
	dropdownContent.style.display = "none";
	} else {
	dropdownContent.style.display = "block";
	}
	});
	}
	</script>