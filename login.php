<?php

   include("connection.php");
   session_start();

   $user=$_POST['email'];
   $password=$_POST['pass'];

   $_SESSION['email']=$user;
   echo $_SESSION['email'];

   if (isset($_POST['email'])) 
   { 
         $sql= "SELECT * 
         FROM `admin` 
         WHERE admin.username = '$user'";
        
       $result=$conn->query($sql);
       
       if($result->num_rows == 1 )
       {
         $row = mysqli_fetch_assoc($result);
        if($password == $row['password']) 
        {
         session_start();
         $SESSION['username']=$user; 
         header("Location: http://localhost/RDBMS_new/admin.html?login=success");
         exit();} 
        else{
          header("Location: http://localhost/RDBMS_new/login.html?error=password_wrong");
          exit();}
        }
        else
        {
          header("Location: http://localhost/RDBMS_new/login.html?error=username_wrong");
          exit();
        }
    }   
?>