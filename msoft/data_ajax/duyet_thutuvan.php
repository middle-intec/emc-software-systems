 <?php  
 session_start();
 require"../../lib/mConnection.php";
 	$duyet = 1;
 if(isset($_POST["id"]))  
 {  
      foreach($_POST["id"] as $id)  
      {  
           $sql = "UPDATE thutuvan SET duyet = '$duyet' WHERE id_thutuvan = '".$id."'";
           mysql_query($sql);  
      }  
 }  
 ?>  