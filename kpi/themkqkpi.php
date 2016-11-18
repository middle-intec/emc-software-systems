<?php  
session_start();
require"../lib/mConnection.php";
require"../lib/quanli.php";
 ?> 
<?php
  $manv = $_POST['manv'];
  $result = mysql_query(" SELECT count(id_kqkpi) as total, sum(trongso) as ts from kqkpi where manv = '$manv'");
  $row = mysql_fetch_assoc($result);
  $total_kpi = $row['total'];
  $total_trongso = $row['ts'];
  $result_ts = mysql_query(" SELECT sum(if(lcv='A',trongso,0)) as ts_a, sum(if(lcv='B',trongso,0)) as ts_b, sum((kq/mt)*trongso) as tylets, sum(if(lcv='A',trongso*(kq/mt),0)) as tylets_a, sum(if(lcv='B',trongso*(kq/mt),0)) as tylets_b, sum(((kq/mt)*trongso)*(pt)) as total_pt, sum(((kq/mt)*trongso)*(tl)) as total_tl, sum(((kq/mt)*trongso)*(tgd)) as total_tgd from kqkpi where manv = '$manv'");
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
 <?php  
 if(!empty($_POST))  
 {  
      $output = '';  
      $manv = $_POST['manv'];
      $makpi = $_POST["makpi"];  
      $kpi = $_POST["kpi"];  
      $trongso = $_POST["trongso"];  
      $mt = $_POST["mt"];
      $bc = $_POST["bc"];
      $dvt = $_POST["dvt"];
      $lcv = $_POST["lcv"];
      $giaithich = $_POST["giaithich"];
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $ngaytao = date("Y-m-d H:i:s");
      $thang = date("m");
      $nam = date("Y"); 
      $query = "  
      INSERT INTO kqkpi VALUES(null, '$manv', '$makpi', '$kpi', '$lcv', '$dvt', '$bc', '$trongso', '$mt', 0, '', '', 0, '', 0, '', 0, '', 0, 0, 0, 0, '', '', '', '', '', '','$giaithich', '$ngaytao', 0, '$thang', '$nam');  
      "; 
      //echo $query; 
      if(mysql_query($query))  
      {  
           $output .= '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Thành công!</strong> Bạn đã thêm KPI mới thành công.
</div>'; 
           $output .= '  
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
                  <th>HDCT</th>
                  <th>KQ</th>
                  <th>Kết quả HĐCT</th>
                  <th>PT</th>
                  <th>TL</th>
                  <th>TGĐ</th>
                  <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
           '; $manv = $_POST['manv'];
              $thang = date("m");
              $nam = date("Y");
              $pt = 'checked="checked"';
              $tl = 'checked="checked"';
              $tgd = 'checked="checked"';
              $xemkqkpi = xemkqkpi($manv,$thang,$nam);
              $stt = 0;
              while ($row_xemkqkpi = mysql_fetch_array($xemkqkpi)){ 
                $stt++; 
                if(($row_xemkqkpi["pt"])==1){$pt;}else{$pt = '';}
                if(($row_xemkqkpi["tl"])==1){$tl;}else{$tl = '';}
                if(($row_xemkqkpi["tgd"])==1){$tgd;}else{$tgd = '';}
                $output .= '  
                    <tr class="roweven" id="'.$row_xemkqkpi["id_kqkpi"].'">
                    <td>'.$stt.'</td>
                    <td>'.$row_xemkqkpi["makpi"].'</td>
                    <td><span  data-toggle="tooltip" title="'.$row_xemkqkpi["giaithich"].'">'.$row_xemkqkpi["kpi"].'</span></td>
                    <td>'.$row_xemkqkpi["lcv"].'</td>
                    <td>'.$row_xemkqkpi["dvt"].'</td>
                    <td>'.$row_xemkqkpi["bc"].'</td>
                    <td>'.$row_xemkqkpi["trongso"].'%</td>
                    <td>'.$row_xemkqkpi["mt"].'</td>
                    <td>'.$row_xemkqkpi["hdct"].'</td>
                    <td>'.$row_xemkqkpi["kq"].'</td>
                    <td>'.$row_xemkqkpi["ghichu"].'</td>
                    <td><input disabled="disabled" type="checkbox" '.$pt.' /></td>
                    <td><input disabled="disabled" type="checkbox" '.$tl.' /></td>
                    <td><input disabled="disabled" type="checkbox" '.$tgd.' /></td>
                    <td width="85px">
                 <div class="btn-group">
                  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="'.$row_xemkqkpi["id_kqkpi"].'" class="btn btn-primary btn-xs xemkqkpi">Xem</button>
                  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="btn btn-default btn-xs" href="kpis_edit.php?id_kqkpi='.$row_xemkqkpi["id_kqkpi"].'">Sửa</a></li>
                    <li><a class="btn btn-default btn-xs xoakqkpi" data-id="'.$row_xemkqkpi["id_kqkpi"].'">Xóa</a></li>
                  </ul>
                </div>      
                    </td>
              </tr>  
                ';  
           }  
           $output .= '</tbody>
                    </table>
                    <div class="panel panel-default">
                <div class="col-sm-2"> 
                <div class="form-group">
                  <label> KPI giao: '.$total_kpi.'</label>
                </div></div>
              <div class="col-sm-1"> 
              <div class="form-group">
                  <label> Trọng số: '.$total_trongso.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> A: '.$total_trongsoA.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> B: '.$total_trongsoB.'%</label>
                </div></div>
                <div class="col-sm-2"> 
                <div class="form-group">
                  <label> TLHT KPI: '.$total_tlhtkpi.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> A: '.$total_tylets_a.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> B: '.$total_tylets_b.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> PT: '.$total_pt.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> TL: '.$total_tl.'%</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> TGD: '.$total_tgd.'%</label>
                </div></div>
                </div>
                    ';  
      }  
      echo $output;  
 }  
 ?>  

