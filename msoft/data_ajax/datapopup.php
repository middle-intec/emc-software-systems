<?php
	require"../../lib/mConnection.php";
	$key = $_POST['id'];
	$sql = "select * from thutuvan where id_thutuvan = '$key'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
	if($num > 0){
		while($row = mysql_fetch_array($query)){	
?>
	<h4 class="modal-title"><?php echo $row['congty'];?></h4>
	<?php echo '<hr/>';?>
	<p>
	<?php
	$donvi = $row['donvi'];
	$tgian = $row['tgian'];
	$dt = $row['dt'];
	if(strlen($dt)>0){
		$dthu = 'DT:'.$dt.';';
	}else{$dthu = '';}

	$ln = $row['ln'];
	if(strlen($ln)>0){
		$lnhuan = 'LN:'.$ln.';';
	}else{$lnhuan = '';}

	$vat = $row['vat'];
	if(strlen($vat)>0){
		$vatt = 'VAT:'.$vat.';';
	}else{$vatt = '';}
	
	$tndn = $row['tndn'];
	if(strlen($tndn)>0){
		$tndnn = 'TNDN:'.$tndn.';';
	}else{$tndnn = '';}
	
	$tuvan = $row['tuvan'];
	if(strlen($tuvan)>0){
		$tuvann = 'D.nghi:'.$tuvan.'';
	}else{$tuvann = '';}
	
	$noidungthu = 'TB: D.vi '.$donvi.' '.$tgian.' co: '.$dthu.' '.$lnhuan.' '.$vatt.' '.$tndnn.' '.$tuvann.'<br/>EMC–Nguoi tro ly dac luc cho DN!';

	echo $noidungthu;
	echo '<br/><hr/>';
	$dem = strlen($noidungthu)-5;
	if ($dem > 160){
		echo 'Đếm ký tự: <span class="btn btn-danger">'.$dem.'</span>';
		echo '<br/>';
		echo '<div class="alert alert-danger">
			    <strong>Chú ý!</strong> Khi vượt qua tin thứ 2 thì chỉ có <strong>313</strong> ký tự  thôi nhé!
			  </div>';
	}else{
		echo 'Đếm ký tự: <span class="btn btn-success">'.$dem.'</span>';
	} 
	?>
	</p>
<?php
		}
	}
?>
