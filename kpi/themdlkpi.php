<?php  
session_start();
require"../lib/mConnection.php";
require"../lib/quanli.php";
 ?> 
<?php
  $manv = $_SESSION["id_nv"];
  $result = mysql_query(" SELECT count(id_dlkpi) as total, sum(tamtinh) as dthu from dlkpi where manv = '$manv'");
  $row = mysql_fetch_assoc($result);
  $total_kpi = number_format($row['total']);
  $total_dthu = number_format($row['dthu'],2);
?>
 <?php  
 if(!empty($_POST))  
 {  
      $output = '';  
      $manv = $_POST['manv'];
      $mapb = $_POST['mapb'];
      $manhom = $_POST['manhom'];
      $makh = $_POST["makh"];  
      $tamtinh = $_POST["tamtinh"];  
      $phaithu = $_POST["phaithu"];  
      $damnhan = $_POST["damnhan"];
      $nodk = $_POST["nodk"];
      $thucthu = $_POST["thucthu"];
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $ngaytao = date("Y-m-d H:i:s");
      $thang = date("m");
      $nam = date("Y"); 
      $query = "  
      INSERT INTO dlkpi
      VALUES(null, '$makh', '$manv', '$mapb', '$manhom', '$tamtinh', '$phaithu', '$damnhan', '$nodk', '$thucthu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$ngaytao', 'Ghi chú', '$thang', '$nam');  
      ";  
      if(mysql_query($query))  
      {  
           $output .= '<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Thành công!</strong> Bạn đã thêm KH thành công.
</div>'; 
           $output .= '  
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
           '; $manv = $_SESSION['id_nv']; 
              $thang = date("m");
              $nam = date("Y");
              $xemdoanhthu = xemdoanhthu($manv,$thang,$nam);
              $stt = 0;
              while ($row_xemdoanhthu = mysql_fetch_array($xemdoanhthu)){
                ob_start();
                $stt++;
                $output .= '  
                    <tr class="roweven" id ="'.$row_xemdoanhthu['id_dlkpi'].'">
                    <td>'.$stt.'</td>
                    <td>'.$row_xemdoanhthu['makh'].'</td>
                    <td>'.$row_xemdoanhthu['congty'].'</td>
                    <td>'.$row_xemdoanhthu['tamtinh'].'</td>
                    <td>'.$row_xemdoanhthu['phaithu'].'</td>
                    <td>'.$row_xemdoanhthu['damnhan'].'</td>
                    <td>'.$row_xemdoanhthu['nodk'].'</td>
                    <td>'.$row_xemdoanhthu['thucthu'].'</td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td><input type="checkbox"/></td>
                    <td width="85px">
                 <div class="btn-group">
                  <button type="button" data-toggle="modal" data-target="#dataModal" data-id="'.$row_xemdoanhthu['id_dlkpi'].'" class="btn btn-primary btn-xs xemdlkpi">Xem</button>
                  <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="btn btn-default btn-xs" href="doanhthu_edit.php?id_dlkpi='.$row_xemdoanhthu['id_dlkpi'].'">Sửa</a></li>
                    <li><a class="btn btn-default btn-xs xoadlkpi" data-id="'.$row_xemdoanhthu['id_dlkpi'].'">Xóa</a></li>
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
                  <label> Tổng KH: '.$total_kpi.'</label>
                </div></div>
              <div class="col-sm-1"> 
              <div class="form-group">
                  <label> Doanh thu: '.$total_dthu.'</label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> Phải thu: </label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label> Đã thu: </label>
                </div></div>
                <div class="col-sm-2"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                <div class="col-sm-1"> 
                <div class="form-group">
                  <label></label>
                </div></div>
                </div>
               </div>
            </div>
                    ';  
      }  
      echo $output;  
 }  
 ?>  

