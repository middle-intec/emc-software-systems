 <?php  
 session_start();
 require"../lib/mConnection.php";
 if(isset($_POST["id"]))  
 {  
      foreach($_POST["id"] as $id)  
      {  
           $sql = "UPDATE kqkpi SET tgd = 0 WHERE id_kqkpi = '".$id."'";
           mysql_query($sql);  
      }  
 }  
 ?>  