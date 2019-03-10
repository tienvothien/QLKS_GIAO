 function themnhanvienbmoi(){ // them nhân viên mới vào
  event.preventDefault();
  if ($('#ma_nhanvien_them1').val()=='') {
    $('#ma_nhanvien_them1').addClass('viendo');
    $('#ma_nhanvien_them1').removeClass('vienxanh');
    alert('Chưa nhập mã nhân viên');
  }else{
    if ($('#ma_nhanvien_them1').val().length==5) {
      $('#ma_nhanvien_them1').removeClass('viendo');
      $('#ma_nhanvien_them1').addClass('vienxanh');
      // kiem tra chưa nhập họ nhân viên
      if ($('#ho_nhanvien_them1').val()=='') {
        $('#ho_nhanvien_them1').removeClass('vienxanh');
        $('#ho_nhanvien_them1').addClass('viendo');
        alert('Chưa nhập họ nhân viên');
      }else{
        $('#ho_nhanvien_them1').removeClass('viendo');
        $('#ho_nhanvien_them1').addClass('vienxanh');

        // kiem tra chưa nhập tên nhân viên
        if ($('#ten_nhanvien_them1').val()=='') {
          $('#ten_nhanvien_them1').removeClass('vienxanh');
          $('#ten_nhanvien_them1').addClass('viendo');
          alert('Chưa nhập tên nhân viên');
        }else{
          $('#ten_nhanvien_them1').removeClass('viendo');
          $('#ten_nhanvien_them1').addClass('vienxanh');
          //kiem tra giu tinh
          if ($('#gt_nhanvien_them1').val()=='') {
            $('#gt_nhanvien_them1').removeClass('vienxanh');
            $('#gt_nhanvien_them1').addClass('viendo');
          }else{
            $('#gt_nhanvien_them1').removeClass('viendo');
            $('#gt_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa chọn ngày sinh
          if ($('#ngaysinh_nhanvien_them1').val()=='') {
            $('#ngaysinh_nhanvien_them1').removeClass('vienxanh');
            $('#ngaysinh_nhanvien_them1').addClass('viendo');
          }else{
            $('#ngaysinh_nhanvien_them1').removeClass('viendo');
            $('#ngaysinh_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa nhập địa chỉ
          if ($('#diachi_nhanvien_them1').val()=='') {
            $('#diachi_nhanvien_them1').removeClass('vienxanh');
            $('#diachi_nhanvien_them1').addClass('viendo');
          }else{
            $('#diachi_nhanvien_them1').removeClass('viendo');
            $('#diachi_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa nhập sdt
          if ($('#sdt_nhanvien_them1').val()=='') {
            $('#sdt_nhanvien_them1').addClass('viendo');
            $('#sdt_nhanvien_them1').removeClass('vienxanh');
            alert('Chưa nhập mã nhân viên');
          }else{
            if ($('#sdt_nhanvien_them1').val().length==10) {
              $('#sdt_nhanvien_them1').removeClass('viendo');
              $('#sdt_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra email
          if ($('#email_nhanvien_them1').val()=='') {
            $('#email_nhanvien_them1').addClass('viendo');
            $('#email_nhanvien_them1').removeClass('vienxanh');
            alert('Chưa nhập email nhân viên');
          }else{
            $('#email_nhanvien_them1').removeClass('viendo');
            $('#email_nhanvien_them1').addClass('vienxanh');
          }
            }else{
                  $('#sdt_nhanvien_them1').addClass('viendo');
                  $('#sdt_nhanvien_them1').removeClass('vienxanh');
                  alert('Độ dài sdt sai ( Phải đủ 10 ký tự)');
            }

                }//kết thúc ktra sdtsdt_nhanvien_them1
              }//ket thuc kiem tra địa chỉ
            }//ket thuc kiem tra ngày sinh
          }//ket thuc kiem tra gioi tính
        }// ket thuc kiem tra ten nhan vien
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        // var ma_nhanvien_them1= $('#ma_nhanvien_them1').val()
        // var ho_nhanvien_them1= $('#ho_nhanvien_them1').val()
        // $.ajax({
        //   url:"./insert.php",
        //   method:"POST",
        //   data:{
        //     ma_nhanvien_them1:ma_nhanvien_them1,
        //     ho_nhanvien_them1:ho_nhanvien_them1
        //   },
        //   success:function(data123){
        //     if (data123==1) {
        //       $('#ma_nhanvien_them1').addClass('viendo');
        //       $('#ma_nhanvien_them1').removeClass('vienxanh');
        //       alert('Mã đã tồn tại');
        //     }else{
        //       if (data123==99) {
        //         alert("Thêm phòng thành công");
        //         $('#dlphong').load('./dlphong.php');
        //       }
        //     }         
        //   }
        // });
        // kết thúc code thêm dữ liệu phòng
      }//ket thuc kiem tra ho nhan vien
      // két thúc kiểm tra mã loại phòng
    }else{
      $('#ma_nhanvien_them1').addClass('viendo');
      $('#ma_nhanvien_them1').removeClass('vienxanh');
      alert('Độ dài mã phòng sai ( Phải đủ  5 ký tự)');
    }
  }
};