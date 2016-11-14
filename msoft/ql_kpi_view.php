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
	$mapb = $_GET['pb'];
	$result = mysql_query(" SELECT count(id_kpi) as total, sum(trongso) as ts, sum(if(lcv='A',trongso,0)) as ts_a, sum(if(lcv='B',trongso,0)) as ts_b from kpi where id_pb = '$mapb'");
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
				<div class="table-responsive">
					<div class="form-group" align="right">
						<a href="ql_kpi.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Trở về</a>
						<button type="button" id="nap_form" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Nạp lại</button>  
                        <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Tạo KPI</button>  
                    </div>
                    <div id="kqkpi_table">
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
						  	$id_pb = $_GET['pb'];
							$id_nh = $_GET['nhom'];
			                $xemkpi = xemkpi($id_pb,$id_nh);
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
		  						<label> KPI giao: <?php echo $total_kpi;?></label>
						   	</div></div>
							<div class="col-sm-3"> 
							<div class="form-group">
		  						<label> Trọng số: <?php echo $total_trongso;?>%</label>
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
 <script>  
 $(document).ready(function(){
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
	
 });  
 </script> 