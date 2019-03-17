//Thêm thiết bị
function themtb(){ 
  if ($('#them_ma_tb').val()=='') {
    $('#them_ma_tb').addClass('viendo');
    $('#them_ma_tb').removeClass('vienxanh');
    alert('Chưa nhập mã thiết bị');
  }else{
    if ($('#them_ma_tb').val().length==5) {
      $('#them_ma_tb').removeClass('viendo');
      $('#them_ma_tb').addClass('vienxanh');
      // kiem tra chưa nhập tên loại thiết bị
      if ($('#them_loai_tb').val()=='') {
        $('#them_loai_tb').removeClass('vienxanh');
        $('#them_loai_tb').addClass('viendo');
        alert('Chưa chọn nhập loại thiết bị');
      }else{
        $('#them_loai_tb').removeClass('viendo');
        $('#them_loai_tb').addClass('vienxanh');
        //nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var them_ma_tb= $('#them_ma_tb').val()
        var them_loai_tb= $('#them_loai_tb').val()
        $.ajax({
          url:"./themthietbi.php",
          method:"POST",
          data:{
            them_ma_tb:them_ma_tb,
            them_loai_tb:them_loai_tb
          },
          success:function(data123){them_ma_tb
            if (data123==1) {
              $('#them_ma_tb').addClass('viendo');
              $('#them_ma_tb').removeClass('vienxanh');
              alert('Mã đã tồn tại');
            }else{
              if (data123==99) {
                alert("Thêm thiết bị thành công");
                $('#dlthietbi').load('./dlthietbi.php');
              }
            }         
          }
        });
        // kết thúc code thêm dữ liệu phòng
      }
      // két thúc kiểm tra mã loại phòng
    }else{
      $('#them_ma_tb').addClass('viendo');
      $('#them_ma_tb').removeClass('vienxanh');
      alert('Độ dài mã thiết bị sai ( Phải đủ  5 ký tự)');
    }
  }
};

function nutxoa() {
 alert('nnnn');
 
};