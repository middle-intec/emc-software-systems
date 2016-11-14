<?php
session_start();
require"../lib/mConnection.php";
require"../lib/quanli.php";
?>
<div class="table-responsive">
		               <table class="table table-bordered"">
						<thead>
						<tr class="success">
					  		<th>STT</th>
					  		<th>Mã nhân viên</th>
					  		<th>Tên nhân viên</th>
					  		<th>Phòng ban</th>
					  		<th>Nhóm</th>
					  		<th>Quyền hạn</th>
					  		<th>Chức năng</th>
					  	</tr>
		                </thead>
						<tbody>
<?php
	if(isset($_GET['data'])){
		$data = $_GET['data'];
		$sql = "SELECT * FROM nhanvien inner join phongban on nhanvien.pb = phongban.id_pb inner join level on nhanvien.level = level.id_level WHERE ten LIKE '%$data%'";
		$result = mysql_query($sql, $con);
		$stt = 0;
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
			ob_start();
			$stt++;
			?>
			<tr class="roweven">
		        			<td><?php echo $stt;?></td>
					  		<td>{manv}</td>
					  		<td>{ten}</td>
					  		<td>{phongban}</td>
					  		<td><?php
								$nhom = $row["id_nh"];
								if(($nhom)==1){
									echo ' Nhóm 01 ';
								}elseif (($nhom)==2) {
									echo ' Nhóm 02';
								}elseif (($nhom)==3){
									echo ' Nhóm sales ';
								}elseif (($nhom)==4){
									echo ' Nhóm CSKH ';
								}else{
									echo 'Không có nhóm';
								}
							?>
					  		</td>
					  		<td>{level}</td>
					  		<td>
<div class="btn-group">
<a class="btn btn-primary" href="suanhanvien.php?id_nv={id_nv}">Sửa</a>
<a class="btn btn-primary" onclick = "return confirm('Bạn có chắc là muốn xóa không ?')" showdeletebutton="True" href="xoanhanvien.php?id_nv={id_nv}">Xóa</a>
</div>
		                	</td></tr> 
		              <?php
						$s = ob_get_clean();
						$s = str_replace("{id_nv}", $row["id_nv"], $s);
						$s = str_replace("{manv}", $row["manv"], $s);
						$s = str_replace("{ten}", $row["ten"], $s);
						$s = str_replace("{phongban}", $row["phongban"], $s);
						$s = str_replace("{level}", $row["level"], $s);
						echo $s; 
						}}
						//Đóng kết nối
		mysql_close($con);
						?>
						</tbody>
				   </table>
</div>