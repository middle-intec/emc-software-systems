 <?php  
 session_start();
 require"../lib/mConnection.php";
 if(($_SESSION["level"])==1){
 	$duyet = 1;
 }else{
 	$duyet = 2;
 }
 if(isset($_POST["id"]))  
 {  
      foreach($_POST["id"] as $id)  
      {  
           $sql = "UPDATE thutuvan SET duyet = '$duyet' WHERE id_thutuvan = '".$id."'";
           mysql_query($sql);  
      }  
 }  
 ?>  