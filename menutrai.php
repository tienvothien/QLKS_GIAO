<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 menutrai ">

		<div class="sidenav menutrai1">
			<a href="index.php" class="list-group-item text-center"><span class="fa fa-home"></span>Trang chủ</a>

			<div class="dropdown-container">
				<a href="qltaikhoan.php" class="list-group-item">Quản lý tài khoản</a>
				<a href="../dulieu/xldangxuat.php""><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a>
			</div>
			<a href="ql_nhanvien.php" class="list-group-item">Quản lý nhân viên</a>
			<button class="dropdown-btn">Quản lý Phòng
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="qlphongks.php" class="list-group-item">Danh sách phòng</a>
				<a href="qlthietbi.php" class="list-group-item">Thiết bị</a>
			</div>
			<button class="dropdown-btn">Quản lý đặt phòng
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="" class="list-group-item">Thêm thông tin khách đặt phòng</a>
			</div>
			<button class="dropdown-btn">Quản lý thuê phòng
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a href="" class="list-group-item">Thêm thông tin khách thuê phòng</a>
			</div>
			<a href="qlcanbo.php" class="list-group-item">Quản lý hóa đơn</a>
			<a href="qlcanbo.php" class="list-group-item">Thống kê</a>
			

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