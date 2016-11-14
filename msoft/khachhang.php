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
		if(empty($_POST["congty"])&empty($_POST["tel"])&empty($_POST["donvi"])&empty($_POST["id_nv"])){
	echo '<script type="text/javascript">alert("Bạn phải nhập đầy đủ thông tin");</script>';
	}else{
		$makh = $_POST["makh"];
		$congty = $_POST["congty"];
		$tel = $_POST["tel"];
		$donvi = $_POST["donvi"];
		$daidien = $_POST["daidien"];
		$id_nv = $_POST["id_nv"];
		$qr = "insert into khachhang values (null,'$makh','$congty','$tel','$donvi','$daidien','$id_nv')";
		mysql_query($qr);
		header("location: khachhang.php");
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
				<h1 class="page-header">Quản Lý Khách Hàng</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
                <div class="panel-heading"> Thêm khách hàng:</div>
                <div class="panel-body">
					<form action="" method="post">
						<div class="col-sm-6"> 
						<div class="form-group">	
						<label for="email"> Mã khách hàng:</label>	
	                    <input data-toggle="tooltip" data-placement="top" title=" Lưu ý: Nhập đúng Mã Khách hàng trong phần mềm DIP" class="form-control" name="makh">
	   					</div>  
						<div class="form-group">	
						<label for="email"> Thông tin công ty:</label>	
	                    <input class="form-control" name="congty">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Số điện thoại:</label>	
	                    <input data-toggle="tooltip" data-placement="top" title=" Lưu ý: Nhập đúng số điện thoại của người nhận tin nhắn SMS. Định dạng số điện thoại 84.." class="form-control" name="tel">
	                    </div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label> Viết tắt</label>
				  		<input class="form-control" name ="donvi"  type="text">
				  		</div>
				  		<div class="form-group">	
						<label for="email"> Người đại diện:</label>	
	                    <input class="form-control" name="daidien">
	   					</div>
				  		<div class="form-group">
  						<label> Nhân viên QL</label>
				   		<select class="form-control" name="id_nv">
	                    <option value="">Tên nhân viên</option>
						<?php 
						$name=mysql_query("select * from nhanvien where pb=3");
						while($rown = mysql_fetch_array($name)){?>
	   					<option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
						<?php }
						 ?>
	   					</select>
				   		</div></div>						
	                    <button type="submit" class="btn btn-primary" name="ok">Thêm khách hàng</button>
	                    <a href="download/downloadKH.php" class="btn btn-primary">Xuất Excel</a>
                    </form> 
				</div></div>
				<div class="panel panel-primary">
                <div class="panel-heading"> Danh sách khách hàng:</div>
                <div class="panel-body">
                <div align="center">  
                     <input type="text" placeholder="Nhập ký tự cần tìm" name="search" id="search" class="form-control" />  
                </div>				
                <div class="table-responsive">
		               <table class="table table-bordered" id="khachhang_table">
						<thead>
						<tr class="success">
					  		<th>STT</th>
					  		<th>Mã KH</th>
					  		<th>Công ty</th>
					  		<th>Số điện thoại</th>
					  		<th>Viết tắt</th>
					  		<th>Đại diện</th>
					  		<th>Nhân viên QL</th>
					  		<th width="110px">Chức năng</th>
					  	</tr>
					  	</thead>
					  	<tbody>
		                    <?php
		                    $limit = 50;
							$khachhang = khachhang($limit);
							$stt = 0;
							while ($row_khachhang = mysql_fetch_array($khachhang)){
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
						$s = str_replace("{id_kh}", $row_khachhang ["id_kh"], $s);
						$s = str_replace("{makh}", $row_khachhang ["makh"], $s);
						$s = str_replace("{congty}", $row_khachhang ["congty"], $s);
						$s = str_replace("{tel}", $row_khachhang ["tel"], $s);
						$s = str_replace("{donvi}", $row_khachhang ["donvi"], $s);
						$s = str_replace("{daidien}", $row_khachhang ["daidien"], $s);
						$s = str_replace("{id_nv}", $row_khachhang ["ten"], $s);
						echo $s;
						}
						?>
					</tbody>
					<tbody id="themdanhsach"></tbody>
				   </table>
			</div>
				</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html> 
<script>
var toancuc = 1;
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 

    $(window).scroll(function() {
         if($(window).scrollTop() + $(window).height() == $(document).height()) {
           toancuc = toancuc + 1;
           $.get("data_ajax/data_xemthemkh.php", {trang:toancuc}, function(data){
             $("#themdanhsach").append(data);
             $("#themdanhsach").fadeIn('slow'); 
           });
         }
      }); 

    $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#khachhang_table tr').each(function(){  
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