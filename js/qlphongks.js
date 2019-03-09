 function themtbmoi(){ // them phong mới vào
  event.preventDefault();
  if ($('#ma_phong_them1').val()=='') {
    $('#ma_phong_them1').addClass('viendo');
    $('#ma_phong_them1').removeClass('vienxanh');
    alert('Chưa nhập mã phòng');
  }else{
    if ($('#ma_phong_them1').val().length==5) {
      $('#ma_phong_them1').removeClass('viendo');
      $('#ma_phong_them1').addClass('vienxanh');
      // kiem tra chưa chọn mã loại phòng
      if ($('#ma_loai_phong').val()=='') {
        $('#ma_loai_phong').removeClass('vienxanh');
        $('#ma_loai_phong').addClass('viendo');
        alert('Chưa nhập mã phòng');
      }else{
        $('#ma_loai_phong').removeClass('viendo');
        $('#ma_loai_phong').addClass('vienxanh');
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var ma_phong_them1= $('#ma_phong_them1').val()
        var ma_loai_phong= $('#ma_loai_phong').val()
        $.ajax({
          url:"./insert.php",
          method:"POST",
          data:{
            ma_phong_them1:ma_phong_them1,
            ma_loai_phong:ma_loai_phong
          },
          success:function(data123){
            if (data123==1) {
              $('#ma_phong_them1').addClass('viendo');
              $('#ma_phong_them1').removeClass('vienxanh');
              alert('Mã đã tồn tại');
            }else{
              if (data123==99) {
                alert("Thêm phòng thành công");
                $('#dlphong').load('./qlphong.php');
              }
            }         
          }
        });
        // kết thúc code thêm dữ liệu phòng
      }
      // két thúc kiểm tra mã loại phòng
    }else{
      $('#ma_phong_them1').addClass('viendo');
      $('#ma_phong_them1').removeClass('vienxanh');
      alert('Độ dài mã phòng sai ( Phải đủ  5 ký tự)');
    }
  }
};