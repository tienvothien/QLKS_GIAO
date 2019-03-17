 function themtphongmoi(){ // them phong mới vào
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
        alert('Chưa chọn loại phòng');
      }else{
        $('#ma_loai_phong').removeClass('viendo');
        $('#ma_loai_phong').addClass('vienxanh');
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var ma_phong_them1= $('#ma_phong_them1').val()
        var ma_loai_phong= $('#ma_loai_phong').val()
        $.ajax({
          url:"./insert_phong.php",
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
                $('#dlphong').load('./dlphong.php');
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
//xử lý xem, sữa, xóa phong
// xem chi tiết phòng
$(document).ready(function(){
        // nhấn nút edit hiện thông tin sưa
      $(document).on('click', '.chitiet_phong', function(){
           var ma_phong_chitiet = $(this).attr("id");
           $.ajax({
              url:"./select.php",
              method:"POST",
              data:{ma_phong_chitiet:ma_phong_chitiet},
              success:function(data123){
                $('#employee_detail2').html(data123);
                $('#views_phong').modal('show');
              }
            });
      });
  });
//kết thúc xử lý xem chi tiết phòng
// cập nhật lại thông tin phòng
$(document).on('click', '.sua_phong', function(){
           var ma_phong_sua = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{ma_phong_sua:ma_phong_sua},
                dataType:"json",
                success:function(data){
                    $('#ma_phong_sua').val(data.MA_PHONG);
                    $('#ten_loai_phong_sua').val(data.TEN_LOAI_PHONG);
                    $('#ma_phong_sua_1').val(data.MA_PHONG);
                    
                    $('#insert').val("Cập nhật");
                    $('#chitiet_data_Modal').modal('show');
                }

           });
      });
     
      // cap nhat tt thiết bi
      // $('#insert_form').on('submit', function(event){
      //     event.preventDefault();
      //     if ($('#ten_thiebi').val()=='') {
      //       alert('Chưa nhập tên thiết bị');
      //     }else {
      //         $.ajax({
      //                url:"../dulieu/insert.php",
      //                method:"POST",
      //                data:$('#insert_form').serialize(),
      //                success:function(data123){
      //                   if (data123==1) {
      //                       alert('Tên thiết bị đã tồn tại');
      //                       $('#ten_thiebi').addClass('vien_do');
      //                   }else {
      //                      $('#ten_thiebi').removeClass('vien_do');
      //                       if (data123==99) {
      //                           alert('Cập nhật thông tin thiết bị thành công');
      //                           $('#ten_thiebi').removeClass('vien_do');
      //                           $('#insert_form')[0].reset();
      //                           $('#add_data_Modal').modal('hide');
      //                           $('#dl_tb1').load('../dulieu/dl_thietbi.php');
      //                        }else {
      //                           alert('Lỗi cập nhật');
      //                       }

      //                   }
      //               }
      //           });
      //       }
      // });

      // xoa phong
      $(document).on('click', '.xoaphong', function(){
           var ma_phong_sua = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{ma_phong_sua:ma_phong_sua},
                dataType:"json",
                success:function(data){
                    $('#ma_phong_xoa_2').val(data.MA_PHONG);
                    $('#ten_loai_phong_xoa_2').val(data.TEN_LOAI_PHONG);
                    $('#maphong_xoa_2').val(data.MA_PHONG);
                    
                    $('#insert1').val("Xóa");
                    $('#xoa_maphong_data_Modal').modal('show');
                }

           });
      });
            // hiện thông báo khi bấm nút xóa
      $(document).on('submit', 'form[data-confirm]', function(e){
        var maphong_xoa_2 = $('#maphong_xoa_2').val();
        if (maphong_xoa_2) {

        if(!confirm($(this).data('confirm'))){
          e.stopImmediatePropagation();
          e.preventDefault();
        }else{
          // //xu ly nhấn nút xóa thiết bị
          // alert(maphong_xoa_2);
              event.preventDefault();
              $.ajax({
                url:"./insert_phong.php",
                method:"POST",
                data:{maphong_xoa_2:maphong_xoa_2},
                success:function(data129){
                  if (data129==99) {
                    alert('Xóa phòng thành công');
                    $('#xoa_phong_form')[0].reset();
                    $('#xoa_maphong_data_Modal').modal('hide');
                    $('#dlphong').load('./dlphong.php');
                  }else {
                    alert('Lỗi xóa phòng lỗi');
                  }
                }
            });
        }
      }
    });
      
