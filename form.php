<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoomiinitiative</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="form.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <title>Bhoomiinitiative</title>
  <style>
  .img-jn{
      background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(jn42.jpg);
      background-size: 70%,100%;
    }
  </style>  
</head>
<body>
 
<div class="jumbotron jumbotron-fluid text-center img-jn" style="margin-bottom:0">
    <h1 class="display-4"><font color="white">GO recycle</font></h1>
    <p name="tagline"><font color="white">With the aim to clean and beautify Dhaka</font></p>
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
<?php
include('connection.php');
session_start();

if(isset($_POST['house']))
{
  $ward=$_POST['ward'];  
  $house=$_POST['house'];

  // writing your query
$check = 
"SELECT *
 FROM collection_trucks 
 INNER JOIN collection_points 
 ON collection_points.collection_point=collection_trucks.collection_point 
 INNER JOIN citizen_records 
 ON citizen_records.citizen_record_id=collection_points.citizen_record_id 
 WHERE citizen_records.ward_no=$ward AND citizen_records.house_no=$house";

//exceuting the query
 $result = $conn->query($check);



//fetching results
if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $insert=true;
      $citizen=$row["citizen_record_id"];
      $truck=$row["truck_id"];

      //copying values
      $_SESSION['citizen_record_id']=$citizen;
      $_SESSION['truck_id']=$truck;
 }
}
$conn->close();
?>
    <div class="output">
          <p class="result">
          <?php
           if($insert==true){
            echo "<style> .output{
              margin:100px;
              padding:10px;
              text-align: center;
              border:3px solid black;
              }</style>";  
            echo "<style> .result{
              text-align: left;
              font-size: 20px;
              font-weight: bolder;
              margin:40px;
              padding:20px;
              background-image: url(submit.jpeg);
              background-position: right;
              background-size: 88%;
              }</style>"; 
            echo "<br><br>"."Your Collection Point is :  <br>" . $row["collection_point"] . "<br><br>";
            echo "Collection Truck Assigned:  <br>" .$row["truck_index"]."<br><br>";
            echo "House No:  <br>".$row["house_no"]. "<br><br>"."  Ward No:   <br>".$row["ward_no"]. "<br><br>";
          ?>
          </p>
          <?php
              echo "<button  class=btn btn-bg-secondary my-2 my-sm-0     my-2 my-sm-0 onclick=myFunction()><font color=blue size=4px>Schedule Pickup</font></button>";
              echo "<button  class=btn btn-bg-secondary my-2 my-sm-0  my-2 my-sm-0 onclick=window.location.href='form.html'><font color=blue size=4px>Back</font></button>";  
            }
          ?>   
          </div>
          <div class="invalid">
            <?php
              if($insert==false)
              {
                echo "<style> .invalid{
                  background-color:lightcyan;
                  margin:30px;
                  padding: 30px;
                  border:3px solid black;
                  text-align:center;
                  }</style>";  
                  echo "<img src=invalid.jpeg width=25% height=25% />";    
            ?>      
            <p class="back">
          <?php
                echo "<style> .back{
                  text-align: center;
                  font-size: 20px;
                  font-weight: bolder;
                  margin:20px;
                  }</style>";       
            echo "INVALID ENTRY". "<br><br>";
            echo "<button  class=btn btn-bg-secondary my-2 my-sm-0  my-2 my-sm-0 
            onclick=window.location.href='form.html'><font color=blue size=4px>Back</font></button>";
                }
            error_reporting(0);
          ?>  
          </P>
          </div>   
          <script>
            function myFunction() {
                var ask = window.confirm("Do you want to schedule?");
                 if (ask) {
                    window.location.href = "confirmschedule.html";

                }
            }
    </script> 
</body>
</html>
          