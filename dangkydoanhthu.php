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
	$manv = $_SESSION["id_nv"];
	$thang = date("m");
	$nam = date("Y");
	$result = mysql_query(" SELECT count(id_kh) as totalKH from khachhang where id_nv = '$manv'");
	$rowKH = mysql_fetch_assoc($result);
	$totalKH = $rowKH['totalKH'];
	$result = mysql_query(" SELECT count(id_dlkpi) as total, sum(tamtinh) as tamtinh, sum(phaithu) as phaithu, sum(damnhan) as dathu, sum(thucthu) as thucthu, sum(tuvan) as tuvan, sum(indct) as indct, sum(giaoct) as giaoct, sum(bct) as bct, sum(bctc) as bctc, sum(sailoi) as sailoi, sum(hailong) as hailong, sum(kytiep) as kytiep, sum(gthdmoi) as gthdmoi, sum(dvkhac) as dvkhac from dlkpi where manv = '$manv' and thang = '$thang' and nam = '$nam'");
	$row = mysql_fetch_assoc($result);
	if($totalKH > 0){
	$total_kpi = number_format($row['total']);
	$total_tamtinh = number_format($row['tamtinh'],2);
	$total_dathu = round((($row['thucthu']/$row['phaithu'])*100),2);
	$total_phaithu = number_format($row['phaithu'],2);
	$total_tuvan = round((($row['tuvan']/$totalKH)*100),2);
	$total_indct = round((($row['indct']/$totalKH)*100),2);
	$total_giaoct = round((($row['giaoct']/$totalKH)*100),2);
	$total_bct = number_format($row['bct']);
	$total_bctc = number_format($row['bctc']);
	$total_sailoi = round((100-((($row['sailoi'])/($totalKH*0.3))*100)),2);
	$total_hailong = round((($row['hailong']/$totalKH)*100),2);
	$total_kytiep = round((($row['kytiep']/$totalKH)*100),2);
	$total_gthdmoi = number_format($row['gthdmoi']);
	$total_dvkhac = number_format($row['dvkhac']);
}else{
	$total_kpi = number_format($row['total']);
	$total_tamtinh = number_format($row['tamtinh'],2);
	$total_dathu = 0;
	$total_phaithu = number_format($row['phaithu'],2);
	$total_tuvan = number_format($row['tuvan']);
	$total_indct = number_format($row['indct']);
	$total_giaoct = number_format($row['giaoct']);
	$total_bct = number_format($row['bct']);
	$total_bctc = number_format($row['bctc']);
	$total_sailoi = number_format($row['sailoi']);
	$total_hailong = number_format($row['hailong']);
	$total_kytiep = number_format($row['kytiep']);
	$total_gthdmoi = number_format($row['gthdmoi']);
	$total_dvkhac = number_format($row['dvkhac']);
}
	if(isset($_POST['dt'])){
		$_SESSION["dt"] = $row['phaithu'];
	}
	if(isset($_POST['kytiep'])){
		$_SESSION["kytiep"] = $total_kytiep;
	}
	if(isset($_POST['gthdmoi'])){
		$_SESSION["gthdmoi"] = $total_gthdmoi;
	}
	if(isset($_POST['sailoi'])){
		$_SESSION["sailoi"] = $total_sailoi;
	}
	if(isset($_POST['indct'])){
		$_SESSION["indct"] = $total_indct;
	}
	if(isset($_POST['thutien'])){
		$_SESSION["thutien"] = $total_dathu;
	}
	if(isset($_POST['giaoct'])){
		$_SESSION["giaoct"] = $total_giaoct;
	}
	if(isset($_POST['tuvan'])){
		$_SESSION["tuvan"] = $total_tuvan;
	}
	if(isset($_POST['hailong'])){
		$_SESSION["hailong"] = $total_hailong;
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
				<h1 class="page-header">Hệ Thống Đánh Giá Hiệu Quả Công Việc EMC_BSC</h1>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li><a href="#tab1" data-toggle="tab">Công ty</a></li>
							<li class="active"><a href="#tab2" data-toggle="tab">KPIs của tôi</a></li>
							<li><a href="kpis_phong.php">Phòng <?php
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
								<li><a href="kpis.php"> Đăng ký KPIs</a></li>
								<li class="active"><a href="#pilltab2" data-toggle="tab"> Đăng ký Khách hàng</a></li><?php
								if(($_SESSION['level'])!=3){
									echo '<li><a href="kiemduyetdoanhthu.php">Duyệt Khách hàng</a></li>';
								}?>
							</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab2">
							<!--nội dung pilltab2-->
							<div class="panel panel-default">
				<div class="panel-heading">Lọc theo trường tùy biến:</div>
				<div class="panel-body">
				<form action="doanhthu_view.php" method="GET" class="form-inline">
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
		                <label for="pwd">Tháng:</label> 
		                <select class="form-control" name="thang" style="width: 70px;">
						<?php 
								$name=mysql_query("select distinct thang from dlkpi order by thang DESC");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown['thang']; ?>"><?php echo $rown['thang']; ?></option>
							<?php } ?>
		   				</select></div>
		   				<div class="form-group">
		                <label for="email">Năm:</label> 
		                <select class="form-control" name="nam" style="width: 100px;">
						<?php 
								$name=mysql_query("select distinct nam from dlkpi order by nam DESC");
								while($rown = mysql_fetch_array($name)){?>
		   						 <option value="<?php echo $rown['nam']; ?>"><?php echo $rown['nam']; ?></option>
							<?php } ?>
		   				</select></div> 
		   				<div class="form-group">
		               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Xem</button></div>
		      	</form>
						</div></div>  
						<div class="table-responsive">
						<div class="form-group" align="right">
						<button type="button" id="nap_pilltab2" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                          <button type="button" name="add_DT" id="add_DT" data-toggle="modal" data-target="#add_doanhthu_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Đăng ký Khách hàng</button>  
                    	 </div>
                    	 <div id="doanhthu_table">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KH</th>
						  		<th>Khách hàng</th>
						  		<th>TTính</th>
						  		<th>PThu</th>
						  		<th>%đảm nhận</th>
						  		<th>Nợ ĐK</th>
						  		<th>Thực thu</th>
						  		<th>Tư vấn</th>
						  		<th>INDCT</th>
						  		<th>GIAOCT</th>
						  		<th>PT</th>
						  		<th>TP</th>
								<th>KSNB</th>
								<th>TGĐ</th>
						  		<th width="85px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	$manv = $_SESSION['id_nv'];	
							$thang = date("m");
							$nam = date("Y");
			                $xemdoanhthu = xemdoanhthu($manv,$thang,$nam);
							$stt = 0;
							while ($row_xemdoanhthu = mysql_fetch_array($xemdoanhthu)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_dlkpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makh}</td>
			        			<td>{congty}</td>
						  		<td>{tamtinh}</td>
						  		<td>{phaithu}</td>
						  		<td>{damnhan}%</td>
						  		<td>{nodk}</td>
						  		<td>{thucthu}</td>
			        			<td><input disabled type="checkbox" <?php 
			         if(($row_xemdoanhthu["tuvan"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["indct"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["giaoct"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["pt"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["tp"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["ksnb"])==1){echo 'checked';}?>/></td>
			        			<td><input disabled type="checkbox"<?php 
			         if(($row_xemdoanhthu["tgd"])==1){echo 'checked';}?>/></td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_dlkpi}" class="btn btn-primary btn-xs xemdlkpi">Xem</button>
								  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu">
								  <?php
								  $level = $_SESSION["level"];
					if((($row_xemdoanhthu["ksnb"])==1)&($level>=2)){
						echo '<li align="center">
			  			<span>Hết hạn Sửa hoặc Xóa </span>
	                	</li>';
					}elseif((($row_xemdoanhthu["tp"])==1)&($level>=3)){
						echo '<li align="center">
			  			<span>Hết hạn Sửa hoặc Xóa </span>
	                	</li>';
					}else{
						echo '
					<li><a class="btn btn-default btn-xs" href="doanhthu_edit.php?id_dlkpi={id_dlkpi}">Sửa</a></li>
					<li><a class="btn btn-default btn-xs xoadlkpi" data-id="{id_dlkpi}">Xóa</a></li>
						';
					}
								  ?>
								  </ul>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_dlkpi}", $row_xemdoanhthu["id_dlkpi"], $s);
				$s = str_replace("{makh}", $row_xemdoanhthu["makh"], $s);
				$s = str_replace("{congty}", $row_xemdoanhthu["congty"], $s);
				$s = str_replace("{tamtinh}", round($row_xemdoanhthu["tamtinh"],2), $s);
				$s = str_replace("{phaithu}", round($row_xemdoanhthu["phaithu"],2), $s);
				$s = str_replace("{damnhan}", round($row_xemdoanhthu["damnhan"],2), $s);
				$s = str_replace("{nodk}", round($row_xemdoanhthu["nodk"],2), $s);
				$s = str_replace("{thucthu}", round($row_xemdoanhthu["thucthu"],2), $s);
				$s = str_replace("{tuvan}", $row_xemdoanhthu["tuvan"], $s);
				$s = str_replace("{indct}", $row_xemdoanhthu["indct"], $s);
				$s = str_replace("{giaoct}", $row_xemdoanhthu["giaoct"], $s);
				$s = str_replace("{bct}", $row_xemdoanhthu["bct"], $s);
				$s = str_replace("{bctc}", $row_xemdoanhthu["bctc"], $s);
				$s = str_replace("{sailoi}", $row_xemdoanhthu["sailoi"], $s);
				$s = str_replace("{hailong}", $row_xemdoanhthu["hailong"], $s);
				$s = str_replace("{kytiep}", $row_xemdoanhthu["kytiep"], $s);
				$s = str_replace("{gthdmoi}", $row_xemdoanhthu["gthdmoi"], $s);
				$s = str_replace("{dvkhac}", $row_xemdoanhthu["dvkhac"], $s);
				$s = str_replace("{pt}", $row_xemdoanhthu["pt"], $s);
				$s = str_replace("{tp}", $row_xemdoanhthu["tp"], $s);
				$s = str_replace("{ksnb}", $row_xemdoanhthu["ksnb"], $s);
				$s = str_replace("{tgd}", $row_xemdoanhthu["tgd"], $s);
				echo $s; 
				}
				?>
							</tbody>
						   </table>
						<div class="panel panel-default">
						<div class="panel-heading">
						<form method="POST" action="">
						<button type="submit" name = "dt" class="btn btn-link">Lưu DT(F04)</button><button type="submit" name = "kytiep" class="btn btn-link">Lưu Ký tiếp(C03)</button><button type="submit" name = "gthdmoi" class="btn btn-link">Lưu GTHĐ mới(P01)</button><button type="submit" name = "sailoi" class="btn btn-link">Lưu Sai lỗi(P05-12)</button><button type="submit" name = "indct" class="btn btn-link">Lưu In ĐCT(P05-3)</button><button type="submit" name = "thutien" class="btn btn-link">Lưu HT Thu tiền(P05-4)</button><button type="submit" name = "giaoct" class="btn btn-link">Lưu Giao CT(P05-5)</button><button type="submit" name = "tuvan" class="btn btn-link">Lưu Tư vấn(P09)</button><button type="submit" name = "hailong" class="btn btn-link">Lưu Hài lòng (C02)</button>
						</form></div>
						<div class="panel-body">
						<div class="col-sm-4">
						   	<div class="form-group">
		  						<label> Tổng KH: <?php echo $total_kpi;?>/<?php echo $totalKH;?></label>
						   	</div>
							<div class="form-group">
		  					<label> Tạm tính: <?php echo $total_tamtinh;?></label>
						   	</div>
						   	<div class="form-group">
		  					<label> Phải thu: <?php echo $total_phaithu; ?></label>
						   	</div> 
						   	<div class="form-group">
		  						<label> Thu tiền: <?php echo $total_dathu; ?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>GTHD mới: <?php echo $total_gthdmoi; ?></label>
						   	</div>
						</div>
						<div class="col-sm-4">
						   	<div class="form-group">
		  						<label>Tư vấn: <?php echo $total_tuvan;?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>In ĐCT: <?php echo $total_indct; ?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>Giao CT: <?php echo $total_giaoct; ?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>BCT: <?php echo $total_bct; ?>/<?php echo $totalKH;?></label>
						   	</div>
						   	<div class="form-group">
		  						<label>D.vụ khác: <?php echo $total_dvkhac; ?>/<?php echo $totalKH;?></label>
						   	</div>
						</div>
						<div class="col-sm-4">
						   	<div class="form-group">
		  						<label>BCTC: <?php echo $total_bctc; ?>/<?php echo $totalKH;?></label>
						   	</div>
						   	<div class="form-group">
		  						<label>Sai lỗi: <?php echo $total_sailoi; ?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>Hài lòng: <?php echo $total_hailong; ?>%</label>
						   	</div>
						   	<div class="form-group">
		  						<label>Ký tiếp: <?php echo $total_kytiep; ?>%</label>
						   	</div>
						</div>
						   	</div></div>
						   </div>
						</div>

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
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"> Form chi tiết</h4>  
                </div>  
                <div class="modal-body" id="dlkpi_chitiet">  
                </div>  
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
  <div id="add_doanhthu_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Form đăng ký Khách hàng</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form_DT">
                       	<input type="hidden" name="manv" value = "<?php echo $_SESSION['id_nv'];?>" class="form-control">
                       	<input type="hidden" name="mapb" value = "<?php echo $_SESSION['pb'];?>" class="form-control">
                       	<input type="hidden" name="manhom" value = "<?php echo $_SESSION['id_nh'];?>" class="form-control">
                        <label>Khách hàng</label>
                        <select name="makh" id="makh" class="form-control makpi"> 
                           <option value="">Chọn Khách hàng</option> 
                            <?php
                            $id_nv = $_SESSION['id_nv'];
                            $level = $_SESSION['level'];
                            if(($level)==1){
                            	$name=mysql_query("SELECT * from khachhang");
                            }else{
                            	$name=mysql_query("SELECT * from khachhang where id_nv = '$id_nv'");
                            }
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['makh']; ?>"><?php echo $rown['congty']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />  
                          <label> Tạm tính </label>
                          <input type="text" name="tamtinh" id="dthu" class="form-control">
                          <br />  
                          <label> Phải thu</label> 
                          <input type="text" name="phaithu" id="phaithu" class="form-control">  
                          <br />  
                          <label> %đảm nhận</label>
                          <input type="text" name="damnhan" id="dathu" class="form-control"> 
                          <br />  
                          <label> Nợ ĐK</label>
                          <input type="text" name="nodk" id="dathu" class="form-control"> 
                          <br /> 
                          <label> Thực thu</label>
                          <input type="text" name="thucthu" id="dathu" class="form-control"> 
                          <br /> 
                          <input type="submit" name="insert" id="insert" value="Lưu ngay" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <script>  
 $(document).ready(function(){  
 	  $('#add_DT').click(function(){  
           $('#insert_form_DT')[0].reset();  
      		}); 
      $('#insert_form_DT').on("submit", function(event){  
           event.preventDefault();  
           if($('#makh').val() == "")  
           {  
                alert("Bạn chưa nhập tên Khách hàng");  
           }  
           else if($('#dthu').val() == '')  
           {  
                alert("Bạn chưa nhập Tạm tính");  
           }  
           else if($('#phaithu').val() == '')  
           {  
                alert("Bạn chưa nhập phải thu");  
           }  
           else if($('#dathu').val() == '')  
           {  
                alert("Bạn chưa nhập % đảm nhận ");  
           }  
           else  
           {  
                $.ajax({  
                     url:"kpi/themdlkpi.php",  
                     method:"POST",  
                     data:$('#insert_form_DT').serialize(),  
                     success:function(data){  
                          $('#insert_form_DT')[0].reset();  
                          $('#add_doanhthu_Modal').modal('hide');  
                          $('#doanhthu_table').html(data);  
                     }  
                });  
           }  
      });      
      $(".xemdlkpi").click(function(){
			var id = $(this).attr('data-id');
			$.post("kpi/xemdlkpi.php", {id: id}, function(data){
				$("#dlkpi_chitiet").html(data);
			})
		})
	  $('.xoadlkpi').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Xóa dữ liệu này không?"))  
           {  
               var id = $(this).attr('data-id');
                $.ajax({  
                          url:'kpi/xoadlkpi.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          { 
                           $('tr#'+id+'').css('background-color', '#ccc');
                           $('tr#'+id+'').fadeOut('slow');  
                           location.reload();
                          }  
                     });  
           }  
           else  
           {  
                return false;  
           }  
      });
	$('#nap_pilltab2').click(function(){  
           location.reload();  
      		});
	$('[data-toggle="tooltip"]').tooltip(); 
	
 });  
 </script> 