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

// xoa  t
      $(document).on('click', '.btn_xoatb', function(){
           var MA_LOAI_THIET_BI_XOA = $(this).attr("id");
           // alert(MA_LOAI_THIET_BI_XOA);
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{MA_LOAI_THIET_BI_XOA:MA_LOAI_THIET_BI_XOA},
                dataType:"json",
                success:function(data12){
                  // alert(data12);
                    $('#ma_loaitb_xoa_2').val(data12.MA_LOAI_THIET_BI);
                    $('#ten_loaitb_xoa_2').val(data12.TEN_LOAI_THIET_BI);
                    $('#maphong_xoa_2').val(data12.MA_LOAI_THIET_BI);
                    
                    $('#insert1').val("Xóa");
                    $('#xoa_loaitb_data_Modal').modal('show');
                }

           });
      });
      $(document).on('submit', 'form[data-confirm]', function(e){
        var MA_LOAI_THIET_BI_XOA = $('#maphong_xoa_2').val();
        if (MA_LOAI_THIET_BI_XOA) {

        if(!confirm($(this).data('confirm'))){
          e.stopImmediatePropagation();
          e.preventDefault();
        }else{
          // //xu ly nhấn nút xóa thiết bị
          alert(MA_LOAI_THIET_BI_XOA);
              event.preventDefault();
              $.ajax({
                url:"./insert_phong.php",
                method:"POST",
                data:{MA_LOAI_THIET_BI_XOA12:MA_LOAI_THIET_BI_XOA},
                success:function(data129){
                  if (data129==99) {
                    alert('Xóa phòng thành công');
                    $('#xoa_loaitb_data_Modal').modal('hide');
                    $('#dlthietbi').load('./dlthietbi.php');
                  }else {
                    alert('Lỗi xóa phòng lỗi');
                  }
                }
            });
        }
      }
    });
      
         