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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .img-jn{
      background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(jn42.jpg);
      background-size: 70%,100%;
    }
    .slot-button{
        margin:6% 35%;
        display:flex;
        flex-direction:column;
        justify-conetent:center;
    }
    .btn-style{
        margin-bottom:10px;
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
    <div class="slot-button"> 
    <?php
    include('connection.php');
    session_start();
    date_default_timezone_set("Asia/Calcutta");
    $today=date("Y-m-d");

    $citizen=$_SESSION['citizen_record_id'];
    $truck=$_SESSION['truck_id'];

    $scheduled_or_not="SELECT * FROM `scheduler_table` 
    WHERE citizen_record_id='$citizen' AND d_t='$today'";
    
    $result = $conn->query($scheduled_or_not);

    if($result->num_rows == 1){
    ?>
    <h3>Already Scheduled</h3>
    <?php
    }
    else
    {
      $check= "SELECT schedule
      FROM `scheduler_table` 
      WHERE d_t ='$today' AND truck_id =$truck";
      
      $result = $conn->query($check);
    
    if($result->num_rows < 5) {

        $check= "SELECT schedule
        FROM `scheduler_table` 
        WHERE schedule='1' AND truck_id='$truck' AND d_t='$today'";
        
        $result = $conn->query($check);
    
        if($result->num_rows == 1){
        ?>  
          <button type="button" class="btn btn-success btn-lg btn-style" disabled>Slot 1<br>( 4:00 - 4:10 )</button>
        <?php
        }
        else{
        ?>
        <button type="button" class="btn btn-success btn-lg btn-style" onclick="location.href='scheduledbycustomer.php?schedule=1' ">Slot 1<br>( 4:00 - 4:10 )</button>  
        <?php
        }
        $check= "SELECT schedule
        FROM `scheduler_table` 
        WHERE schedule='2' AND truck_id='$truck' AND d_t='$today'";
        
        $result = $conn->query($check);
    
        if($result->num_rows == 1){
        ?>  
         <button type="button" class="btn btn-success btn-lg btn-style"  disabled>Slot 2<br>( 4:12 - 4:22 )</button>
        <?php
        }
        else{
        ?>
        <button type="button" class="btn btn-success btn-lg btn-style" onclick="location.href='scheduledbycustomer.php?schedule=2' ">Slot 2<br>( 4:12 - 4:22 )</button>
        <?php
        }
        $check= "SELECT schedule
        FROM `scheduler_table` 
        WHERE schedule='3' AND truck_id='$truck' AND d_t='$today'";
        
        $result = $conn->query($check);
    
        if($result->num_rows == 1){
        ?>  
        <button type="button" class="btn btn-success btn-lg btn-style"  disabled>Slot 3<br>( 4:24 - 4:34 )</button>
        <?php
        }
        else{
        ?>
        <button type="button" class="btn btn-success btn-lg btn-style" onclick="location.href='scheduledbycustomer.php?schedule=3' " >Slot 3<br>( 4:24 - 4:34 )</button>
        <?php
        }
        $check= "SELECT schedule
        FROM `scheduler_table` 
        WHERE schedule='4' AND truck_id='$truck' AND d_t='$today'";
        
        $result = $conn->query($check);
    
        if($result->num_rows == 1){
        ?>  
        <button type="button" class="btn btn-success btn-lg btn-style"  disabled>Slot 4<br>( 4:36 - 4:46 )</button>
        <?php
        }
        else{
        ?>
        <button type="button" class="btn btn-success btn-lg btn-style" onclick="location.href='scheduledbycustomer.php?schedule=4' ">Slot 4<br>( 4:36 - 4:46 )</button>
        <?php
        }
        $check= "SELECT schedule
        FROM `scheduler_table` 
        WHERE schedule='5' AND truck_id='$truck' AND d_t='$today'";
        
        $result = $conn->query($check);
    
        if($result->num_rows == 1){
        ?>  
        <button type="button" class="btn btn-success btn-lg btn-style"  disabled>Slot 5<br>( 4:50 - 5:00 )</button>
        <?php
        }
        else{
        ?>
        <button type="button" class="btn btn-success btn-lg btn-style" onclick="location.href='scheduledbycustomer.php?schedule=5' ">Slot 5<br>( 4:50 - 5:00 )</button>
        <?php
        }}
        else {
          ?>
          <h3>No slots available</h3>
          <?php
        }}
        ?>
    </div>      
</body>
</html>