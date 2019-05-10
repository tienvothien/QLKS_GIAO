<?php
include "conn.php";
$sql = "SELECT * FROM  loaithietbi where xoa =0 ";
$query = mysqli_query($conn, $sql);
// $num=mysql_num_rows($query);
        echo "<table class='table table-bordered table-responsive dlthietbi'>
            <tr>
                <th>STT</th>
                <th>Mã loại thiết bị</th>
                <th>Tên loại thiết bị</th>
                <th>Hình ảnh</th>
                <th>Cập nhật</th>
                <th>Xóa</th>
            </tr>";
        $STT = 1;
        while ($row = mysqli_fetch_array($query)) {
        	echo "<tr>
                <td>$STT</td>
                <td>$row[MA_LOAI_THIET_BI]</td>
                <td style='text-align: left;'>$row[TEN_LOAI_THIET_BI]</td>
                <td><img style='width:200px ;height:auto' src='img/$row[HINH_ANH]' alt='' ></td>
                <td>
                    <button type='button' class='btn btn-info btn-lg1 capnhattb2323' id=" . $row['MA_LOAI_THIET_BI'] . "> <span class='glyphicon glyphicon-pencil'></span> Cập nhật</button>
                </td>
                <td>
                    <button type='button' class='btn btn-info btn-lg1 btn_xoatb' id=" . $row['MA_LOAI_THIET_BI'] . "> <span class='glyphicon glyphicon-trash'></span> Xóa</button>
                </td
            </tr>";
        	$STT++;
        }
        echo "</table>";
        echo $row['MA_LOAI_THIET_BI'];
        echo $row['TEN_LOAI_THIET_BI'];
        echo $row['HINH_ANH'];
?>