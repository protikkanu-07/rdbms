<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoomiinitiative</title>
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <style>
    .img-jn{
      background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(jn42.jpg);
      background-size: 70%,100%;
    }
    </style>  
</head>
<body>
 
<div class="jumbotron jumbotron-fluid text-center img-jn" style="margin-bottom:0">
  <h1 class="display-4"><font color="white">Bhoomi</font></h1>
    <p name="tagline"><font color="white">With the aim to clean and beautify Kalamassery</font></p>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="logo4.png" class="bd-placeholder-img round" width="55" height="50" />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
          <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="initiative.html">The Initiative</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="form.html">Collection Center</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
    </nav> 
    <div class="blank">
    <?php
      echo"<style> .blank{
        margin: 0;
        position: absolute;
        top: 75%;
        left: 28%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
       }</style>";
      echo "<img src=schedule..jpg width=800px height=500px />" 
    ?>
  </div> 
  <div class="user">     
    <p class="s">    
<?php
include('connection.php');
session_start();
date_default_timezone_set("Asia/Calcutta");
$today=date("Y-m-d");

$now=date("h:ia");
$d=mktime(15,00);
$maxtime=date("h:ia", $d);

echo"<style> .s{
  margin: 0;
  position: absolute;
  top: 70%;
  left: 75%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 20px;
  font-weight: bolder;
 }</style>";

//getting copied values;
$citizen=$_SESSION['citizen_record_id'];
$truck=$_SESSION['truck_id'];
$schedule=$_GET['schedule'];

$sql="INSERT INTO scheduler_table (citizen_record_id, truck_id, schedule)
      VALUES ($citizen,$truck,$schedule)";

if($conn->query($sql)== true)
{
    echo "Scheduled <br><br>";
    $p="SELECT s_time 
    FROM `pickup_time`
    WHERE schedule=$schedule";

  $p_time = $conn->query($p);
  $t = $p_time->fetch_assoc();

  $d=date("d-m-Y");
  echo  "Date: ";
  echo  $d."<br><br>";
  echo  "Slot No: " ;
  echo  $schedule."<br><br>";
  echo  "Pickup Time : ";
  echo  $t['s_time'];
  }
  
$conn->close();
?>
</p>
</div>
<div class="next" >
      <?php
             echo "<style>.next{
              margin: 30px 0px;
              position: absolute;
              top: 110%;
              left:50%;
              }</style>"; 
            echo "<button  class=btn btn-bg-secondary my-2 my-sm-0  my-2 my-sm-0 
            onclick=window.location.href='form.html'><font color=blue size=4px>Back</font></button>"; 
     ?> 
</div>          
</body>
</html>
          