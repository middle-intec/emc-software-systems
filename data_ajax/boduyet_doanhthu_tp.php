 <?php  
 session_start();
 require"../lib/mConnection.php";
 if(isset($_POST["id"]))  
 {  
      foreach($_POST["id"] as $id)  
      {  
           $sql = "UPDATE dlkpi SET tp = 0 WHERE id_dlkpi = '".$id."'";
           mysql_query($sql);  
      }  
 }  
 ?>  