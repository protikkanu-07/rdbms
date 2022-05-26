<?php
  include("connection.php");
  $number=$_POST["confirmation"];
  session_start();
  $id=$_SESSION['citizen_record_id'];
  
  $sql="SELECT * FROM
  `citizen_records`
  WHERE citizen_record_id='$id' AND Phone='$number' ";

   $result=$conn->query($sql);
   if($result->num_rows == 1)
   {
    header("Location: http://localhost/RDBMS_new/slotcheck.php?success");
   } 
   else
   {
    header("Location: http://localhost/RDBMS_new/form.html?wrongcredential");
   }  
?>