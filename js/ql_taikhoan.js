// them tài khoản mới
 function themtaikhoan(){
   event.preventDefault();
     if ($('#tendn_tk').val()=='') {
        $('#tendn_tk').removeClass('vienxanh');
        $('#tendn_tk').addClass('viendo');
        alert('Chưa nhập tên tài khoản');
      }else{
        $('#tendn_tk').removeClass('viendo');
        $('#tendn_tk').addClass('vienxanh');
      // kiem tra chưa chọn mã loại phòng
      if ($('#matkhau_tk').val()=='') {
        $('#matkhau_tk').removeClass('vienxanh');
        $('#matkhau_tk').addClass('viendo');
        alert('Chưa nhập mật khẩu');
      }else{
        $('#matkhau_tk').removeClass('viendo');
        $('#matkhau_tk').addClass('vienxanh');
      //Kiểm tra cấp độ truy cập
      if ($('#capdotruycap_tk').val()=='') {
        $('#capdotruycap_tk').removeClass('vienxanh');
        $('#capdotruycap_tk').addClass('viendo');
        alert('Chưa nhập cấp độ truy cập');
      }else{
        $('#capdotruycap_tk').removeClass('viendo');
        $('#capdotruycap_tk').addClass('vienxanh');
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var tendn_tk= $('#tendn_tk').val()
        var matkhau_tk= $('#matkhau_tk').val()
        var capdotruycap_tk= $('#capdotruycap_tk').val()
        $.ajax({
          url:"./insert_tatca.php",
          method:"POST",
          data:{
            tendn_tk:tendn_tk,
            matkhau_tk:matkhau_tk,
            capdotruycap_tk:capdotruycap_tk
          },
          success:function(data123){
            // alert(data123);
            if (data123==1) {
              $('#tendn_tk').addClass('viendo');
              $('#tendn_tk').removeClass('vienxanh');
              alert('Tên tài khoản đã tồn tại');
            }else{
              if (data123==99) {
                alert("Thêm tài khoản mới thành công");
                $('#tendn_tk').val();
                $('#matkhau_tk').val();
                $('#capdotruycap_tk').val();
                $('#dl_quanlytaikhoan').load('./dl_quanlytaikhoan.php');
              }else {
                alert('Lỗi');
              }
            }         
          }
        });// kết thúc code thêm dữ liệu phòng
      }//cấp độ truy cập
    }// mật khẩu
  }//tên 
};

//Xóa tài khoản (hiện thông tin tài khoản cần xóa)
$(document).on('click', '.xoa_tailhoan', function(){
  // alert('msg');
  var idtk_xoa1 = $(this).attr("id");
      $.ajax({
        url:"./fetch.php",
        method:"POST",
        data:{idtk_xoa1:idtk_xoa1},
        dataType:"json",
        success:function(data){
        // alert('msg');
            $('#idtk_xoa1').val(data.idtk);
            $('#tendangnhap_xoa1').val(data.tendangnhap);
            $('#matkhau_xoa1').val(data.matkhau);
            $('#capdotruycap_xoa1').val(data.capdotruycap);
            $('#idtk_xoa_2').val(data.idtk);
            $('#insert1').val("Xóa");
            $('#xoataikhoan_data_Modal').modal('show');
           }
      });
   }); 
// hiện thông báo khi bấm nút xóa (Xóa thông tin nhân viên)
 $(document).on('submit', 'form[data-confirm]', function(e){
        var idtk_xoa_2 = $('#idtk_xoa_2').val();
        if (idtk_xoa_2) {
        if(!confirm($(this).data('confirm'))){
          e.stopImmediatePropagation();
          e.preventDefault();
        }else{
          // //xu ly nhấn nút xóa thiết bị
          // alert(maphong_xoa_2);
              event.preventDefault();
              $.ajax({
                url:"./insert_tatca.php",
                method:"POST",
                data:{idtk_xoa_2:idtk_xoa_2},
                success:function(data129){
                  if (data129==99) {
                    alert('Xóa tài khoản thành công');
                    $('#xoa_taikhoan_form')[0].reset();
                    $('#xoataikhoan_data_Modal').modal('hide');
                    $('#dl_quanlytaikhoan').load('./dl_quanlytaikhoan.php');
                  }else {
                    alert('Lỗi xóa tài khoản !!!');
                  }
                }
            });
        }
      }
    });
// cập nhật lại thông tin tài khoản
$(document).on('click', '.capnhat_taikhoan', function(){
  // alert('msg');
           var idtaikhoan_capnhat = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{idtaikhoan_capnhat:idtaikhoan_capnhat},
                dataType:"json",
                success:function(data){
                    $('#idtaikhoan_capnhat').val(data.idtk);
                    $('#tendangnhap_capnhat').html(data.tendangnhap);
                    $('#matkhau_capnhat').html(data.matkhau);
                    $('#capdotruycap_capnhat').val(data.capdotruycap);
                    $('#idtaikhoan_capnhat2').val(data.idtk);
                    
                    $('#insert').val("Cập nhật");
                    $('#capnhat_taikhoan_data_Modal').modal('show');
                }

           });
      });
$(document).ready(function(){
   $('#capnhat_taikhoan_form').on('submit', function (e) {
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
                  // alert(data);
                    if (data==1) {
                      alert('Tên đã tồn tại');
                    }else{
                      if (data==99) {
                        alert('Cập nhật tài khoản thành công');
                          $('#capnhat_taikhoan_data_Modal').modal('hide');
                          $('#dl_quanlytaikhoan').load('./dl_quanlytaikhoan.php');

                      }else{
                        alert('Lỗi cập nhật !');
                      }
                    }
                }

           });
        }
    });
});