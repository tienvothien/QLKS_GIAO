function themkhachhang(){ // them khách hàng mới
  // alert('msg');
event.preventDefault();
if ($('#masophong_thue').val()=='') {
    $('#masophong_thue').addClass('viendo');
    $('#masophong_thue').removeClass('vienxanh');
    alert('Chưa chọn phòng');
  }else{
      $('#masophong_thue').removeClass('viendo');
      $('#masophong_thue').addClass('vienxanh');
      //kt số cmnd
       if ($('#so_cmnd').val()=='') {
        $('#so_cmnd').addClass('viendo');
        $('#so_cmnd').removeClass('vienxanh');
        alert('Chưa nhập số chứng minh nhân dân');
      }else{
      if ($('#so_cmnd').val().length==9) {
        $('#so_cmnd').removeClass('viendo');
        $('#so_cmnd').addClass('vienxanh');
        // kiem tra nhập họ
      if ($('#ho_khachhang').val()=='') {
        $('#ho_khachhang').removeClass('vienxanh');
        $('#ho_khachhang').addClass('viendo');
        alert('Chưa nhập họ khách hàng');
      }else{
        $('#ho_khachhang').removeClass('viendo');
        $('#ho_khachhang').addClass('vienxanh');
        //kiểm tra chưa nhập tên
        if ($('#ten_khachhang').val()=='') {
        $('#ten_khachhang').removeClass('vienxanh');
        $('#ten_khachhang').addClass('viendo');
        alert('Chưa nhập tên khách hàng');
      }else{
        $('#ten_khachhang').removeClass('viendo');
        $('#ten_khachhang').addClass('vienxanh');
        //kiểm tra chưa nhập giới tính
        if ($('#gioitinh_khachhang').val()=='') {
        $('#gioitinh_khachhang').removeClass('vienxanh');
        $('#gioitinh_khachhang').addClass('viendo');
        alert('Chưa chọn giới tính');
      }else{
        $('#gioitinh_khachhang').removeClass('viendo');
        $('#gioitinh_khachhang').addClass('vienxanh');
        //kiểm tra chưa nhập ngày sinh
        if ($('#ngaysinh_khachhang').val()=='') {
        $('#ngaysinh_khachhang').removeClass('vienxanh');
        $('#ngaysinh_khachhang').addClass('viendo');
        alert('Chưa nhập ngày sinh');
      }else{
        $('#ngaysinh_khachhang').removeClass('viendo');
        $('#ngaysinh_khachhang').addClass('vienxanh');
        //kiểm tra chưa nhập quốc tịch
        if ($('#quoctich_khachhang').val()=='') {
        $('#quoctich_khachhang').removeClass('vienxanh');
        $('#quoctich_khachhang').addClass('viendo');
        alert('Chưa nhập quốc tịch');
      }else{
        $('#quoctich_khachhang').removeClass('viendo');
        $('#quoctich_khachhang').addClass('vienxanh');
        //kiểm tra chưa nhập địa chỉ
        if ($('#diachi_khachhang').val()=='') {
        $('#diachi_khachhang').removeClass('vienxanh');
        $('#diachi_khachhang').addClass('viendo');
        alert('Chưa nhập địa chỉ');
      }else{
        $('#diachi_khachhang').removeClass('viendo');
        $('#diachi_khachhang').addClass('vienxanh');
        //Số điện thoại
      if ($('#sdt_khachhang').val()=='') {
        $('#sdt_khachhang').addClass('viendo');
        $('#sdt_khachhang').removeClass('vienxanh');
        alert('Chưa nhập số điện thoại');
      }else{
      if ($('#sdt_khachhang').val().length==10) {
        $('#sdt_khachhang').removeClass('viendo');
        $('#sdt_khachhang').addClass('vienxanh');
   
        // nếu đủ dữ liệu tiến hành gọi hàm thêm phòng
        var masophong_thue= $('#masophong_thue').val()
        var ho_khachhang= $('#ho_khachhang').val()
        var ten_khachhang= $('#ten_khachhang').val()
        var so_cmnd= $('#so_cmnd').val()
        var gioitinh_khachhang= $('#gioitinh_khachhang').val()
        var ngaysinh_khachhang= $('#ngaysinh_khachhang').val()
        var quoctich_khachhang= $('#quoctich_khachhang').val()
        var diachi_khachhang= $('#diachi_khachhang').val()
        var sdt_khachhang= $('#sdt_khachhang').val()
        $.ajax({
            url:"./themthongtinkhachdatphong.php",
            method:"POST",
            data:{
              masophong_thue:masophong_thue,
              so_cmnd:so_cmnd,
              ho_khachhang:ho_khachhang,
              ten_khachhang:ten_khachhang,
              gioitinh_khachhang:gioitinh_khachhang,
              ngaysinh_khachhang:ngaysinh_khachhang,
              quoctich_khachhang:quoctich_khachhang,
              diachi_khachhang:diachi_khachhang,
              sdt_khachhang:sdt_khachhang
              },
                success:function(data1234){
                  // alert(data1234);

                    if (data1234==1) {
                      $('#masophong_thue').addClass('viendo');
                      $('#masophong_thue').removeClass('vienxanh');
                      alert('Mã đã tồn tại');
                          }else{
                            if (data1234==99) {
                              alert("Thêm khách hàng thành công");
                              $('#dl_dskhachdatphong').load('./dl_dskhachdatphong.php');
                            }
                          }         
                        }
                      });
        // kết thúc code thêm dữ liệu phòng
                      }else{
                  $('#sdt_khachhang').addClass('viendo');
                  $('#sdt_khachhang').removeClass('vienxanh');
                  alert('Độ dài số điện thoại sai ( Phải đủ  10 ký tự)');
                      }
                    }//sdt
                  }//địa chỉ
                }//quốc tịch
              }//ngày sinh
            }//giới tính
          } //tên 
         }  //họ
      }else{
      $('#so_cmnd').addClass('viendo');
      $('#so_cmnd').removeClass('vienxanh');
      alert('Độ dài số cmnd sai ( Phải đủ  9 ký tự)');
          }
        }//số cmnd
    }//kt kiem tra ma phong
  

 };

 // xem chi tiết thông tin khách hàng
$(document).ready(function(){
        // nhấn nút edit hiện thông tin sưa
      $(document).on('click', '.chitiet_ttkhachthuephong', function(){
           var maphong_chitiet = $(this).attr("id");
           // alert('msg');
           $.ajax({
              url:"./select.php",
              method:"POST",
              data:{maphong_chitiet:maphong_chitiet},
              success:function(data123){
                $('#employee_detail2').html(data123);
                $('#chitiet_khachhang').modal('show');
              }
            });
      });
    });

