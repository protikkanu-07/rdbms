<?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $mydb="rdbms";
         $insert=false;
         
         // Create connection
         $conn = new mysqli($servername, $username, $password,$mydb);
         
         // Check connection
         if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
         }
?>
         