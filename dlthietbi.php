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
                                    <th>Sửa</th> 
                                    <th>Xóa</th>
                                    
                                    
                                </tr>";
                                $STT=1;
                            while ($row=mysqli_fetch_array($query)) {
                                echo "<tr>
                                        <td>$STT</td>
                                        <td>$row[MA_LOAI_THIET_BI]</td>
                                        <td>$row[TEN_LOAI_THIET_BI]</td>
                                        
                                        <td>  
                                          <button type='button' class='btn btn-info btn-lg1' onclick='themcapnhat();'>Cập nhật</button>
                                        </td>
                                        <td>
                                             <button type='button' class='btn btn-info btn-lg1' onclick='nutxoa();'>Xóa</button>
                                        </td
                                </tr>";
                                $STT++;
                                
                            }   echo "</table>";
                                echo $row['MA_LOAI_THIET_BI'];
                                echo $row['TEN_LOAI_THIET_BI'];
                             
                    ?>
                     
