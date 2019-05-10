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
            alert('Chưa chọn giới tính nhân viên');
          }else{
            $('#gt_nhanvien_them1').removeClass('viendo');
            $('#gt_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa chọn ngày sinh
          if ($('#ngaysinh_nhanvien_them1').val()=='') {
            $('#ngaysinh_nhanvien_them1').removeClass('vienxanh');
            $('#ngaysinh_nhanvien_them1').addClass('viendo');
            alert('Chưa chọn ngày sinh nhân viên');
          }else{
            $('#ngaysinh_nhanvien_them1').removeClass('viendo');
            $('#ngaysinh_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa nhập địa chỉ
          if ($('#diachi_nhanvien_them1').val()=='') {
            $('#diachi_nhanvien_them1').removeClass('vienxanh');
            $('#diachi_nhanvien_them1').addClass('viendo');
            alert('Chưa nhập địa chỉ nhân viên');
          }else{
            $('#diachi_nhanvien_them1').removeClass('viendo');
            $('#diachi_nhanvien_them1').addClass('vienxanh');
          //Kiểm tra chưa nhập sdt
          if ($('#sdt_nhanvien_them1').val()=='') {
            $('#sdt_nhanvien_them1').addClass('viendo');
            $('#sdt_nhanvien_them1').removeClass('vienxanh');
            alert('Chưa nhập sdt nhân viên');
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
                 //nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
                      var ma_nhanvien_them1= $('#ma_nhanvien_them1').val()
                      var ho_nhanvien_them1= $('#ho_nhanvien_them1').val()
                      var ten_nhanvien_them1= $('#ten_nhanvien_them1').val()
                      var gt_nhanvien_them1= $('#gt_nhanvien_them1').val()
                      var ngaysinh_nhanvien_them1= $('#ngaysinh_nhanvien_them1').val()
                      var diachi_nhanvien_them1= $('#diachi_nhanvien_them1').val()
                      var sdt_nhanvien_them1= $('#sdt_nhanvien_them1').val()
                      var email_nhanvien_them1= $('#email_nhanvien_them1').val()
                      $.ajax({
                        url:"./themnhanvien.php",
                        method:"POST",
                        data:{
                          ma_nhanvien_them1:ma_nhanvien_them1,
                          ho_nhanvien_them1:ho_nhanvien_them1,
                          ten_nhanvien_them1:ten_nhanvien_them1,
                          gt_nhanvien_them1:gt_nhanvien_them1,
                          ngaysinh_nhanvien_them1:ngaysinh_nhanvien_them1,
                          diachi_nhanvien_them1:diachi_nhanvien_them1,
                          sdt_nhanvien_them1:sdt_nhanvien_them1,
                          email_nhanvien_them1:email_nhanvien_them1
                        },
                        success:function(data1234){

                          if (data1234==1) {
                            $('#ma_nhanvien_them1').addClass('viendo');
                            $('#ma_nhanvien_them1').removeClass('vienxanh');
                            alert('Mã đã tồn tại');
                          }else{
                            if (data1234==999) {
                              alert("Thêm nhân viên thành công");
                              $('#dl_nhanvienks').load('./dl_nhanvienks.php');
                            }
                          }         
                        }
                      });
              //kết thúc code thêm dữ liệu phòng
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
        
      }//ket thuc kiem tra ho nhan vien
      // két thúc kiểm tra mã loại phòng
    }else{
      $('#ma_nhanvien_them1').addClass('viendo');
      $('#ma_nhanvien_them1').removeClass('vienxanh');
      alert('Độ dài mã phòng sai ( Phải đủ  5 ký tự)');
    }
  }
};

//Xóa thông tin nhân viên
$(document).on('click', '.xoanv', function(){
  // alert('msg');
           var manhanvienxoa1 = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{manhanvienxoa1:manhanvienxoa1},
                dataType:"json",
                success:function(data){
                    $('#manhanvienxoa1').val(data.MA_NV);
                    $('#honhanvienxoa1').val(data.HO_NV);
                    $('#tennhanvienxoa1').val(data.TEN_NV);
                    $('#gioitinhnhanvienxoa1').val(data.GIOI_TINH);
                    $('#ngaysinhnhanvienxoa1').val(data.NGAY_SINH);
                    $('#diachinhanvienxoa1').val(data.DIA_CHI);
                    $('#sdtnhanvienxoa1').val(data.SDT);
                    $('#emailnhanvienxoa1').val(data.EMAIL);
                    $('#manhanvienxoa2').val(data.MA_NV);
                    
                    $('#insert1').val("Xóa");
                    $('#xoattnhanvien_data_Modal').modal('show');
                }

           });
      }); 
// hiện thông báo khi bấm nút xóa (Xóa thông tin nhân viên)
      $(document).on('submit', 'form[data-confirm]', function(e){
        var manhanvienxoa2 = $('#manhanvienxoa2').val();
        if (manhanvienxoa2) {

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
                data:{manhanvienxoa2:manhanvienxoa2},
                success:function(data129){
                  if (data129==99) {
                    alert('Xóa thông tin nhân viên thành công');
                    $('#xoa_thongtinnhanvien_form')[0].reset();
                    $('#xoattnhanvien_data_Modal').modal('hide');
                    $('#dl_nhanvienks').load('./dl_nhanvienks.php');
                  }else {
                    alert('Lỗi xóa nhân viên');
                  }
                }
            });
        }
      }
    });

// cập nhật lại thông tin nhân viên
$(document).on('click', '.capnhat_ttnv', function(){
  // alert('msg');
           var manhanvien_capnhat = $(this).attr("id");
           $.ajax({
                url:"./fetch.php",
                method:"POST",
                data:{manhanvien_capnhat:manhanvien_capnhat},
                dataType:"json",
                success:function(data){
                    $('#manhanvien_capnhat').val(data.MA_NV);
                    $('#honhanvien_capnhat').html(data.HO_NV);
                    $('#tennhanvien_capnhat').html(data.TEN_NV);
                    $('#gtnhanvien_capnhat').html(data.GIOI_TINH);
                    $('#gtnhanvien_capnhat').val(data.GIOI_TINH);
                    $('#ngaysinhnhanvien_capnhat').html(data.NGAY_SINH);
                    $('#diachinhanvien_capnhat').val(data.DIA_CHI);
                    $('#sdtnhanvien_capnhat').val(data.SDT);
                    $('#email_capnhat').val(data.EMAIL);
                    // $('#dlphongsua_ttchitiep').val(data.MA_LOAI_PHONG);
                    $('#manhanvien_capnhat2').val(data.MA_NV);
                    
                    $('#insert').val("Cập nhật");
                    $('#capnhat_ttnhanvien_data_Modal').modal('show');
                }

           });
      });
$(document).ready(function(){
   $('#capnhat_ttnhanvien').on('submit', function (e) {
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
                      alert('Số điện thoại đã tồn tại');
                    }else{
                      if (data==99) {
                        alert('Cập nhật thành công');
                          $('#capnhat_ttnhanvien_data_Modal').modal('hide');
                          $('#dl_nhanvienks').load('./dl_nhanvienks.php');

                      }else{
                        alert('Lỗi cập nhật !');
                      }
                    }
                }

           });
        }
    });
});