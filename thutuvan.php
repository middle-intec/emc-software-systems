<?php
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>

<?php 
	if(isset($_POST["ok"])){
		if(empty($_POST["congty"])){
	echo '<script type="text/javascript">alert("Bạn chưa nhập công ty mình quản lý");</script>';
	}else{
		$congty = $_POST["congty"];
		$tel = $_POST["tel"];
		$donvi = $_POST["donvi"];
		$id_nv = $_POST["id_nv"];
		$tgian = $_POST["tgian"];
		$dt = $_POST["dt"];
		$vat = $_POST["vat"];
		$ln = $_POST["ln"];
		$tndn = $_POST["tndn"];
		$tuvan = $_POST["tuvan"];	
		$thang = date("m");
		$nam = date("Y");
		$qr = "insert into thutuvan values (null,'$congty','$tel','$donvi','$id_nv','$tgian','$dt','$vat','$ln','$tndn','$tuvan','$thang','$nam',0)";
		mysql_query($qr);
		header("location: thutuvan.php");
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
				<h1 class="page-header">Hệ Thống Thư Tư Vấn</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Xem thư tư vấn tháng:</div>
				<div class="panel-body">
				 <form action="xemthutuvan.php" method="get" class="form-inline">
				 <div class="form-group">
                <label for="email">Nhân viên:</label>
                <select class="form-control" name="manv" style="width: 200px;">
				<?php 
				$pb = $_SESSION['pb'];
				if (($_SESSION["level"]) > 2){
				$manv = $_SESSION["manv"];
				$name=mysql_query("select * from nhanvien where manv = '$manv'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $_SESSION["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}elseif((($_SESSION["level"]) >= 2)&($pb = 3)){
				$name=mysql_query("select * from nhanvien where pb = '$pb'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}else{
				$name=mysql_query("select * from nhanvien where id_nv <> 1");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
				}
				 ?>
   				</select></div>
   				<div class="form-group">
                <label for="pwd">Tháng tư vấn:</label> 
                <select class="form-control" name="thang" style="width: 70px;">
				<?php 
						$name=mysql_query("select distinct thang from thutuvan order by thang DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['thang']; ?>"><?php echo $rown['thang']; ?></option>
					<?php } ?>
   				</select></div>
   				<div class="form-group">
                <label for="email">Năm:</label> 
                <select class="form-control" name="nam" style="width: 100px;">
				<?php 
						$name=mysql_query("select distinct nam from thutuvan order by nam DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['nam']; ?>"><?php echo $rown['nam']; ?></option>
					<?php } ?>
   				</select></div>
               <button type="submit" class="btn btn-primary" name="">Xem Thư</button>
                </form>
				</div></div>
				<div class="panel panel-primary">
                <div class="panel-heading">Viết thư tư vấn:</div>
                <div class="panel-body">
					<form action="" method="post">
						<div class="col-sm-6">   
						<div class="form-group">	
						<label for="email">Thông tin công ty:</label>	 
	                    <select class="form-control congty" name="congty">
	                    <option value="">Công ty</option>
						<?php 
						if(($_SESSION["id_nv"]) <= 2){
						$name=mysql_query("select congty from khachhang");
							while($rown = mysql_fetch_array($name)){?>
							 
	   						 <option value="<?php echo $rown['congty']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }	
					    }else{
						$id_nv = $_SESSION["id_nv"];
						$name=mysql_query("select congty from khachhang where id_nv = '$id_nv'");
							while($rown = mysql_fetch_array($name)){?>
							 
	   						 <option value="<?php echo $rown['congty']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }
					     }
						 ?>
	   					</select>
	   					</div>
	   					<div class="form-group">	
	   					<label for="email">Số điện thoại:</label>	
	                    <select class="form-control tel" name="tel">
	                    <option value="">Số điện thoại</option>
	   					</select></div>
						<div class="form-group">	
	   					<label for="email">Đơn vị:</label>	
	   					<select class="form-control donvi" name="donvi">
	   					<option value="">Đơn vị</option>
	   					</select></div>
						<div class="form-group">
  						<label>Lợi nhuận</label>
						<input class="form-control" name ="ln"  type="text">
						</div>
						<div class="form-group">
  						<label>Nhân viên</label>
						<select class="form-control nv" name="id_nv"> 
						<option value="">Tên nhân viên</option>
	   					</select>
						</div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label>Thời gian</label>
  						<?php
  							$monthnow = (date("m")-1);
							$yearnow = date("Y");
							$thoigian = "T$monthnow/$yearnow";
  						?>
				  		<input class="form-control" value="<?php echo $thoigian;?>" name ="tgian"  type="text">
				  		</div>
				  		<div class="form-group">
  						<label>Doanh thu</label>
				   		<input class="form-control" name ="dt"  type="text">
				   		</div>
				   		<div class="form-group">
  						<label>VAT</label>
						<input class="form-control" name ="vat"  type="text">
						</div>		
						<div class="form-group">
  						<label>TNDN</label>
	                    <input class="form-control" name ="tndn" type="text">
						</div><div class="form-group">
  						<label>Tư vấn</label>
						<textarea class="form-control" name ="tuvan"  type="text"></textarea>
						</div></div>						
	                    <button type="submit" class="btn btn-primary" name="ok">Lưu thư mới</button>
                    </form> 
                    </div></div>
				    <div class="panel panel-primary">
                    <div class="panel-heading">TOP 20 thư được lưu gần đây</div>
				    <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
						<tbody>
							<tr class="rowheader">
						  		<td width="2%" align="center">
							  	STT
								</td><td width="23%" align="center">
							  	Công ty
								</td><td width="5%" align="center">
							  	Số điện thoại
						  		</td><td width="5%" align="center">
							  	Đơn vị
							  	</td><td width="5%" align="center">
								Thời gian
						  		</td><td width="5%" align="center">
								Doanh thu
						  		</td><td width="5%" align="center">
								VAT
						  		</td><td width="5%" align="center">
							  	Lợi nhuận
						  		</td><td width="5%" align="center">
								TNDN
						  		</td><td width="30%" align="center">
								Tư vấn
						  		</td><td width="10%" align="center">
						  		Nhân viên QL
			                    </td></tr>
			                    <?php
							  $top10thutuvan = top10thutuvan();
							  $stt = 0;
							while ($row_top10thutuvan = mysql_fetch_array($top10thutuvan)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" style="font-size:small" >
			        			<td width="2%" align="center">
							  	<span>
							  		<?php echo $stt;?>
							  	</span>
						  		</td><td width="23%" align="left">
							  	<span>
							  		{congty}
							  	</span>
						  		</td><td width="5%" align="center">
							  	<span>
							  		{tel}
							  	</span>
						  		</td><td width="5%" align="center">
							  	<span>
							  		{donvi}
							  	</span>
							  	</td><td width="5%" align="center">
							  	<span>
							  		{tgian}	
							  	</span>
						  		</td><td width="5%" align="center">
								<span>
									{dt}
								</span>
						  		</td><td width="5%" align="center">
								<span>
									{vat}
								</span>
						  		</td><td width="5%" align="center">
							  	<span>
							  		{loinhuan}
							  	</span>
						  		</td><td width="5%" align="center">
							  	<span>
							  		{tndn}
							  	</span>
						  		</td><td width="30%" align="center">
							  	<span>
							  		{tuvan}
							  	</span>
						  		</td><td width="10%" align="center">
						  		<span>
							  		{ten}
							  	</span>	
						  		</td></tr> 
			              <?php
							$s = ob_get_clean();
							$s = str_replace("{congty}", $row_top10thutuvan["congty"], $s);
							$s = str_replace("{tel}", $row_top10thutuvan["tel"], $s);
							$s = str_replace("{donvi}", $row_top10thutuvan["donvi"], $s);
							$s = str_replace("{tgian}", $row_top10thutuvan["tgian"], $s);
							$s = str_replace("{dt}", $row_top10thutuvan["dt"], $s);
							$s = str_replace("{vat}", $row_top10thutuvan["vat"], $s);
							$s = str_replace("{loinhuan}", $row_top10thutuvan["ln"], $s);
							$s = str_replace("{tndn}", $row_top10thutuvan["tndn"], $s);
							$s = str_replace("{tuvan}", $row_top10thutuvan["tuvan"], $s);
							$s = str_replace("{ten}", $row_top10thutuvan["ten"], $s);
							echo $s; 
							}
							?> 
						</tbody>
		        </table></div></div></div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
