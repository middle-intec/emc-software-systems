<?php
session_start();
require"../lib/mConnection.php";
require"../lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
	$id_kpi = $_GET["id_kpi"];
	$row_suakpi = suakpi($id_kpi);
?>
<?php
if(isset($_POST["exit"])){
	header("location: ql_kpi.php");
}
if(isset($_POST["edit"])){
      $id_kpi = $_GET['id_kpi'];
      $makpi = $_POST["makpi"];  
      $makfs = $_POST["makfs"];  
      $tenkpi = $_POST["tenkpi"]; 
      $dvt = $_POST["dvt"];  
      $bc = $_POST["bc"];
      $trongso = $_POST["trongso"];
      $mt = $_POST["mt"];
      $id_pb = $_POST["id_pb"];
      $id_nh = $_POST["id_nh"];
      $trongso_p = $_POST["trongso_p"];
      $mt_p = $_POST["mt_p"];
      $trongso_ct = $_POST["trongso_ct"];
      $mt_ct = $_POST["mt_ct"];
      $lcv = $_POST["lcv"];
      $idnv_sohuu = $_POST["idnv_sohuu"];
      $chuthich = $_POST["chuthich"];
      $query = "  
      UPDATE kpi set makpi = '$makpi',makfs = '$makfs',tenkpi = '$tenkpi',dvt = '$dvt',bc = '$bc',trongso = '$trongso',mt = '$mt',id_pb = '$id_pb',id_nh = '$id_nh',trongso_p = '$trongso_p',mt_p = '$mt_p', trongso_ct = '$trongso_ct', mt_ct = '$mt_ct', lcv = '$lcv', idnv_sohuu = '$idnv_sohuu', chuthich = '$chuthich'
      where id_kpi = '$id_kpi'
      ";  
     mysql_query($query);
     header("location: ql_kpi.php");
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
				<h1 class="page-header">Quản lý KPIs</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Đang sửa KPI: <?php echo $row_suakpi ["makpi"]?></div>
				<div class="panel-body">
                <form action="" method="post">
					<div class="col-sm-6"> 
						<div class="form-group">	
						<label for="email"> Mã KPI:</label>	
	                    <input class="form-control" name="makpi" value="<?php echo $row_suakpi ["makpi"]?>" type="text">
	   					</div>  
						<div class="form-group">	
						<label for="email"> Mã KFS:</label>	 
	                    <input class="form-control" name ="makfs"  value="<?php echo $row_suakpi ["makfs"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email">Tên KPI:</label>
	   					<input class="form-control" name ="tenkpi"  value="<?php echo $row_suakpi ["tenkpi"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Đơn vị tính:</label>
	   					<input class="form-control" name ="dvt"  value="<?php echo $row_suakpi ["dvt"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Báo cáo:</label>
	   					<input class="form-control" name ="bc"  value="<?php echo $row_suakpi ["bc"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Trọng số:</label>
	   					<input class="form-control" name ="trongso"  value="<?php echo $row_suakpi ["trongso"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Mục tiêu:</label>
	   					<input class="form-control" name ="mt"  value="<?php echo $row_suakpi ["mt"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Phòng ban:</label>
						<select class="form-control" name="id_pb"> 
					<?php 
						$name=mysql_query("select * from phongban");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown["id_pb"]; ?>"><?php echo $rown['phongban']; ?></option>
							<?php }
					?>
	   					</select>
	   					</div>
					</div>
	   				<div class="col-sm-6">
	   					<div class="form-group">	
	   					<label for="email"> Nhóm:</label>
						<select class="form-control" name="id_nh"> 
						<?php 
						$name=mysql_query("select * from nhom");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown["id_nh"]; ?>"><?php echo $rown['tennhom']; ?></option>
							<?php }
						?>
	   					</select>
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Trọng số Phòng:</label>
	   					<input class="form-control" name ="trongso_p"  value="<?php echo $row_suakpi ["trongso_p"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Mục tiêu phòng:</label>
	   					<input class="form-control" name ="mt_p"  value="<?php echo $row_suakpi ["mt_p"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Trọng số Công ty:</label>
	   					<input class="form-control" name ="trongso_ct"  value="<?php echo $row_suakpi ["trongso_ct"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Mục tiêu Công ty:</label>
	   					<input class="form-control" name ="mt_ct"  value="<?php echo $row_suakpi ["mt_ct"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Loại công việc:</label>
	   					<input class="form-control" name ="lcv"  value="<?php echo $row_suakpi ["lcv"]?>" type="text">
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Mã nhân viên sỡ hữu :</label>
	   					<select class="form-control" name="idnv_sohuu"> 
	   					 <option value="0"> Không có </option>
						<?php 
						$name=mysql_query("select * from nhanvien");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
							<?php }
						?>
	   					</select>
	   					</div>
	   					<div class="form-group">	
	   					<label for="email"> Giải thích:</label>
	   					<textarea class="form-control" name ="chuthich"><?php echo $row_suakpi ["chuthich"]?></textarea>
	   					</div>
					</div>						
	            <div class="form-group">
					<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Lưu ngay</button>
					<button type="submit" name="exit" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span> Không Lưu</button>
				</div>
                </form> 
        		</div>
			</div>		
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html> 