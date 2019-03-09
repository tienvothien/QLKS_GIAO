<?php 
	include 'conn.php';
	$dl1 = mysqli_query($conn, "SELECT * FROM phong");
	if (mysqli_num_rows($dl1)) {
		while ($row= mysqli_fetch_array($dl1)) {
			echo "
					
					 		<div class='col-xs-6 col-sm-4 col-md-2 col-lg-2'>
					 				<div class='thumbnail'>
					 					<div class='caption'>
					 						<h3>Phòng số</h3>
					 						<p>
					 							$row[MA_PHONG]
					 						</p>
					 						";?> 
				<p>
					<button type="button" class="btn btn-info nutnek">Xóa</button>
					<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Sửa</button>
					<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Chi tiết</button>
				</p>
					 						<?php echo ";</div>	
					 						
					 					</div>
					 				</div>
			";
		}
	}


 ?>
 <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Modal Header</h4>
					        </div>
					        <div class="modal-body">
					          <p>This is a small modal.</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					    </div>
					  </div>
					  <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Modal Header</h4>
					        </div>
					        <div class="modal-body">
					          <p>This is a small modal.</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					    </div>
					  </div>