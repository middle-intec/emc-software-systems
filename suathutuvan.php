<?php
ob_start();
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>
<?php 
$id_thutuvan = $_GET["id_thutuvan"];
$row_suathutuvan = suathutuvan($id_thutuvan);
?>

<?php 
	if(isset($_POST["ok"])){
		$manv = $_SESSION["id_nv"];
		$id_thutuvan = $_GET["id_thutuvan"];
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
		if(($_SESSION["level"])==1){
		$thang = $_POST["thang"];
		$nam = $_POST["nam"];
		$qr = "update thutuvan set congty = '$congty',tel = '$tel',donvi = '$donvi',id_nv = '$id_nv',tgian = '$tgian',dt = '$dt',vat = '$vat',ln = '$ln',tndn = '$tndn',tuvan = '$tuvan', thang = '$thang', nam = '$nam'
			where id_thutuvan = '$id_thutuvan'";
		mysql_query($qr);
		header("location: xemthutuvan.php?manv=$manv&thang=$thang&nam=$nam");
		}else{
		$thang = $row_suathutuvan ["thang"];
		$nam = $row_suathutuvan ["nam"];
		$qr = "update thutuvan set congty = '$congty',tel = '$tel',donvi = '$donvi',id_nv = '$id_nv',tgian = '$tgian',dt = '$dt',vat = '$vat',ln = '$ln',tndn = '$tndn',tuvan = '$tuvan'
			where id_thutuvan = '$id_thutuvan'";
		mysql_query($qr);
		header("location: xemthutuvan.php?manv=$manv&thang=$thang&nam=$nam");
			}
	}
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
					<div class="panel-heading">Đang sửa thư tháng: <?php echo $row_suathutuvan ["thang"]?>/<?php echo $row_suathutuvan ["nam"]?></div>
					<div class="panel-body">
		              <div class="abc">
		               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
		              </div>
                	<form action="" method="post">
						<div class="col-sm-6">   
						<div class="form-group">	
						<label for="email">Thông tin công ty:</label>	 
	                    <select class="form-control" name="congty">
	                    <option value="<?php echo $row_suathutuvan ["congty"]?>"><?php echo $row_suathutuvan ["congty"]?></option>
	   					</select>
	   					</div>
	   					<div class="form-group">	
	   					<label for="email">Số điện thoại:</label>	
	                    <select class="form-control" name="tel">
	                    <option value="<?php echo $row_suathutuvan ["tel"]?>"><?php echo $row_suathutuvan ["tel"]?></option>
	   					</select></div>
						<div class="form-group">	
	   					<label for="email">Đơn vị:</label>	
	   					<select class="form-control" name="donvi">
	   					<option value="<?php echo $row_suathutuvan ["donvi"]?>"><?php echo $row_suathutuvan ["donvi"]?></option>
	   					</select></div>
						<div class="form-group">
  						<label>Lợi nhuận</label>
						<input class="form-control" name ="ln" value="<?php echo $row_suathutuvan ["ln"]?>" type="text">
						</div>
						<div class="form-group">
  						<label>Nhân viên</label>
						<select class="form-control" name="id_nv"> 
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
	   					</select>
						</div>
						<div class="form-group">
  						<label>Tháng</label>
				  		<input <?php if(($_SESSION["level"])!=1){
								echo 'disabled="disabled"';
							}?> class="form-control" value="<?php echo $row_suathutuvan ["thang"]?>" name ="thang"  type="text">
				  		</div></div>
	   					<div class="col-sm-6">
	   					<div class="form-group">
  						<label>Thời gian</label>
				  		<input class="form-control" value="<?php echo $row_suathutuvan ["tgian"]?>" name ="tgian"  type="text">
				  		</div>
				  		<div class="form-group">
  						<label>Doanh thu</label>
				   		<input class="form-control" name ="dt"  value="<?php echo $row_suathutuvan ["dt"]?>" type="text">
				   		</div>
				   		<div class="form-group">
  						<label>VAT</label>
						<input class="form-control" name ="vat" value="<?php echo $row_suathutuvan ["vat"]?>"  type="text">
						</div>		
						<div class="form-group">
  						<label>TNDN</label>
	                    <input class="form-control" name ="tndn" value="<?php echo $row_suathutuvan ["tndn"]?>" type="text">
						</div>
						<div class="form-group">
  						<label>Tư vấn</label>
						<textarea class="form-control" name ="tuvan"  type="text"><?php echo $row_suathutuvan ["tuvan"]?></textarea>
						</div>
						<div class="form-group">
  						<label>Năm</label>
						<input <?php if(($_SESSION["level"])!=1){
								echo 'disabled="disabled"';
							}?> class="form-control" name ="nam" value="<?php echo $row_suathutuvan ["nam"]?>" type="text">
						</div>
						</div>						
	                    <div class="abc"><button type="submit" class="btn btn-primary" name="ok">Lưu thư</button></div>
                    </form> 
        		</div>
			</div></div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
