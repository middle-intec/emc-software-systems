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
	$result = mysql_query(" SELECT count(id_kqkpi) as total, sum(trongso) as ts from kqkpi where manv = '$manv'");
	$row = mysql_fetch_assoc($result);
	$total_kpi = $row['total'];
	$total_trongso = $row['ts'];
	$result_ts = mysql_query(" SELECT sum(if(lcv='A',kqkpi.trongso,0)) as ts_a, sum(if(lcv='B',kqkpi.trongso,0)) as ts_b, sum((kqkpi.kq/kqkpi.mt)*kqkpi.trongso) as tylets, sum(if(lcv='A',kqkpi.trongso*(kq/kqkpi.mt),0)) as tylets_a, sum(if(lcv='B',kqkpi.trongso*(kq/kqkpi.mt),0)) as tylets_b, sum(((kqkpi.kq/kqkpi.mt)*kqkpi.trongso)*(pt)) as total_pt, sum(((kqkpi.kq/kqkpi.mt)*kqkpi.trongso)*(tl)) as total_tl, sum(((kqkpi.kq/kqkpi.mt)*kqkpi.trongso)*(tgd)) as total_tgd from kqkpi inner join kpi on kqkpi.makpi = kpi.makpi where manv = '$manv'");
	$row_ts = mysql_fetch_assoc($result_ts);
	$total_trongsoA = $row_ts['ts_a'];
	$total_trongsoB = $row_ts['ts_b'];
	$total_tlhtkpi = $row_ts['tylets'];
	$total_tylets_a = $row_ts['tylets_a'];
	$total_tylets_b = $row_ts['tylets_b'];
	$total_pt = $row_ts['total_pt'];
	$total_tl = $row_ts['total_tl'];
	$total_tgd = $row_ts['total_tgd'];

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
							<li><a href="#tab3" data-toggle="tab">Phòng <?php
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
								<li class="active"><a href="#pilltab1" data-toggle="tab"> Đăng ký KPIs</a></li>
								<li><a href="#pilltab2" data-toggle="tab">Đăng ký Doanh Thu</a></li>
								<li><a href="#pilltab3" data-toggle="tab">Phê Duyệt KPIs </a></li>
							</ul>
		
						<div class="tab-content">
						<div class="tab-pane fade in active" id="pilltab1">
						<div class="panel panel-default">
						<div class="panel-heading">Lọc theo trường tùy biến:</div>
						<div class="panel-body">
						<form action="kpis_view.php" method="GET" class="form-inline">
				<div class="form-group">
                <label for="email">Nhân viên:</label>
                <select class="form-control" name="manv" style="width: 200px;">
				<?php
				$manv = $_SESSION["manv"];
				$name=mysql_query("select * from nhanvien where manv = '$manv'");
				while($rown = mysql_fetch_array($name)){?>
   				<option value="<?php echo $rown["id_nv"]; ?>"><?php echo $rown['ten']; ?></option>
					<?php }
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
						<div class="form-group" align="right">
						<button type="button" id="nap_form" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Đăng ký KPI</button>  
                    	 </div>
                    	 <div id="kqkpi_table">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KPI</th>
						  		<th>KPI</th>
						  		<th>LCV</th>
						  		<th>ĐVT</th>
						  		<th>BC</th>
						  		<th>TS</th>
						  		<th>MT</th>
						  		<th>KQ</th>
						  		<th>HDCT</th>
						  		<th>PT</th>
						  		<th>TL</th>
						  		<th>TGĐ</th>
						  		<th>Kết quả HĐCT</th>
						  		<th width="85px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
						  	$manv = $_SESSION['id_nv'];	
							$thang = date("m");
							$nam = date("Y");
			                $xemkqkpi = xemkqkpi($manv,$thang,$nam);
							$stt = 0;
							while ($row_xemkqkpi = mysql_fetch_array($xemkqkpi)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_kqkpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makpi}</td>
						  		<td><span  data-toggle="tooltip" title="{chuthich}">{kpi}</span></td>
						  		<td>{lcv}</td>
						  		<td>{dvt}</td>
						  		<td>{bc}</td>
						  		<td>{ts}%</td>
						  		<td>{mt}</td>
			        			<td>{kq}</td>
			        			<td>{hdct}</td>
			        			<td><input disabled="disabled" type="checkbox" <?php 
			         if(($row_xemkqkpi["pt"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td><input disabled="disabled" type="checkbox"<?php 
			         if(($row_xemkqkpi["tl"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td><input disabled="disabled" type="checkbox"<?php 
			         if(($row_xemkqkpi["tgd"])==1){echo ' checked="checked"';}
			        			 ?> /></td>
			        			<td>{ghichu}</td>
			        			<td width="85px">
								 <div class="btn-group">
								  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="{id_kqkpi}" class="btn btn-primary btn-xs xemkqkpi">Xem</button>
								  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" role="menu">
								    <li><a class="btn btn-default btn-xs" href="kpis_edit.php?id_kqkpi={id_kqkpi}">Sửa</a></li>
								    <li><a class="btn btn-default btn-xs xoakqkpi" data-id="{id_kqkpi}">Xóa</a></li>
								  </ul>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_kqkpi}", $row_xemkqkpi["id_kqkpi"], $s);
				$s = str_replace("{makpi}", $row_xemkqkpi["makpi"], $s);
				$s = str_replace("{kpi}", $row_xemkqkpi["kpi"], $s);
				$s = str_replace("{lcv}", $row_xemkqkpi["lcv"], $s);
				$s = str_replace("{dvt}", $row_xemkqkpi["dvt"], $s);
				$s = str_replace("{bc}", $row_xemkqkpi["bc"], $s);
				$s = str_replace("{ts}", $row_xemkqkpi["trongso"], $s);
				$s = str_replace("{mt}", $row_xemkqkpi["mt"], $s);
				$s = str_replace("{kq}", $row_xemkqkpi["kq"], $s);
				$s = str_replace("{hdct}", $row_xemkqkpi["hdct"], $s);
				$s = str_replace("{ghichu}", $row_xemkqkpi["ghichu"], $s);
				$s = str_replace("{chuthich}", $row_xemkqkpi["chuthich"], $s);
				echo $s; 
				}
				?>
							</tbody>
						   </table>
						<div class="panel panel-default">
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label> KPI giao: <?php echo $total_kpi;?></label>
						   	</div></div>
							<div class="col-sm-1"> 
							<div class="form-group">
		  						<label> Trọng số: <?php echo $total_trongso;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> A: <?php echo $total_trongsoA;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> B: <?php echo $total_trongsoB;?>%</label>
						   	</div></div>
						   	<div class="col-sm-2"> 
						   	<div class="form-group">
		  						<label> TLHT KPI: <?php echo $total_tlhtkpi;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> A: <?php echo $total_tylets_a;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> B: <?php echo $total_tylets_b;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> PT: <?php echo $total_pt;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> TL: <?php echo $total_tl;?>%</label>
						   	</div></div>
						   	<div class="col-sm-1"> 
						   	<div class="form-group">
		  						<label> TGD: <?php echo $total_tgd;?>%</label>
						   	</div></div>
						   	</div>
						   </div>
						</div></div>

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
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Chi tiết Kết quả KPIs</h4>  
                </div>  
                <div class="modal-body" id="kqkpi_chitiet">  
                </div>  
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Form đăng ký KPI</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">
                       	<input type="hidden" name="manv" value = "<?php echo $_SESSION['id_nv'];?>" class="form-control">
                          <label>Mã KPI</label>
                          <select name="makpi" id="makpi" class="form-control makpi"> 
                           <option value="">Chọn KPI</option> 
                            <?php
                            $pb = $_SESSION['pb'];
                            $nhom = $_SESSION['id_nh'];
                            $name=mysql_query("SELECT makpi from kpi where id_pb = '$pb' and id_nh = '$nhom' ");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['makpi']; ?>"><?php echo $rown['makpi']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />  
                          <label>KPI</label>
                          <select name="kpi" id="kpi" class="form-control kpi">  
                               <option value="">Tên KPI</option>  
                          </select>
                          <br />  
                          <label>Trọng số</label>  
                          <select name="trongso" id="trongso" class="form-control trongso">
                               <option value="">Trọng số</option>  
                          </select>  
                          <br />  
                          <label>Mục tiêu</label>
                          <select name="mt" id="mt" class="form-control mt">
                               <option value="">Mục tiêu</option>  
                          </select>  
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
  <div id="add_doanhthu_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Form đăng ký Doanh thu</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form_DT">
                       	<input type="hidden" name="manv" value = "<?php echo $_SESSION['id_nv'];?>" class="form-control">
                          <label>Mã KPI</label>
                          <select name="makpi" id="makpi" class="form-control makpi"> 
                           <option value="">Chọn KPI</option> 
                            <?php
                            $pb = $_SESSION['pb'];
                            $nhom = $_SESSION['id_nh'];
                            $name=mysql_query("SELECT makpi from kpi where id_pb = '$pb' and id_nh = '$nhom' ");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['makpi']; ?>"><?php echo $rown['makpi']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />  
                          <label>KPI</label>
                          <select name="kpi" id="kpi" class="form-control kpi">  
                               <option value="">Tên KPI</option>  
                          </select>
                          <br />  
                          <label>Trọng số</label>  
                          <select name="trongso" id="trongso" class="form-control trongso">
                               <option value="">Trọng số</option>  
                          </select>  
                          <br />  
                          <label>Mục tiêu</label>
                          <select name="mt" id="mt" class="form-control mt">
                               <option value="">Mục tiêu</option>  
                          </select>  
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
 	  $('#add').click(function(){  
           $('#insert_form')[0].reset();  
      		}); 
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#makpi').val() == "")  
           {  
                alert("Bạn chưa nhập mã KPI");  
           }  
           else if($('#kpi').val() == '')  
           {  
                alert("Bạn chưa nhập tên KPI");  
           }  
           else if($('#trongso').val() == '')  
           {  
                alert("Bạn chưa nhập trọng số");  
           }  
           else if($('#mt').val() == '')  
           {  
                alert("Bạn chưa nhập mục tiêu");  
           }  
           else  
           {  
                $.ajax({  
                     url:"kpi/themkqkpi.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#kqkpi_table').html(data);  
                     }  
                });  
           }  
      });      
      $(".xemkqkpi").click(function(){
		var id = $(this).attr('data-id');
		$.post("kpi/xemkqkpi.php", {id: id}, function(data){
			$("#kqkpi_chitiet").html(data);
		})
	})
    $(".makpi").change(function(){
		var id = $(".makpi").val();
		$.post("kpi/datamakpi.php", {id: id}, function(data){
			$(".kpi").html(data);
		})
	})
	$(".makpi").change(function(){
		var id = $(".makpi").val();
		$.post("kpi/datatrongso.php", {id: id}, function(data){
			$(".trongso").html(data);
		})
	})
	$(".makpi").change(function(){
		var id = $(".makpi").val();
		$.post("kpi/datamt.php", {id: id}, function(data){
			$(".mt").html(data);
		})
	})

	$('.xoakqkpi').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Xóa KPI này không?"))  
           {  
               var id = $(this).attr('data-id');
                $.ajax({  
                          url:'kpi/xoakqkpi.php',  
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
	$('#nap_form').click(function(){  
           location.reload();  
      		});
	$('[data-toggle="tooltip"]').tooltip(); 
	
 });  
 </script> 