//Thêm loại phòng
function themloaiphong111(){ 
  event.preventDefault();
  if ($('#maloaiphong_111').val()=='') {
    $('#maloaiphong_111').addClass('viendo');
    $('#maloaiphong_111').removeClass('vienxanh');
    alert('Chưa nhập mã loại phòng');
  }else{
    if ($('#maloaiphong_111').val().length==5) {
      $('#maloaiphong_111').removeClass('viendo');
      $('#maloaiphong_111').addClass('vienxanh');
      // kiem tra chưa nhập tên loại phòng
      if ($('#tenloaiphong_111').val()=='') {
        $('#tenloaiphong_111').removeClass('vienxanh');
        $('#tenloaiphong_111').addClass('viendo');
        alert('Chưa nhập tên loại phòng');
      }else{
        $('#tenloaiphong_111').removeClass('viendo');
        $('#tenloaiphong_111').addClass('vienxanh');
        // kiem tra chưa nhập diện tich` phòng
      if ($('#dientichphong_111').val()=='') {
        $('#dientichphong_111').removeClass('vienxanh');
        $('#dientichphong_111').addClass('viendo');
        alert('Chưa chọn diện tích phòng');
      }else{
        $('#dientichphong_111').removeClass('viendo');
        $('#dientichphong_111').addClass('vienxanh');
           // kiem tra chưa nhập số lượng người ở
      if ($('#sl_nguoi_o_111').val()=='') {
        $('#sl_nguoi_o_111').removeClass('vienxanh');
        $('#sl_nguoi_o_111').addClass('viendo');
        alert('Chọn số lượng người ở');
      }else{
        $('#sl_nguoi_o_111').removeClass('viendo');
        $('#sl_nguoi_o_111').addClass('vienxanh');
        //nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var maloaiphong_111= $('#maloaiphong_111').val()
        var tenloaiphong_111= $('#tenloaiphong_111').val()
        var dientichphong_111= $('#dientichphong_111').val()
        var sl_nguoi_o_111= $('#sl_nguoi_o_111').val()
        $.ajax({
          url:"./insert_loaiphong.php",
          method:"POST",
          data:{
            maloaiphong_111:maloaiphong_111,
            tenloaiphong_111:tenloaiphong_111,
            dientichphong_111:dientichphong_111,
            sl_nguoi_o_111:sl_nguoi_o_111
          },
          success:function(data123){
            if (data123==1) {
              $('#maloaiphong_111').addClass('viendo');
              $('#maloaiphong_111').removeClass('vienxanh');
              alert('Mã đã tồn tại');
            }else{
              if (data123==99) {
                alert("Thêm loại phòng mới thành công");
                $('#dl_loaiphong').load('./dl_loaiphong.php');

              }
            }         
          }
        });//
          }//sl người ở
        }//diện tích
       } // kết thúc code thêm dữ liệu phòng
      
      // ten loai phòng
    }else{
      $('#maloaiphong_111').addClass('viendo');
      $('#maloaiphong_111').removeClass('vienxanh');
      alert('Độ dài mã thiết bị sai ( Phải đủ  5 ký tự)');
    }
  }
};

//Xóa loại phòng
$(document).on('click', '.xoa_loaiphong', function(){
           var xoamaloaiphong222 = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{xoamaloaiphong222:xoamaloaiphong222},
                dataType:"json",
                success:function(data){
                    $('#xoamaloaiphong222').val(data.MA_LOAI_PHONG);
                    $('#xoatenloaiphong222').val(data.TEN_LOAI_PHONG);
                    $('#dientichphongxoa222').val(data.DIEN_TICH);
                    $('#slnguoixoa222').val(data.SL_NGUOI_O);
                    $('#maloaiphongxoa_2').val(data.MA_LOAI_PHONG);
                    
                    $('#insert1').val("Xóa");
                    $('#xoaloaiphong_data_Modal').modal('show');
                }

           });
      });      
 // hiện thông báo khi bấm nút xóa (Xóa loại phòng)
      $(document).on('submit', 'form[data-confirm]', function(e){
        var maloaiphongxoa_2 = $('#maloaiphongxoa_2').val();
        if (maloaiphongxoa_2) {

        if(!confirm($(this).data('confirm'))){
          e.stopImmediatePropagation();
          e.preventDefault();
        }else{
          // //xu ly nhấn nút xóa thiết bị
          // alert(maphong_xoa_2);
              event.preventDefault();
              $.ajax({
                url:"./insert_loaiphong.php",
                method:"POST",
                data:{maloaiphongxoa_2:maloaiphongxoa_2},
                success:function(data129){
                  if (data129==99) {
                    alert('Xóa loại phòng thành công');
                    $('#xoa_loaiphong_form')[0].reset();
                    $('#xoaloaiphong_data_Modal').modal('e');
                    $('#dl_loaiphong').load('./dl_loaiphong.php');
                  }else {
                    alert('Lỗi xóa loại phòng');
                  }
                }
            });
        }
      }
    });

// cập nhật lại thông tin loại phòng
$(document).on('click', '.sua_loaiphong', function(){
           var maloaiphongsua_111 = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{xoamaloaiphong222:maloaiphongsua_111},
                dataType:"json",
                success:function(data){
                    $('#maloaiphongsua_111').val(data.MA_LOAI_PHONG);
                    $('#tenloaiphongsua_111').html(data.TEN_LOAI_PHONG);
                    $('#dientichsua_111').html(data.DIEN_TICH);
                    $('#dientichsua_111').val(data.DIEN_TICH);
                    $('#slnguoisua222').html(data.SL_NGUOI_O);
                    $('#slnguoisua222').val(data.SL_NGUOI_O);
                    $('#dlphongsua_ttchitiep').val(data.MA_LOAI_PHONG);
                    $('#ma_loaiphong_sua_111').val(data.MA_LOAI_PHONG);
                    
                    // $('#insert').val("Cập nhật");
                    $('#chitiet_data_Modal').modal('show');
                }

           });
      });
$(document).ready(function(){
   $('#sua_ttlp1').on('submit', function (e) {
          e.preventDefault();
           if(!confirm($(this).data('confirm'))){
          e.stopImmediatePropagation();
          e.preventDefault();
        }else{
          $.ajax({
                url:"./capnhat.php",
                type:"POST",
                data:new FormData(this),
                contentType: false,
                processData: false, 
                success:function(data){
                    if (data==1) {
                      alert('Tên đã tồn tại');
                    }else{
                      if (data==99) {
                        alert('Cập nhật thành công');
                         $('#chitiet_data_Modal').modal('hide');
                          $('#dl_loaiphong').load('./dl_loaiphong.php');

                      }else{
                        alert('Lỗi !');
                      }
                    }
                }

           });
        }
    });
});