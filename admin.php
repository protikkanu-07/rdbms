<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoomiinitiative</title>
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
       .date
       {
         position: absolute;
         top:20%;
         left:43%;
         text-align:center;
       }
       #submit
       {
          margin:5px 45px;
       }
       .body{
        background-color: gainsboro;
        background-size: 100%;
        position:absolute;
        top:20%;
        left:5%;
        right:5%;
        bottom:15%;
        height:700px;
        width:1375px;
       }
    </style> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <img src="logo4.png" class="bd-placeholder-img round" width="55" height="50" />
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin.html">Schedule</a>
        <li class="nav-item">
          <a class="nav-link" href="updateuser.html">Update User</a>
        </li>
         <li class="nav-item ">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="window.location.href='login.html'">Log out</button>
           </li>
       </ul>
     </div>
     </nav>
    <div class="body">
    <div class="date">
      <form action="admin.php" method="post">
       <input name="dates" type="date" required><br><br>
       <input id="submit" type="submit" >
      </form> 
    </div> 
  <?php 
      include('connection.php');
      session_start();
      $a=false;
      $user=$_SESSION['email'];
      $date=$_POST['dates'];

      $check = "SELECT scheduler_table.d_t,citizen_records.house_no,scheduler_table.schedule
                 FROM `scheduler_table` 
                 INNER JOIN citizen_records
                 ON scheduler_table.citizen_record_id=citizen_records.citizen_record_id
                 INNER JOIN collection_trucks
                 ON scheduler_table.truck_id=collection_trucks.truck_id
                 WHERE scheduler_table.d_t='$date' and collection_trucks.collection_point='$user';";

      $result = $conn->query($check);

      if($result->num_rows > 0 )
      {
        $a=true;
   ?>
       <table align="center">
       <tr>
           <th>Date</th>
           <th>House No</th>
           <th>Schedule</th>
      </tr>
    <?php
        echo "<style>table{
        margin: 320px 443px;
        padding: 25px;
        border: solid black 2px;
        width:500px;
        background-color: honeydew;
        }</style>";

        echo "<style>th,td{
          margin: 150px 565px;
          padding: 15px;
          border: dotted black 1px;
          width:500px;
          text-align: center;
          }</style>";

       while($row=mysqli_fetch_assoc($result))
       {
    ?>
    <tr>
        <td><?php echo $row['d_t'];?></td>
        <td><?php echo $row['house_no'];?></td>
        <td><?php echo $row['schedule'];?></td>
    <?php
       }
      } 
      else if($a==false)
      {
    ?>     
    </tr>    
   </table>
   <div class="no">
       <?php
         echo "<style>.no{
                text-align:center;
                position: absolute;
                top:40%;
                left: 36%;
                color:white;
                font-weight:bolder;
                font-size:25px;
                </style>";
        echo "NO SCHEDULES FOR ".$date;
         }  
       ?>     
   </div> 
   </div>       
</body>
</html>