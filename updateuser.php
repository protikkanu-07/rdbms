<?php
 include("connection.php");
 session_start();
 $user=$_SESSION['email'];
 
 $house=$_POST['house'];
 $name=$_POST['newname'];
 $number=$_POST['newphone'];

$sql="SELECT * 
FROM collection_points
INNER JOIN citizen_records
ON citizen_records.citizen_record_id=collection_points.citizen_record_id
WHERE collection_points.collection_point='$user' AND citizen_records.house_no='$house'";

$result=$conn->query($sql);

if($result->num_rows == 1)
{
    $sql = "UPDATE `citizen_records` 
            SET Name='$name',Phone='$number'
            WHERE house_no='$house'";

        if ($conn->query($sql) === TRUE) {
            header("Location:http://localhost/RDBMS_new/admin.html?updatedsuccesfully");
            exit();}
        else
        {
            echo "not updated";
        }    
}
else{
    header("Location: http://localhost/RDBMS_new/updateuser.html?NosuchHouse");
    exit();
}
?>