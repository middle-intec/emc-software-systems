<?php
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
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
				<h1 class="page-header">Hệ Thống Đánh Giá Hiệu Quả Công Việc EMC_BSC</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li><a href="#tab1" data-toggle="tab">Công ty</a></li>
							<li><a href="kpis.php">KPIs của tôi</a></li>
							<li class="active"><a href="#tab3" data-toggle="tab">Phòng <?php
							$manv = $_SESSION["manv"];
							$name=mysql_query("select * from nhanvien inner join phongban on nhanvien.pb = phongban.id_pb where manv = '$manv'");
							while($rown = mysql_fetch_array($name)){
								echo $rown['phongban'];
							}
							 ?>
							 </a></li>
							<li><a href="#tab4" data-toggle="tab"> Chia sẽ</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade" id="tab1">
							<?php require"kpi/#tab1.php"; ?>
	    					<!--#tab1.php-->
							</div>
							<div class="tab-pane fade in active" id="tab2">
							<ul class="nav nav-pills">
								<li class="active"><a href="#pilltab1" data-toggle="tab"> Báo cáo Tháng</a></li>
								<li><a href="#pilltab2" data-toggle="tab">Báo cáo Năm</a></li>
							</ul>
		
						<div class="tab-content">
						<div class="tab-pane fade in active" id="pilltab1">
						<div class="panel panel-default">
						<div class="panel-heading">Lọc theo trường tùy biến:</div>
						<div class="panel-body">
						<form action="" method="POST" class="form-inline">
				<div class="form-group">
                <label for="email">Phòng ban:</label>
                <select class="form-control" name="pb" id="pb" style="width: 200px;">
				<?php 
				$pb = $_SESSION['pb'];
				if (($_SESSION["level"]) >= 2){
				$name=mysql_query("select * from phongban where id_pb = '$pb'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_pb']; ?>"><?php echo $rown['phongban']; ?></option>
					<?php }
				}else{
				$name=mysql_query("select * from phongban");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_pb']; ?>"><?php echo $rown['phongban']; ?></option>
					<?php }
				}
				 ?>
   				</select></div>
   				<div class="form-group">
                <label for="email">Nhóm:</label>
                <select class="form-control" name="nh" id="nh" style="width: 100px;">
                <option value="1">Không có nhóm</option>
				<?php 
				$pb = $_SESSION['pb'];
				if (($_SESSION["level"]) >= 2){
				$name=mysql_query("select * from nhom where id_pb = '$pb'");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nh']; ?>"><?php echo $rown['tennhom']; ?></option>
					<?php }
				}else{
				$name=mysql_query("select * from nhom where id_nh <> 1");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['id_nh']; ?>"><?php echo $rown['tennhom']; ?></option>
					<?php }
				}
				 ?>
   				</select></div>
   				<div class="form-group">
                <label for="pwd">Tháng:</label> 
                <select class="form-control" name="thang" style="width: 70px;">
				<?php 
						$name=mysql_query("select distinct thang from kqkpi order by thang DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['thang']; ?>"><?php echo $rown['thang']; ?></option>
					<?php } ?>
   				</select></div>
   				<div class="form-group">
                <label for="email">Năm:</label> 
                <select class="form-control" name="nam" style="width: 100px;">
				<?php 
						$name=mysql_query("select distinct nam from kqkpi order by nam DESC");
						while($rown = mysql_fetch_array($name)){?>
   						 <option value="<?php echo $rown['nam']; ?>"><?php echo $rown['nam']; ?></option>
					<?php } ?>
   				</select></div> 
   				<div class="form-group">
               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Xem</button></div>
                </form>
						</div></div>
						<div class="table-responsive">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KPI</th>
						  		<th>KPI</th>
						  		<th>ĐVT</th>
						  		<th>BC</th>
						  		<th>TS_P</th>
						  		<th>MT_P</th>
						  		<th>KQ</th>
						  		<th>TLTH</th>
						  		<th>TLTS</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	if(empty($_POST)){
						  	$pb = $_SESSION['pb'];
						  	$nh = $_SESSION['id_nh'];	
							$thang = date("m");
							$nam = date("Y");
						  	}else{
						  	$pb = $_POST['pb'];
						  	$nh = $_POST['nh'];		
							$thang = $_POST['thang'];
							$nam = $_POST['nam'];	
						  	}
			                $xemkqkpi = xemkqkpi_thang($pb,$nh,$thang,$nam);
							$stt = 0;
							while ($row_xemkqkpi = mysql_fetch_array($xemkqkpi)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven">
			        			<td><?php echo $stt;?></td>
			        			<td>{makpi}</td>
						  		<td><span  data-toggle="tooltip" title="{chuthich}">{kpi}</span></td>
						  		<td>{dvt}</td>
						  		<td>{bc}</td>
						  		<td>{ts}%</td>
						  		<td>{mt}</td>
			        			<td>{kq}</td>
			        			<td>
						<?php 
			        	$tlth = round(((($row_xemkqkpi["kq"])/($row_xemkqkpi["mt_p"]))*100),2);
			        	echo ''.$tlth.'%';
						?>					
								</td>
			        			<td>
			        	<?php
			        	$tlts = round((($tlth*$row_xemkqkpi["trongso_p"])/100),2);
			        	echo ''.$tlts.'%';
			        	?>
			        			</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{makpi}", $row_xemkqkpi["makpi"], $s);
				$s = str_replace("{kpi}", $row_xemkqkpi["kpi"], $s);
				$s = str_replace("{lcv}", $row_xemkqkpi["lcv"], $s);
				$s = str_replace("{dvt}", $row_xemkqkpi["dvt"], $s);
				$s = str_replace("{bc}", $row_xemkqkpi["bc"], $s);
				$s = str_replace("{ts}", $row_xemkqkpi["trongso_p"], $s);
				$s = str_replace("{mt}", $row_xemkqkpi["mt_p"], $s);
				$s = str_replace("{kq}", round($row_xemkqkpi["kq"],2), $s);
				$s = str_replace("{chuthich}", $row_xemkqkpi["giaithich"], $s);
				echo $s; 
				}
				?>
				<?php 
				$total_tlht = 0;
				$total_tlts = 0;
				$thang_total = xemkqkpi_thang($pb,$nh,$thang,$nam);
				while($row_thang_total = mysql_fetch_assoc($thang_total)){
				$tlth = (($row_thang_total["kq"]/$row_thang_total["mt_p"])*100);
				$total_tlht = round(($total_tlht + $tlth),2);
				$total_tlts = round(($total_tlts + (($tlth*$row_thang_total["trongso_p"])/100)),2);
				}
				$thang_total_ts = xemkqkpi_thang_ts($pb,$nh);
				$row_thang_total_ts = mysql_fetch_array($thang_total_ts);
				$totalts = $row_thang_total_ts['totalts'];
				?>

			                <tr>
			                	<td colspan="5"> Tổng tỷ lệ hoàn thành KPI tháng:</td>
			                	<td><?php echo $totalts;?>%</td>
			                	<td colspan="2"></td>
			                	<td><?php echo $total_tlht;?>%</td>
			                	<td><?php echo $total_tlts;?>%</td>
			                </tr>
							</tbody>
						   </table></div>
						</div>
							<div class="tab-pane fade" id="pilltab2">
							<?php require"kpi/#pilltab2.php"; ?>
	    					<!--#pilltab2.php-->
							<!--nội dung pilltab2-->
							</div>
							<div class="tab-pane fade" id="pilltab3">
							<?php require"kpi/#pilltab3.php"; ?>
	    					<!--#pilltab3.php-->
								<!--nội dung pilltab3-->
							</div>
						</div>
							</div>
							<div class="tab-pane fade" id="tab3">
							<?php require"kpi/#tab3.php"; ?>
	    					<!--#tab3.php-->
								<!--nội dung tab3-->
							</div>
							<div class="tab-pane fade" id="tab4">
							<?php require"kpi/#tab4.php"; ?>
	    					<!--#tab4.php-->
								<!--nội dung tab4-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html>
 <script src="js/bootstrap-datepicker.js"></script>
 <script>  
 $(document).ready(function(){  
	$('[data-toggle="tooltip"]').tooltip();
	$("#pb").change(function(){
		var id = $("#pb").val();
		$.post("kpi/datanhom.php", {id: id}, function(data){
			$("#nh").html(data);
		})
	});
 });  
 </script> 