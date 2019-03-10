                    <?php 
                        include("conn.php");
                    $sql= "SELECT * FROM  loaithietbi ";
                    $query=mysqli_query($conn,$sql);
                    // $num=mysql_num_rows($query);
                
                            echo"<table class='table table-bordered'>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã loại thiết bị</th>
                                    <th>Tên loại thiết bị</th>
                                    
                                    <th colspan='2'>
                                        <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Thêm</button>

                                             <div class='modal fade' id='myModal' role='dialog'>
                                            <div class='modal-dialog'>
                                            
                                              
                                              <div class='modal-content'>
                                                <div class='modal-header'>
                                                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                  <h4 class='modal-title'>Thêm loại thiết bị</h4>
                                                </div>
                                                <div class='modal-body'>
                                                  
                                                    <form style='font-size: 20px; margin: auto;' class='form-horizontal' action='themphong.php'>
                                                        <div class='form-group'>
                                                          <label class='control-label col-sm-4' for='email'>Mã loại thiết bị</label>
                                                          <div class='col-sm-8'>
                                                            <input type='text' class='form-control '  placeholder='Nhập mã loại thiết bị' name='maphong'>
                                                          </div>
                                                        </div>
                                                        
                                                        <div class='form-group'>
                                                          <label class='control-label col-sm-4' for='pwd'>Tên loại thiết bị</label>
                                                          <div class='col-sm-8'>          
                                                            <input type='text' class='form-control' id='pw' placeholder='Nhập tên loại thiết bị' name='pwd'>
                                                          </div>
                                                        </div>
                                                        
                                                    </form>

                                                </div>
                                                <div class='modal-footer'> 
                                                  <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                  <button type='submit' class='btn btn-default them' data-dismiss='modal'>Thêm</button>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                    </th>

                                </tr>";
                                $STT=1;
                            while ($row=mysqli_fetch_array($query)) {
                                echo "<tr>
                                        <td>$STT</td>
                                        <td>$row[MA_LOAI_THIET_BI]</td>
                                        <td>$row[TEN_LOAI_THIET_BI]</td>
                                        
                                        <td>
                                                
                                                  
                                                  <button type='button' class='btn btn-info btn-lg1' data-toggle='modal' data-target='#myModal'>Sửa</button>

                                                  
                                                  <div class='modal fade' id='myModal1' role='dialog'>
                                                    <div class='modal-dialog'>
                                                    
                                                      
                                                      <div class='modal-content'>
                                                        <div class='modal-header'>
                                                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                          <h4 class='modal-title'>Modal Header</h4>
                                                        </div>
                                                        <div class='modal-body'>
                                                          nội dung
                                                        </div>
                                                        <div class='modal-footer'>
                                                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                        </div>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                  
                                                

                                            
                                        </td>
                                        <td>
                                            <a href='qlthietbi.php?matbxoa=$row[MA_LOAI_THIET_BI]' title=''>
                                               <button type='button' class='btn btn-info btn-lg1' data-toggle='modal' data-target='#myModal'>Xóa</button>
                                            </a>
                                        </td
                                </tr>";
                                $STT++;
                                
                            }   echo "</table>";
                                echo $row['MA_LOAI_THIET_BI'];
                                echo $row['TEN_LOAI_THIET_BI'];
                             
                    ?>
                     