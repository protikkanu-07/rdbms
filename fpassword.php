<?php
  include("connection.php");

  $user=$_POST['email'];
  $newpass=$_POST['New'];
  $confirmpass=$_POST['confirm'];

  if($newpass == $confirmpass)
  {
      $check="SELECT * FROM `admin`
      WHERE username='$user'";

      $result=$conn->query($check);

      if($result->num_rows == 1)
      {
        $sql = "UPDATE `admin` 
                SET password='$newpass' WHERE username='$user'";

        if ($conn->query($sql) === TRUE) {
            header("Location:http://localhost/RDBMS_new/login.html?passwordupdatedsuccesfully");
            exit();
        }
      }
      else
      {
        header("Location:http://localhost/RDBMS_new/fpassword.html?wrongusername");
        exit();
      }
  }
  else
  {
      header("Location:http://localhost/RDBMS_new/fpassword.html?passwordsdonotmatch");
      exit();
  }
?>