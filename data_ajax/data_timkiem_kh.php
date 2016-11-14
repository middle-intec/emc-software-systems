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
					  		<th>Mã KH</th>
					  		<th>Công ty</th>
					  		<th>Số điện thoại</th>
					  		<th>Viết tắt</th>
					  		<th>Đại diện</th>
					  		<th>Nhân viên QL</th>
					  		<th>Chức năng</th>
					  	</tr>
					  	</thead>
					  	<tbody>
		<?php
			if(isset($_GET['data'])){
				$data = $_GET['data'];		
				$sql = "SELECT * FROM khachhang inner join nhanvien on khachhang.id_nv = nhanvien.id_nv WHERE congty LIKE '%$data%'";
				$result = mysql_query($sql, $con);
				$stt = 0;
				while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
					ob_start();
					$stt++;
					?>
					<tr class="roweven">
		        			<td><?php echo $stt;?></td>
		        			<td>{makh}</td>
		        			<td>{congty}</td>
		        			<td>{tel}</td>
		        			<td>{donvi}</td>
		        			<td>{daidien}</td>
		        			<td>{id_nv}</td>
		        			<td>
		                    <div class="btn-group">
							<a class="btn btn-primary btn-sm" href="suakhachhang.php?id_kh={id_kh}">Sửa</a>
							<a class="btn btn-primary btn-sm" onclick = "return confirm('Bạn có chắc là muốn xóa không ?')" showdeletebutton="True" href="xoakhachhang.php?id_kh={id_kh}">Xóa</a>
							</div>
		                	</td>
		                </tr>
		              <?php
						$s = ob_get_clean();
						$s = str_replace("{id_kh}", $row["id_kh"], $s);
						$s = str_replace("{makh}", $row["makh"], $s);
						$s = str_replace("{congty}", $row["congty"], $s);
						$s = str_replace("{tel}", $row["tel"], $s);
						$s = str_replace("{daidien}", $row["daidien"], $s);
						$s = str_replace("{donvi}", $row["donvi"], $s);
						$s = str_replace("{id_nv}", $row["ten"], $s);
						echo $s; 
						}}
						//Đóng kết nối
		mysql_close($con);
						?>
						</tbody>
				   </table>
</div>