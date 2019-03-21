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
  });
// hiện thông tin suawrtb rtrong ung loại phong
  $(document).on('click', '.sua_tbphong11', function () {
    var matblp_chitiet123 = $(this).attr("id");
    $.ajax({
      url:"./select.php",
      method:"POST",
      data:{matblp_chitiet123:matblp_chitiet123},
      // dataType:"json",
      success:function(data){
        // alert(data);
        $('#xoatTlpemployee_detail2').html(data);
        $('#xoatTlp').modal('show');
      }
    });    
  })
  // xử lý nút xóa của thêm thiết bị tưng loại phòng
  $(document).on('click', '.xoathittungloaiphong', function () {
    var matblp_chitiet123_xoa = $(this).attr("id");
    $.ajax({
      url:"./insert_phong.php",
      method:"POST",
      data:{matblp_chitiet123_xoa:matblp_chitiet123_xoa},
      // dataType:"json",
      success:function(data){
        if (data==99) {
          alert('Xóa thành công');
          $('#xoatTlp').modal('hide');
        }else{
          alert('Lỗi xóa')
        }
        
      }
    });    
  })



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

