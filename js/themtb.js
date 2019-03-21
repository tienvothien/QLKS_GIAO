// xem chi tiết phòng
$(document).ready(function(){
        // nhấn nút edit hiện thông tin sưa
      $(document).on('click', '.chitiet_tbp', function(){
           var matblp_chitiet = $(this).attr("id");
           
           $.ajax({
              url:"./select.php",
              method:"POST",
              data:{matblp_chitiet:matblp_chitiet},
              success:function(data123){
                $('#employee_detail2').html(data123);
                $('#views_phong').modal('show');
              }
            });
      });
      // cập nhật lại thông tin thiết bị 
$(document).on('click', '.capnhattb', function(){
           var ma_thietbicapnhat = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{ma_thietbicapnhat:ma_thietbicapnhat},
                dataType:"json",
                success:function(data){
                  // alert(data);
                    $('#ma_thietbicapnhat').val(data.MA_LOAI_THIET_BI);
                    $('#ten_ltpcapnhat').val(data.TEN_LOAI_THIET_BI);
                    $('#ma_tbsua1').val(data.MA_LOAI_THIET_BI);
                    
                    $('#insert').val("Cập nhật");
                    $('#thietbi_data_Modal').modal('show');
                }

           });

              $('#capnhatthietbi12345').on('submit', function (event) {
            // alert(ma_thietbicapnhat);
            var ma_thietbicapnhat12334=($('#ma_thietbicapnhat').val());
            var ten_ltpcapnhat12345=($('#ten_ltpcapnhat').val());
            $.ajax({
              url: './themthietbi.php',
              type: 'POST',
              data: {ma_thietbicapnhat12334: ma_thietbicapnhat12334,
                ten_ltpcapnhat12345:ten_ltpcapnhat12345},
              success:function (dulieudacapnhat) {
                if (dulieudacapnhat==99) {
                  alert('Cập nhật thành công');
                  $('#thietbi_data_Modal').modal('hide');
                  $('#dlthietbi').load('./dlthietbi.php');

                }else{
                  alert('Lỗi cập nhật');
                }
              }
            });
          });

      });


  });


// them thiết bị mới
 function themtbphong(){ // them phong mới vào
  event.preventDefault();
  if ($('#ma_loai_phong').val()=='') {
        $('#ma_loai_phong').removeClass('vienxanh');
        $('#ma_loai_phong').addClass('viendo');
        alert('Chưa chọn loại phòng');
      }else{
        $('#ma_loai_phong').removeClass('viendo');
        $('#ma_loai_phong').addClass('vienxanh');
      // kiem tra chưa chọn mã loại phòng
      if ($('#ma_loai_tb').val()=='') {
        $('#ma_loai_tb').removeClass('vienxanh');
        $('#ma_loai_tb').addClass('viendo');
        alert('Chưa chọn loại thiết bị');
      }else{
        $('#ma_loai_tb').removeClass('viendo');
        $('#ma_loai_tb').addClass('vienxanh');
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var ma_loai_phong= $('#ma_loai_phong').val()
        var ma_loai_tb= $('#ma_loai_tb').val()
        $.ajax({
          url:"./insert_phong.php",
          method:"POST",
          data:{
            ma_loai_phong:ma_loai_phong,
            ma_loai_tb:ma_loai_tb
          },
          success:function(data123){
            // alert(data123);
            if (data123==1) {
              $('#ma_loai_tb').addClass('viendo');
              $('#ma_loai_tb').removeClass('vienxanh');
              alert('Thiết bị đã tồn tại');
            }else{
              if (data123==99) {
                alert("Thêm thiết bị thành công");
                $('#dlthemtbphong').load('./dlthemtbphong.php');
              }
            }         
          }
        });
        // kết thúc code thêm dữ liệu phòng
      }
      // két thúc kiểm tra mã loại phòng
    
    }
  
};


