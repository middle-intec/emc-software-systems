<?php
session_start();
require"../lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>

<?php 
	if(isset($_POST["ok"])){
		if(empty($_POST["manv"])&empty($_POST["ten"])&empty($_POST["pb"])&empty($_POST["level"])){
	echo '<script type="text/javascript">alert("Bạn phải nhập đầy đủ thông tin");</script>';
	}else{
		$manv = $_POST["manv"];
		$ten = $_POST["ten"];
		$pb = $_POST["pb"];
		$mk = $_POST["manv"];
		$matkhau = md5($mk);
		$nhom = $_POST["id_nh"];
		$level = $_POST["level"];
		$qr = "insert into nhanvien values (null,'$manv','$matkhau','$ten','$pb','$nhom','$level')";
		mysql_query($qr);
		header("location: nhanvien.php");
	}}
?>


<!DOCTYPE html>
<html>
<?php require"block/head.php"; ?>
    <!--nav.php-->
<body>
	<?php require"block/nav.php"; ?>
    <!--nav.php-->
	<?php require"block/sidebar.php"; ?>
    <!--sidebar.php-->		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<?php require"block/breadcrumb.php"; ?>
	    <!--breadcrumb.php-->			
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản Lý Nhân Viên</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Phòng ban</div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox">Admin</label>
									<label for="checkbox">Tổng Giám Đốc</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
									<a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
								</div>
						</li>
						</ul>
					</div>
					<div class="panel-footer">
						<form class="form-inline">
							<div class="form-group">
							<input style="width: 30%;" type="text" name = "mapb" class="form-control input-md" placeholder="Mã phòng" />
							<input style="width: 67%;" type="text" name = "phongban" class="form-control input-md" placeholder="Nhập tên phòng" /></div>
							<div class="form-group">
							<button class="btn btn-primary btn-md" id="btn-todo"> Thêm phòng</button>
							</div>
						</form>
					</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Nhóm của phòng </div>
					<div class="panel-body">
						<ul class="todo-list">
						<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox">Nhóm 01</label>
									<label for="checkbox">Tổng Giám Đốc</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
									<a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<form class="form-inline">
							<div class="form-group">
							<input style="width: 67%;" type="text" name = "nhom" class="form-control input-md" placeholder= "Tên Nhóm" />
							<input style="width: 30%;" type="text" name = "id_pb" class="form-control input-md" placeholder="ID phòng" /></div>
							<div class="form-group">
							<button class="btn btn-primary btn-md" id="btn-todo"> Thêm nhóm </button>
							</div>
						</form>
					</div>
					</div>
				</div>
		<div class="col-lg-12">
				<div class="panel panel-primary">
                <div class="panel-heading"> Thêm nhân viên:</div>
                <div class="panel-body">
					<form action="" method="post">
						<div class="col-sm-6">   
						<div class="form-group">	
						<label for="email"> Mã nhân viên:</label>	
	                    <input class="form-control" name="manv">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Tên:</label>	
	                    <input class="form-control" name="ten">
	                    </div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label> Phòng ban</label>
				  		<select class="form-control" name="pb">
	                    <option value=""> Chọn phòng ban</option>
	                    <?php 
						$name=mysql_query("select * from phongban");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_pb']; ?>"><?php echo $rown['phongban']; ?></option>
						<?php }
						 ?>
	   					</select>
				  		</div>
				  		<div class="form-group">
  						<label> Nhóm</label>
				   		<select class="form-control" name="id_nh">
	                    <option value="0"> Chọn nhóm </option>
	                    <?php 
						$name=mysql_query("select * from nhom");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_nh']; ?>"><?php echo $rown['tennhom']; ?></option>
						<?php }
						 ?>
	   					</select>
				   		</div>
	                    <div class="form-group">
  						<label> Quyền</label>
				   		<select class="form-control" name="level">
	                    <option value=""> Chọn quyền</option>
	                    <?php 
						$name=mysql_query("select * from level");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_level']; ?>"><?php echo $rown['level']; ?></option>
						<?php }
						 ?>
	   					</select>
				   		</div></div>						
	                    <button type="submit" class="btn btn-primary" name="ok">Thêm nhân viên</button>
                    </form> 
                    </div></div>
                <div class="panel panel-primary">
                <div class="panel-heading"> Danh sách nhân viên:</div>
                <div class="panel-body">
                <?php
				// TÌM TỔNG SỐ RECORDS
				        $result = mysql_query("select count(id_nv) as total from nhanvien");
				        $row = mysql_fetch_assoc($result);
				        $total_records = $row['total'];
				 
				// TÌM LIMIT VÀ CURRENT_PAGE
				        $current_page = isset($_GET['trang']) ? $_GET['trang'] : 1;
				        $limit = 50;
				 
				// TÍNH TOÁN TOTAL_PAGE VÀ START
				// tổng số trang
				        $total_page = ceil($total_records / $limit);
				 
				// Giới hạn current_page trong khoảng 1 đến total_page
				        if ($current_page > $total_page){
				            $current_page = $total_page;
				        }
				        else if ($current_page < 1){
				            $current_page = 1;
				        }
				 
				// Tìm Start
				        $start = ($current_page - 1) * $limit;
				 
				        ?>
				<div align="center">  
                     <input type="text" placeholder="Nhập ký tự cần tìm" name="search" id="search" class="form-control" />  
                </div>	
                <div class="table-responsive">
		               <table class="table table-hover" id ="nhanvien_table">
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
							$nhanvien = nhanvien($start,$limit);
							$stt = 0;
							while ($row_nhanvien = mysql_fetch_array($nhanvien)){
								ob_start();
								$stt++;
						?>
		        		<tr class="roweven">
		        			<td><?php echo $stt;?></td>
					  		<td>{manv}</td>
					  		<td>{ten}</td>
					  		<td>{pb}</td>
					  		<td><?php
								$nhom = $row_nhanvien ["id_nh"];
								if(($nhom)==2){
									echo ' Nhóm 01 ';
								}elseif (($nhom)==3) {
									echo ' Nhóm 02';
								}elseif (($nhom)==4){
									echo ' Nhóm sales ';
								}elseif (($nhom)==5){
									echo ' Nhóm CSKH ';
								}else{
									echo 'Không có nhóm';
								}
							?>
					  		</td>
					  		<td>{level}</td>
							<td><div class="btn-group">
							<a class="btn btn-primary btn-sm" href="suanhanvien.php?id_nv={id_nv}">Sửa</a>
							<a class="btn btn-primary btn-sm" onclick = "return confirm('Bạn có chắc là muốn xóa không ?')" showdeletebutton="True" href="xoanhanvien.php?id_nv={id_nv}">Xóa</a>
							</div>
							</td></tr> 
		              <?php
						$s = ob_get_clean();
						$s = str_replace("{id_nv}", $row_nhanvien ["id_nv"], $s);
						$s = str_replace("{manv}", $row_nhanvien ["manv"], $s);
						$s = str_replace("{ten}", $row_nhanvien ["ten"], $s);
						$s = str_replace("{pb}", $row_nhanvien ["phongban"], $s);
						$s = str_replace("{level}", $row_nhanvien ["level"], $s);
						echo $s; 
						}
						?>
					</tbody>
				   </table>
			</div>
			<ul class="pagination">
				           <?php 
				            // PHẦN HIỂN THỊ PHÂN TRANG
				            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
				            if ($current_page > 1 && $total_page > 1){
				                echo '<li><a href="nhanvien.php?trang='.($current_page-1).'"> Trở về</a></li>';
				            }
				 
				            // Lặp khoảng giữa
				            for ($i = 1; $i <= $total_page; $i++){
				                // Nếu là trang hiện tại thì hiển thị thẻ span
				                // ngược lại hiển thị thẻ a
				                if ($i == $current_page){
				                    echo '<li class="active"><span>'.$i.'</span></li>';
				                }
				                else{
				                    echo '<li><a href="nhanvien.php?trang='.$i.'">'.$i.'</a></li>';
				                }
				            }
				 
				            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
				            if ($current_page < $total_page && $total_page > 1){
				                echo '<li><a href="nhanvien.php?trang='.($current_page+1).'"> Kế tiếp</a></li>';
				            }
				           ?>
       				</ul>
				</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html> 
<script>
$(document).ready(function(){
	$('#search').keyup(function(){  
                search_table($(this).val());  
           });  
    function search_table(value){  
                $('#nhanvien_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }
 });
</script>