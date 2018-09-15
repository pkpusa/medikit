<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
//$q = "1";
require "dbconnection.php";/*
$sql2="SELECT * FROM doctors  WHERE doctorID = '".$q."'"
$results = $conn->query($sql2);
if ($results->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $dname = $row["doct_name"]
    }
}*/

$sql="SELECT * FROM booking WHERE doctorID = '".$q."'";

//$sql = "SELECT doctors.doctorId, doctors.doct_name, booking.date, booking.timeslot FROM booking INNER JOIN doctors ON booking.doctorID  = doctors.doctorID";
$result = $conn->query($sql);
        
if ($result->num_rows > 0) {
    echo"Booked Slots:";
    echo "<table><tr><th>Date </th><th>Time :</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["timeslot"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No Booking the Selected Doctor";
}

$conn->close();
//mysqli_select_db($con,"ajax_demo");
/*
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);*/
?>
</body>
</html>