<?php 
$con=mysql_connect("localhost","root","") or die (" Không thể kết nối tới cơ sở dữ liệu");
mysql_select_db("emcsoftware",$con) or die  (" Không thể kết nối tới cơ sở dữ liệu");
mysql_set_charset('utf8');
?>