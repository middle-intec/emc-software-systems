<?php
session_start();
require"../lib/mConnection.php";
require"../lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
?>
<?php
	$result = mysql_query(" SELECT count(id_kpi) as total, sum(trongso) as ts, sum(if(lcv='A',trongso,0)) as ts_a, sum(if(lcv='B',trongso,0)) as ts_b from kpi");
	$row = mysql_fetch_assoc($result);
	$total_kpi = $row['total'];
	$total_trongso = $row['ts'];
	$total_trongsoA = $row['ts_a'];
	$total_trongsoB = $row['ts_b'];
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
				<div class="panel panel-default">
				<div class="panel-heading">Lọc theo trường tùy biến:</div>
				<div class="panel-body">
				<form action="ql_kpi_view.php" method="GET" class="form-inline">
				<div class="form-group">
                <label for="email">KPI Phòng:</label>
                <select class="form-control" name="pb" id="pb">
				<?php
				$name=mysql_query("select * from phongban");
				while($rown = mysql_fetch_array($name)){?>
   				<option value="<?php echo $rown["id_pb"]; ?>"><?php echo $rown['phongban']; ?></option>
					<?php }
				 ?>
   				</select></div>
   				<div class="form-group">
                <label for="email">Nhóm:</label>
                <select class="form-control" name="nhom" id = "nh">
				<?php
				$name=mysql_query("select * from nhom");
				while($rown = mysql_fetch_array($name)){?>
   				<option value="<?php echo $rown["id_nh"]; ?>"><?php echo $rown['tennhom']; ?></option>
					<?php }
				 ?>
   				</select></div>
   				<div class="form-group">
               <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Xem</button></div>
                </form></div></div> 

						<div class="table-responsive">
						<div class="form-group" align="right">
						<button type="button" id="nap_form" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Tạo KPI</button>  
                    	 </div>
                    	 <div id="kpi_table">
			               <table class="table table-bordered">
							<thead>
							<tr class="success">
						  		<th>STT</th>
						  		<th>Mã KPI</th>
						  		<th>Mã KFS</th>
						  		<th>KPIs</th>
						  		<th>ĐVT</th>
						  		<th>BC</th>
						  		<th>TS</th>
						  		<th>MT</th>
						  		<th>Phòng Ban</th>
						  		<th>Nhóm</th>
						  		<th>TS_P</th>
						  		<th>MT_P</th>
						  		<th>TS_CT</th>
						  		<th>MT_CT</th>
						  		<th>LCV</th>
						  		<th>NVSH</th>
						  		<th width="90px">Chức năng</th>
						  	</tr>
						  	</thead>
						  	<tbody>
						  	<?php
			                $xemkpi = xemkpis();
							$stt = 0;
							while ($row_xemkpi = mysql_fetch_array($xemkpi)){
								ob_start();
								$stt++;
							?>
			        		<tr class="roweven" id ="{id_kpi}">
			        			<td><?php echo $stt;?></td>
			        			<td>{makpi}</td>
						  		<td>{makfs}</td>
						  		<td><span  data-toggle="tooltip" title="{ghichu}">{kpi}</span></td>
						  		<td>{dvt}</td>
						  		<td>{bc}</td>
						  		<td>{ts}%</td>
			        			<td>{mt}</td>
			        			<td>{pb}</td>
						  		<td>{nh}</td>
						  		<td>{ts_p}%</td>
						  		<td>{mt_p}</td>
						  		<td>{ts_ct}%</td>
						  		<td>{mt_ct}</td>
						  		<td>{lcv}</td>
						  		<td>{sohuu}</td>
			        			<td width="90px">
								 <div class="btn-group">
								  <a class="btn btn-primary btn-xs" href="ql_kpi_edit.php?id_kpi={id_kpi}">Sửa</a>
								  <a class="btn btn-primary btn-xs xoakpi" data-id="{id_kpi}">Xóa</a>
								</div>			
			                	</td>
			                </tr>
			                <?php
				$s = ob_get_clean();
				$s = str_replace("{id_kpi}", $row_xemkpi["id_kpi"], $s);
				$s = str_replace("{makpi}", $row_xemkpi["makpi"], $s);
				$s = str_replace("{makfs}", $row_xemkpi["makfs"], $s);
				$s = str_replace("{kpi}", $row_xemkpi["tenkpi"], $s);
				$s = str_replace("{lcv}", $row_xemkpi["lcv"], $s);
				$s = str_replace("{dvt}", $row_xemkpi["dvt"], $s);
				$s = str_replace("{bc}", $row_xemkpi["bc"], $s);
				$s = str_replace("{ts}", $row_xemkpi["trongso"], $s);
				$s = str_replace("{mt}", $row_xemkpi["mt"], $s);
				$s = str_replace("{pb}", $row_xemkpi["phongban"], $s);
				$s = str_replace("{nh}", $row_xemkpi["tennhom"], $s);
				$s = str_replace("{ts_p}", $row_xemkpi["trongso_p"], $s);
				$s = str_replace("{ts_ct}", $row_xemkpi["trongso_ct"], $s);
				$s = str_replace("{mt_p}", $row_xemkpi["mt_p"], $s);
				$s = str_replace("{mt_ct}", $row_xemkpi["mt_ct"], $s);
				$s = str_replace("{sohuu}", $row_xemkpi["idnv_sohuu"], $s);
				$s = str_replace("{ghichu}", $row_xemkpi["chuthich"], $s);
				echo $s; 
				}
				?>
						</tbody>
						   </table>
						<div class="panel panel-default">
						   	<div class="col-sm-3"> 
						   	<div class="form-group">
		  						<label> Tổng KPI: <?php echo $total_kpi;?></label>
						   	</div></div>
							<div class="col-sm-3"> 
							<div class="form-group">
		  						<label> Tổng Trọng số: <?php echo $total_trongso;?>%</label>
						   	</div></div>
						   	<div class="col-sm-3"> 
						   	<div class="form-group">
		  						<label> A: <?php echo $total_trongsoA;?>%</label>
						   	</div></div>
						   	<div class="col-sm-3"> 
						   	<div class="form-group">
		  						<label> B: <?php echo $total_trongsoB;?>%</label>
						   	</div></div>
						</div>
						</div>
						</div></div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<?php require"block/profile.php"; ?>
</body>

</html> 
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Form Tạo KPI</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">
                          <label>Mã KPI</label>
                          <input type="text" name="makpi" id="makpi" class="form-control">
                          <br/>
                          <label>Mã KFS</label>
                          <select name="makfs" id="makfs" class="form-control"> 
                           <option value="">Chọn KFS</option> 
                            <?php
                            $name=mysql_query("SELECT * from kfs");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['makfs']; ?>"><?php echo $rown['makfs']; ?> - <?php echo $rown['tenkfs']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />  
                          <label>Tên KPI</label> 
                          <input type="text" name="tenkpi" id="tenkpi" class="form-control">   
                          <br />  
                          <label>Đơn vị tính</label> 
                          <input type="text" name="dvt" id="dvt" class="form-control">   
                          <br />
                          <label>Báo cáo</label> 
                          <input type="text" name="bc" id="bc" class="form-control">   
                          <br />
                          <label>Trọng số</label> 
                          <input type="text" name="trongso" id="trongso" class="form-control">   
                          <br />
                          <label> Mục tiêu</label> 
                          <input type="text" name="mt" id="mt" class="form-control">   
                          <br /> 
                          <label> Phòng</label> 
                           <select name="id_pb" id="id_pb" class="form-control"> 
                           <option value="">Chọn Phòng </option> 
                            <?php
                            $name=mysql_query("SELECT * from phongban");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['id_pb']; ?>"><?php echo $rown['phongban']; ?></option>
						<?php }   
                            ?>
                          </select>
                          <br />
                          <label> Nhóm</label>
                          <select name="id_nh" id="id_nh" class="form-control"> 
                           <option value="">Chọn Nhóm </option> 
                            <?php
                            $name=mysql_query("SELECT * from nhom");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['id_nh']; ?>"><?php echo $rown['tennhom']; ?></option>
						<?php }   
                            ?>
                          </select>  
                          <br />
                          <label> Loại công việc</label> 
                          <input type="text" name="lcv" id="lcv" class="form-control">   
                          <br />
                          <label> Nhân viên Sở hữu</label>
                          <select name="idnv_sohuu" id="idnv_sohuu" class="form-control"> 
                           <option value="">Chọn Nhân viên </option> 
                            <?php
                            $name=mysql_query("SELECT * from nhanvien");
							while($rown = mysql_fetch_array($name)){?>
	   						 <option value="<?php echo $rown['id_nv']; ?>"><?php echo $rown['ten']; ?></option>
							<?php }   
                            ?>
                          </select>
                          <br />
                          <label> Giải thích</label> 
                          <textarea name="chuthich" id="chuthich" class="form-control"></textarea>
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
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#makpi').val() == "")  
           {  
                alert("Bạn chưa nhập mã KPI");  
           }else if($('#makfs').val() == '')  
           {  
                alert("Bạn chưa nhập mã KFS");  
           }  
           else if($('#tenkpi').val() == '')  
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
                     url:"data_ajax/themkpi.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#kpi_table').html(data);  
                     }  
                });  
           }  
      });
	$('.xoakpi').click(function(){  
           if(confirm("Bạn có chắc chắn là muốn Xóa KPI này không?"))  
           {  
               var id = $(this).attr('data-id');
                $.ajax({  
                          url:'data_ajax/xoakpi.php',  
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
	$("#pb").change(function(){
		var id = $("#pb").val();
		$.post("../kpi/datanhom.php", {id: id}, function(data){
			$("#nh").html(data);
		})
	});
 });  
 </script> 