<?php
session_start();
require"lib/mConnection.php";
require"lib/quanli.php";
?>
<?php 
	if (!isset($_SESSION["id_nv"]) ){
	header("location: index.php");}
	$thang = $_GET["thang"];
	$nam = $_GET["nam"];
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
				<div class="panel-heading">Thư tư vấn tháng: <?php echo $thang; ?>/<?php echo $nam; ?></div>
				<div class="panel-body">
              <div class="abc">
               <a class="btn btn-primary" href="javascript:history.go(-1)">Trở về</a>
               <a class="btn btn-primary" href="vietthutuvan.php">Viết Thư</a>
              </div>
              <div align="center">  
                     <input type="text" placeholder="Nhập ký tự cần tìm" name="search" id="search" class="form-control" />  
                </div><br/>
              <div class="table-responsive">
               <table class="table table-bordered" id="thutuvan_table">
				<thead>
				<tr class="rowheader">
			  		<td width = "2%" align="center">
				  	STT
					</td><td width = "22%" align="center">
				  	Công ty
					</td><td width = "5%" align="center">
				  	Số điện thoại
			  		</td><td width = "5%" align="center">
					Thời gian
			  		</td><td width = "5%" align="center">
					Doanh thu
			  		</td><td width = "5%" align="center">
					VAT
			  		</td><td width = "5%" align="center">
				  	Lợi nhuận
			  		</td><td width = "5%" align="center">
					TNDN
			  		</td><td width = "30%" align="center">
					Tư vấn
			  		</td><td width = "7%" align="center">
					Trạng thái
			  		</td><td width = "9%" align="center">
					Nhân viên QL
			  		</td></tr></thead>
                    <tbody>
                    <?php
					$vietthutuvan = kiemsoarthutuvan($thang,$nam);
				$stt = 0;
				while ($row_vietthutuvan = mysql_fetch_array($vietthutuvan)){
					ob_start();
					$stt++;
				?>
        		<tr class="roweven" id ="{id_thutuvan}">
        			<td width = "2%" align="center">
				  	<span>
				  		<?php echo $stt;?>
				  	</span>
			  		</td><td width = "22%" align="left">
				  	<span>				  	
				  	<!-- Bắt sự kiện Popup -->
  					<a href="#" class="tbtuvan" data-toggle="modal" data-id="{id_thutuvan}" data-target="#myModal">{congty}</a>
				  	</span>
			  		</td><td width = "5%" align="center">
				  	<span>
				  		{tel}
				  	</span>
			  		</td><td width = "5%" align="center">
				  	<span>
				  		{tgian}	
				  	</span>
			  		</td><td width = "5%" align="center">
					<span>
						{dt}
					</span>
			  		</td><td width = "5%" align="center">
					<span>
						{vat}
					</span>
			  		</td><td width = "5%" align="center">
				  	<span>
				  		{loinhuan}
				  	</span>
			  		</td><td width = "5%" align="center">
				  	<span>
				  		{tndn}
				  	</span>
			  		</td><td width = "30%" align="center">
				  	<span>
				  		{tuvan}
				  	</span>
			  		</td><td width = "7%" align="center">
				  	<span>
				  		<?php
				  		if(($row_vietthutuvan["duyet"])==1){
				  			echo '
				  			<div class="alert-success">
  							<strong>Giám đốc đã duyệt</strong></div>';
				  		}elseif(($row_vietthutuvan["duyet"])==2){
				  			echo '<div class="alert-info">
  							<strong>Phụ trách đã duyệt</strong></div>';
				  		}else{
				  			echo '<div class="alert-danger">
  							<strong>Chưa duyệt</strong></div>';
				  		}
				  		?>
				  	</span>
			  		</td><td width = "9%" align="center">
				  	<span>
				  		{id_nv}
				  	</span>
			  		</td>
                	</tr> 
              <?php
				$s = ob_get_clean();
				$s = str_replace("{id_thutuvan}", $row_vietthutuvan["id_thutuvan"], $s);
				$s = str_replace("{congty}", $row_vietthutuvan["congty"], $s);
				$s = str_replace("{tel}", $row_vietthutuvan["tel"], $s);
				$s = str_replace("{donvi}", $row_vietthutuvan["donvi"], $s);
				$s = str_replace("{tgian}", $row_vietthutuvan["tgian"], $s);
				$s = str_replace("{dt}", $row_vietthutuvan["dt"], $s);
				$s = str_replace("{vat}", $row_vietthutuvan["vat"], $s);
				$s = str_replace("{loinhuan}", $row_vietthutuvan["ln"], $s);
				$s = str_replace("{tndn}", $row_vietthutuvan["tndn"], $s);
				$s = str_replace("{tuvan}", $row_vietthutuvan["tuvan"], $s);
				$s = str_replace("{id_nv}", $row_vietthutuvan["ten"], $s);
				echo $s; 
				}
				?>
			</tbody>
		</table></div></div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	

	<!-- Begin Popup Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nội dung Demo</h4>
        </div>
        <div class="modal-body datapopup">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<!-- End Popup Modal -->
	<?php require"block/profile.php"; ?>
	<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#thutuvan_table tr').each(function(){  
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
</body>
</html>